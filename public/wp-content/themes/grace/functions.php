<?php

$acf_loaded = checkPluginDependency('acf_pro','Advanced Custom Fields Pro','class');
$timber_loaded = checkPluginDependency('Timber','Timber','class');

if ($timber_loaded && $acf_loaded) {

    Timber::$locations = array(
      get_template_directory() . '/views'
    );


    class BaseSite extends TimberSite
    {
        function __construct(){

            require_once(ABSPATH . '../vendor/autoload.php');
            require_once(get_template_directory() . '/includes/functions-timber.php');

            add_action('wp_enqueue_scripts', array($this, 'enqueue_styles'));
            add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
            add_action('admin_init', array($this, 'add_editor_styles'));
            add_action('after_setup_theme', array($this, 'add_image_sizes'));

            add_theme_support('post-thumbnails');
            add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
            add_theme_support( 'title-tag' );

            //allow iframes
            add_filter( 'wp_kses_allowed_html', array($this, 'allow_iframes'), 1, 1 );
            add_action('init', array($this, 'allow_iframes_global'), 1);

            if (function_exists('acf_add_options_page')) {
                acf_add_options_page();
                acf_add_options_sub_page('Sitewide');
                acf_add_options_sub_page('Homepage');
                acf_add_options_sub_page('Social');
            }

            add_theme_support( 'menus' );

            add_action('acf/save_post', [$this, 'clear_options_cache'], 20);
            add_filter('timber_context', [$this, 'load_custom_fields']);
            add_filter('timber_context', [$this, 'load_alerts']);
            add_action('acf/save_post', [$this, 'clear_publications_cache'], 20);
            add_filter('timber_context', [$this, 'load_publications']);

            parent::__construct();
        }

        function add_image_sizes() {
            add_image_size( 'homepage_module', 370, 192, 1 );
            add_image_size( 'single_post', 1000, 553, 1 );
            add_image_size( 'page_header', 1278, 257, 1 );
        }

        function enqueue_styles()
        {

            //CSS
            wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', [], null);
            wp_enqueue_style('flexslider', get_template_directory_uri() . '/css/flexslider.css', [], null);
            //wp_enqueue_style('prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css', [], null);
            //wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', [], null);
            //wp_enqueue_style('carousel', get_template_directory_uri() . '/css/owl.carousel.css', [], null);


            // FONTS
            wp_enqueue_style('roboto', '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic', [], null);
            wp_enqueue_style('fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', [], null);

            wp_enqueue_style('mainstyle', get_template_directory_uri() . '/css/style.css', [], null);


        }

        function enqueue_scripts()
        {

            wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', [], null, true);

            wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', [], null, true);

           // wp_enqueue_script('prettyphoto-js', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', [], null, true);

           // wp_enqueue_script('nicescroll-js', get_template_directory_uri() . '/js/jquery.nicescroll.min.js', [], null, true);

            wp_enqueue_script('superfish-js', get_template_directory_uri() . '/js/superfish.min.js', [], null, true);

            wp_enqueue_script('flexslider-js', get_template_directory_uri() . '/js/jquery.flexslider-min.js', [], null, true);

           // wp_enqueue_script('carousel-js', get_template_directory_uri() . '/js/owl.carousel.js', [], null, true);

            //wp_enqueue_script('animate-js', get_template_directory_uri() . '/js/animate.js', [], null, true);

            //wp_enqueue_script('blackandwhite-js', get_template_directory_uri() . '/js/jquery.BlackAndWhite.js', [], null, true);

            wp_enqueue_script('myscript-js', get_template_directory_uri() . '/js/myscript.js', [], null, true);

        }

        function add_editor_styles()
        {
            add_editor_style(get_template_directory_uri() . '/css/editor-style.min.css');
        }

        //allows iframes in post
        function allow_iframes( $allowedposttags ) {
          $allowedposttags['iframe'] = array();
          $allowedposttags['iframe']['src'] = array();
          $allowedposttags['iframe']['controls'] = array();
          $allowedposttags['iframe']['height'] = array();
          $allowedposttags['iframe']['name'] = array();
          $allowedposttags['iframe']['sandbox'] = array();
          $allowedposttags['iframe']['seamless'] = array();
          $allowedposttags['iframe']['srcdoc'] = array();
          $allowedposttags['iframe']['width'] = array();
          $allowedposttags['iframe']['scrolling'] = array();
          $allowedposttags['iframe']['longdesc'] = array();
          $allowedposttags['iframe']['frameborder'] = array();
          $allowedposttags['iframe']['marginheight'] = array();
          $allowedposttags['iframe']['marginwidth'] = array();
          $allowedposttags['iframe']['allowfullscreen'] = array();


          return $allowedposttags;
        }

        function allow_iframes_global() {
            global $allowedtags;
            $allowedtags = $this->allow_iframes($allowedtags);
            global $allowedposttags;
            $allowedposttags = $this->allow_iframes($allowedposttags);
        }

        function load_alerts($data) {

            $date = new DateTime('now', new DateTimeZone('America/New_York'));
            $date = $date->format("Y-m-d H:i:s");

            $args = [
                'post_type' => 'alert',
                'order' => 'DESC',
                'orderby' => 'meta_value',
                'meta_key' => 'start_date_and_time',
                'posts_per_page' => 1,
                'meta_query' => [
                    [
                        'key'     => 'start_date_and_time',
                        'value'   => $date,
                        'compare' => '<',
                    ],
                    [
                        'key'     => 'end_date_and_time',
                        'value'   => $date,
                        'compare' => '>',
                    ],
                    'relation' => 'AND',
                ],
            ];
            $data['alerts'] = ExtendedTimber::get_posts($args,'ExtendedTimberPost');
            //pp($data['alerts']);
            return $data;
        }

        function load_custom_fields($data) {

            $gmemcache = new Memcached();
            $gmemcache->addServer('localhost', 11211);

            if ($gmemcache->get('grace-options')) {
                $data['options'] = $gmemcache->get('grace-options');
                // echo '<!-- options cached -->';
            } else {
                $fields = get_fields('options');
                $options = (object) array();

                foreach ($fields as $key=>$value) {
                    $options->$key = $value;
                }

                $options->privacy_policy_link = isset($options->privacy_policy_link[0]->ID) ? new ExtendedTimberPost($options->privacy_policy_link[0]->ID) : '';
                $data['options'] = $options;
                $gmemcache->set('grace-options', $data['options'], time() + 86400); // Cache for 1 day
                // echo '<!-- options fresh -->';
            }

            return $data;

        }


        function clear_options_cache($post_id) {



            if ($post_id=='options') {
               $gmemcache = new Memcached();
               $gmemcache->addServer('localhost', 11211);
               $gmemcache->delete('grace-options');
            }
        }

        function load_publications($data) {

            $gmemcache = new Memcached();
            $gmemcache->addServer('localhost', 11211);

            if ($gmemcache->get('grace-publications')) {
                $data['publications'] = $gmemcache->get('grace-publications');
                // echo '<!-- options cached -->';
            } else {

                $args = array(
                    'post_type' => 'publication',
                    'post_per_page' => 3,
                    'order' => 'DESC',
                    'orderby' => 'meta_value',
                    'meta_key' => 'published_date',
                );
                $data['publications'] = Timber::get_posts($args, 'ExtendedTimberPost');
                $gmemcache->set('grace-publications', $data['publications'], time() + 86400); // Cache for 1 day
                // echo '<!-- options fresh -->';
            }

            return $data;

        }

        // function clear_publications_cache($post_id) {

        //     if (get_post_type($post_id)=='publication') {
        //        $gmemcache = new Memcached();
        //        $gmemcache->addServer('localhost', 11211);
        //        $gmemcache->delete('grace-publication');
        //     }
        // }


    }



new BaseSite();


}






