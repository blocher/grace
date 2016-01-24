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
            // require_once(get_template_directory() . '/includes/theme-customizer.php');
            // require_once(get_template_directory() . '/includes/admin.php');
            require_once(get_template_directory() . '/includes/functions-timber.php');

            add_action('wp_enqueue_scripts', array($this, 'enqueue_styles'));
            add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
            add_action('admin_init', array($this, 'add_editor_styles'));
            //add_action('after_setup_theme', array($this, 'add_image_sizes'));

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

            parent::__construct();
        }

        // function add_image_sizes() {
        //     add_image_size( 'homepage_module', 512, 600, 1 );
        //     add_image_size( 'single_post', 1000, 553, 1 );
        // }

        function enqueue_styles()
        {
            $query_args = array(
                'family' => 'Lato:400,700,900|Volkhov:400,700|Vollkorn:400italic',
                'subset' => 'latin'
            );

            wp_enqueue_style('google-fonts', add_query_arg($query_args, "//fonts.googleapis.com/css"), array(), null);
            wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array(), null);
            wp_enqueue_style('base-styles', get_template_directory_uri() . '/css/style.e7b39850.min.css', array('google-fonts'), null);
        }

        function enqueue_scripts()
        {

            wp_enqueue_script('base-scripts', get_template_directory_uri() . '/js/scripts.81312d78.min.js', array('jquery'), null, true);

            if(is_home()){
                wp_enqueue_script('slick', get_template_directory_uri() . '/js/lib/slick.min.js', array('jquery'), null);
            }

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





