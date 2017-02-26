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

            add_action( 'admin_head', [$this,'googletag_manager_admin'] );

            if (function_exists('acf_add_options_page')) {
                acf_add_options_page('Sitewide Options');
                acf_add_options_page('Homepage Options');
                acf_add_options_page('Newcomers Panel Options');
                acf_add_options_page('Social Options');
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
            wp_enqueue_style('bootstrap', "//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css", [], '3.3.7');

            wp_enqueue_style('flexslider', get_template_directory_uri() . '/css/flexslider.css', [], '1.1');

            wp_enqueue_style('tables', "//cdn.datatables.net/v/bs/dt-1.10.12/fh-3.1.2/r-2.1.0/datatables.min.css", ['bootstrap'], null);

            wp_enqueue_style('calendar',  get_template_directory_uri() . "/calendar/css/responsive-calendar.css?v=1.1", ['bootstrap'], null);






            //JS
            wp_register_script('underscore-js', '//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js', array('jquery'), '1.8.3', FALSE);
            wp_enqueue_script('underscore-js');


            // wp_register_script('calendar-js', '//cdn.rawgit.com/kylestetz/CLNDR/master/clndr.min.js', array('jquery'), '1.3.4', FALSE);
            // wp_enqueue_script('calendar-js');
            //wp_enqueue_style('prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css', [], null);
            //wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', [], null);
            //wp_enqueue_style('carousel', get_template_directory_uri() . '/css/owl.carousel.css', [], null);

            wp_register_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.7', FALSE);
            wp_enqueue_script('bootstrap-js');


             wp_register_script('table-js', '//cdn.datatables.net/v/bs/dt-1.10.12/fh-3.1.2/r-2.1.0/datatables.min.js', array('jquery', 'bootstrap-js'), '1.10.12', FALSE);
            wp_enqueue_script('table-js');

            wp_register_script('calendar-js', get_template_directory_uri() . '/calendar/js/responsive-calendar.js', array('jquery'), '0.9', FALSE);
            wp_enqueue_script('calendar-js');

            // FONTS
            wp_enqueue_style('roboto', '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic', [], null);
            wp_enqueue_style('fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', [], '4.7.0');

            wp_enqueue_style('full-calendar', '//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.min.css', [], '3.2.0');

            wp_enqueue_style('full-calendar-print', '//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.print.css', [], '3.2.0',  "print");

            wp_enqueue_style('mainstyle', get_template_directory_uri() . '/css/style.css', ['full-calendar'], '1.20');

            wp_enqueue_style('gravity-forms-minimal', get_template_directory_uri() . '/css/gravity-forms/style.css', ['mainstyle'], '1.18');

            wp_enqueue_style('gravity-forms-minimal-icons', get_template_directory_uri() . '/css/gravity-forms/style-icons.css', ['mainstyle', 'gravity-forms-minimal'], '1.18');





        }

        function enqueue_scripts()
        {

            wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', [], null, true);

            wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', [], null, true);

            // wp_enqueue_script('prettyphoto-js', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', [], null, true);

            // wp_enqueue_script('nicescroll-js', get_template_directory_uri() . '/js/jquery.nicescroll.min.js', [], null, true);

            wp_enqueue_script('superfish-js', get_template_directory_uri() . '/js/superfish.min.js', [], null, true);

            // wp_enqueue_script('flexslider-js', get_template_directory_uri() . '/js/jquery.flexslider-min.js', [], null, true);

            wp_enqueue_script('flexslider-js', 'https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.3/jquery.flexslider.js', [], null, true);



           // wp_enqueue_script('carousel-js', get_template_directory_uri() . '/js/owl.carousel.js', [], null, true);

            //wp_enqueue_script('animate-js', get_template_directory_uri() . '/js/animate.js', [], null, true);

            //wp_enqueue_script('blackandwhite-js', get_template_directory_uri() . '/js/jquery.BlackAndWhite.js', [], null, true);


            wp_enqueue_script('moment-js', '//cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js', ['jquery'], '2.17.1', true);

            wp_enqueue_script('full-calendar-js', '//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.js', ['jquery', 'moment-js'], '3.2.0', true);

            wp_enqueue_script('myscript-js', get_template_directory_uri() . '/js/myscript.js', ['full-calendar-js'], '1.10', true);

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

            if ($gmemcache->get('grace-options') && 1!=1) {
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

            if ($gmemcache->get('grace-publications') && 1!=1) {
                $data['publications'] = $gmemcache->get('grace-publications');
                // echo '<!-- options cached -->';
            } else {

                $args = array(
                    'post_type' => ['grace_notes', 'bulletin_insert', 'other_publication'],
                    'posts_per_page' => 3,
                    'order' => 'DESC',
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

        function googletag_manager_admin() {
            echo "<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PVRW22Q');</script>";
        }



    }



new BaseSite();
function eventsSearch() {
    return EventsSearch::getInstance();
}


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

//[foobar]
function sermons_shortcode( $atts ){

    $args = [

      'post_type' => 'sermon',
      'posts_per_page' => 2,
      'order' => 'DESC',
      'orderby' => 'meta_value',
      'meta_key' => 'date_given',

    ];

    $sermons = ExtendedTimber::get_posts($args,'ExtendedTimberPost');
    $content = Timber::compile('partials/sermons-small.twig', ['sermons' => $sermons]);
    return $content;
}
add_shortcode( 'sermons', 'sermons_shortcode' );


/* This function handles setting up Date archive rewrite rules for
 * ANY custom post type - You pass the CPT, and it will use the
 * re-written slug if applicable.
 */
function eh_generate_date_archives( $cpt ) {
    global $wp_rewrite;
    $rules = array();
    $post_type = get_post_type_object( $cpt );
    $slug_archive = $post_type->has_archive;
    if ( $slug_archive === false ) return $rules;
    if ( $slug_archive === true ) {
        $slug_archive = $post_type->rewrite['slug'] ? $post_type->rewrite['slug'] : $post_type->name;
    }
    $dates = array(
        array(
            'rule' => "([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})",
            'vars' => array( 'year', 'monthnum', 'day' )
        ),
        array(
            'rule' => "([0-9]{4})/([0-9]{1,2})",
            'vars' => array( 'year', 'monthnum' )
        ),
        array(
            'rule' => "([0-9]{4})",
            'vars' => array( 'year' )
        )
      );
    foreach ($dates as $data) {
        $query = 'index.php?post_type='.$cpt;
        $rule = $slug_archive.'/'.$data['rule'];

        $i = 1;
        foreach ( $data['vars'] as $var ) {
            $query.= '&'.$var.'='.$wp_rewrite->preg_index($i);
            $i++;
        }
        $rules[$rule."/?$"] = $query;
        $rules[$rule."/feed/(feed|rdf|rss|rss2|atom)/?$"] = $query."&feed=".$wp_rewrite->preg_index($i);
        $rules[$rule."/(feed|rdf|rss|rss2|atom)/?$"] = $query."&feed=".$wp_rewrite->preg_index($i);
        $rules[$rule."/page/([0-9]{1,})/?$"] = $query."&paged=".$wp_rewrite->preg_index($i);
    }
    return $rules;
}
add_action( 'plugins_loaded', 'eh_generate_date_archives');


function fix_email_href($content) {

    return preg_replace('/href="([\w-]+@([\w-]+\.)+[\w-]+)"/', 'href="mailto:$1"', $content);

}
add_filter( 'the_content', 'fix_email_href' );

function post_process_event( $post_id ) {

    if ( wp_is_post_revision( $post_id ) )
        return;

    $type = get_post_type($post_id);
    if ($type!='event') {
        return;
    }

    $post = get_post($post_id);

    $fields = [
        'event_title',
        'event_description',
        'event_start_time',
        'event_end_time',
        'location',
    ];

    foreach ($fields as $field) {

        $google = $field . '_google';
        $override = $field . '_override';
        $use = $field . '_use';

        $google = get_field($google, $post_id, false);
        $override = get_field($override, $post_id, false);
        $use = '';

        if (empty($override)) {
            $use = $google;
        } else {
            $use = $override;
        }
        update_field($field . '_use', $use, $post_id);

        if ($field=='event_start_time') {
            $post->post_date = $use;
        }

        if ($field=='event_title') {
            $post->post_title = $use;
        }

        if ($field=='event_description') {
            $post->post_content = $use;
        }

    }



    // unhook this function so it doesn't loop infinitely
    remove_action('save_post', 'post_process_event');

    // update the post, which calls save_post again
    wp_update_post($post);

    $status = get_post_status($post_id);

    if ($status=='future') {
        wp_publish_post($post_id);
    }

    // re-hook this function
    add_action('save_post', 'post_process_event');


}
add_action( 'acf/save_post', 'post_process_event', 20 );

function admin_event_js() {
    ?>
        <script>
            jQuery('document').ready(function() {
                jQuery('#acf-field_58aa13c989531, #acf-field_58aa13d989533, #acf-field_58aa13fc89535, #dp1487555824634, #acf-field_58aa186289538, #dp1487555824637, #acf-field_58aa18ac8953a, #acf-field_58aa18c18953c, #acf-field_58aa18c98953d').prop('disabled', true);

                jQuery('#acf-field_58aa13fc89535, #acf-field_58aa186289538').next('.hasDatepicker').prop('disabled',true);

                jQuery('div.acf-field-58aa48d7b6fa8, div.acf-field-58aa48f1b6fa9, div.acf-field_58aa4905b6faa, div.acf-field-58aa491db6fab, div.acf-field-58aa4932b6fac, div.acf-field-58aa4905b6faa').hide();
            });


            console.log('finished');
        </script>
    <?php
}
add_action('admin_footer', 'admin_event_js');