/****************************
** Better debug functions **
****************************/

function setDebug() {
    if (function_exists('xdebug_get_code_coverage')) {
        ini_set('xdebug.var_display_max_depth', 5);
        ini_set('xdebug.var_display_max_children', 256);
        ini_set('xdebug.var_display_max_data', 1024);
    }
}

//Var dump all arguments and format them
function p() {
    setDebug();
    $args = func_get_args();
    $args = $args;
    foreach ($args as $value) {
      echo "<pre>"; var_dump($value); echo "</pre>";
    }
}
//Same as p() but with a die()
function pp() {
    setDebug();
    $args = func_get_args();
    $args = $args;
    foreach ($args as $value) {
      echo "<pre>"; var_dump($value); echo "</pre>";
    }
    die();
}

function displayMissingDependencyNotice( $plugin_name ) {

    if (is_admin()) {
        add_action('admin_notices', function() use ($plugin_name) {
             echo '<div class="error"><p>' . $plugin_name . ' not activated. Make sure you activate the plugin in <a href="' . esc_url(admin_url('plugins.php')) . '">' . esc_url(admin_url('plugins.php')) . '</a></p></div>';
        });
        return;
    }

    echo $plugin_name . ' not activated.  Please contact site administrator.';
    die();

}

function checkPluginDependency ($class_or_function_name, $plugin_name='', $type='function') {

    if (empty($plugin_name)) {
        $plugin_name = $class_or_function_name;
    }


    if ($type=='function' && !function_exists($class_or_function_name)) {
        displayMissingDependencyNotice($plugin_name);
        return false;
    }

    if (!class_exists($class_or_function_name)) {
        displayMissingDependencyNotice($plugin_name);
        return false;
    }

    return true;


}

//needed for get_current_template to work
add_filter( 'template_include', 'var_template_include', 1000 );
function var_template_include( $t ){
    $GLOBALS['current_theme_template'] = basename($t);
    return $t;
}

//echos the filename of the template being rendered
function get_current_template( $echo = false ) {
    if( !isset( $GLOBALS['current_theme_template'] ) )
        return false;
    if( $echo )
        echo $GLOBALS['current_theme_template'];
    else
        return $GLOBALS['current_theme_template'];
}


// Google Sheets API

// client ID
//  960883593214-ji2mbupp43hspg6llt8rmemeafgbpmb1.apps.googleusercontent.com
// clinet secret
//   BtznvSLoovKqoGUoa36hCLsC
// api key
//   AIzaSyAuOOYt7LxFlYkG-5hGAcp7hMZ-Dios5Q0

// function testGoogleSheets() {
//     $client = new Google_Client();
//     $client->setApplicationName("My Application");
//     $client->setDeveloperKey("AIzaSyAuOOYt7LxFlYkG-5hGAcp7hMZ-Dios5Q0 ");
//     $service = new Google_Service_Sheets($client);
//     $response = $service->spreadsheets_values->get('152-_P5rlYdPFZ6EcGdB0spKvnHgqA5CgRpjMOwTZiJY','Sheet1!A1:B10');
//     $values = $response->getValues();
//     p($values);
//     echo 'here'; die();

// }

// add_action('init','testGoogleSheets',1,0);

