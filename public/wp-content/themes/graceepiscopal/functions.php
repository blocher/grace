<?php

$acf_loaded    = checkPluginDependency( 'acf_pro', 'Advanced Custom Fields Pro', 'class' );
$timber_loaded = checkPluginDependency( 'Timber', 'Timber', 'class' );

if ( $timber_loaded && $acf_loaded ) {

	Timber::$locations = array(
		get_template_directory() . '/views',
	);


	class BaseSite extends TimberSite {

		function __construct() {

			require_once ABSPATH . '../vendor/autoload.php';
			require_once get_template_directory() . '/includes/functions-timber.php';

			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );
			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
			add_action( 'after_setup_theme', array( $this, 'add_image_sizes' ) );

			add_theme_support( 'post-thumbnails' );
			add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
			add_theme_support( 'title-tag' );

			//allow iframes
			add_filter( 'wp_kses_allowed_html', array( $this, 'allow_iframes' ), 1, 1 );
			add_action( 'init', array( $this, 'allow_iframes_global' ), 1 );

			add_action( 'admin_head', array( $this, 'googletag_manager_admin' ) );

			add_action( 'admin_head', array( $this, 'admin_styles' ) );

			if ( function_exists( 'acf_add_options_page' ) ) {
				acf_add_options_page( 'Sitewide Options' );
				acf_add_options_page( 'Homepage Options' );
				acf_add_options_page( 'Newcomers Panel Options' );
				acf_add_options_page( 'Social Options' );
			}

			add_theme_support( 'menus' );

			add_action( 'acf/save_post', array( $this, 'clear_options_cache' ), 20 );
			add_filter( 'timber_context', array( $this, 'load_custom_fields' ) );
			add_filter( 'timber_context', array( $this, 'load_alerts' ) );
			add_action( 'acf/save_post', array( $this, 'clear_publications_cache' ), 20 );
			add_filter( 'timber_context', array( $this, 'load_publications' ) );

			parent::__construct();
		}



		function admin_styles() {
			?>
		  <script>
			jQuery('document').ready(function() {
				jQuery("div[data-name='automatic_search_text'] input, div[data-name='automatic_search_text'] textarea").attr('disabled','disabled');
			});
		  </script>
			<?php
		}

		function add_image_sizes() {
			add_image_size( 'homepage_module', 370, 192, 1 );
			add_image_size( 'single_post', 1000, 553, 1 );
			add_image_size( 'page_header', 1278, 257, 1 );
			add_image_size( 'search_results', 192, 176, 1 );
			add_image_size( 'visitors_image', 468, 275, 1 );
		}

		function enqueue_styles() {
			 wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Lato|Volkhov', array(), '1' );

			//CSS
			wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7' );

			wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css', array(), '1.1' );

			wp_enqueue_style( 'tables', '//cdn.datatables.net/v/bs/dt-1.10.12/fh-3.1.2/r-2.1.0/datatables.min.css', array( 'bootstrap' ), null );

			wp_enqueue_style( 'calendar', get_template_directory_uri() . '/calendar/css/responsive-calendar.css?v=1.1', array( 'bootstrap' ), null );

			//JS
			wp_register_script( 'underscore-js', '//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js', array( 'jquery' ), '1.8.3', false );
			wp_enqueue_script( 'underscore-js' );

			// wp_register_script('calendar-js', '//cdn.rawgit.com/kylestetz/CLNDR/master/clndr.min.js', array('jquery'), '1.3.4', FALSE);
			// wp_enqueue_script('calendar-js');
			//wp_enqueue_style('prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css', [], null);
			//wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', [], null);
			//wp_enqueue_style('carousel', get_template_directory_uri() . '/css/owl.carousel.css', [], null);

			wp_register_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array( 'jquery' ), '3.3.7', false );
			wp_enqueue_script( 'bootstrap-js' );

			 wp_register_script( 'table-js', '//cdn.datatables.net/v/bs/dt-1.10.12/fh-3.1.2/r-2.1.0/datatables.min.js', array( 'jquery', 'bootstrap-js' ), '1.10.12', false );
			wp_enqueue_script( 'table-js' );

			wp_register_script( 'calendar-js', get_template_directory_uri() . '/calendar/js/responsive-calendar.js', array( 'jquery' ), '0.9', false );
			wp_enqueue_script( 'calendar-js' );

			wp_register_script( 'jquery.youtubebackground.js', get_template_directory_uri() . '/js/jquery.youtubebackground.js', array( 'jquery' ), '1.0.5', false );
			wp_enqueue_script( 'jquery.youtubebackground.js' );

			// FONTS
			wp_enqueue_style( 'roboto', '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic', array(), null );
			wp_enqueue_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );

			wp_enqueue_style( 'full-calendar', '//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.min.css', array(), '3.2.0' );

			wp_enqueue_style( 'full-calendar-print', '//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.print.css', array(), '3.2.0', 'print' );

			wp_enqueue_style( 'mainstyle', get_template_directory_uri() . '/css/style.css', array( 'full-calendar' ), '1.28' );

			wp_enqueue_style( 'gravity-forms-minimal', get_template_directory_uri() . '/css/gravity-forms/style.css', array( 'mainstyle' ), '1.20' );

			wp_enqueue_style( 'gravity-forms-minimal-icons', get_template_directory_uri() . '/css/gravity-forms/style-icons.css', array( 'mainstyle', 'gravity-forms-minimal' ), '1.21' );

		}

		function enqueue_scripts() {

			wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), null, true );

			wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), null, true );

			// wp_enqueue_script('prettyphoto-js', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', [], null, true);

			// wp_enqueue_script('nicescroll-js', get_template_directory_uri() . '/js/jquery.nicescroll.min.js', [], null, true);

			wp_enqueue_script( 'superfish-js', get_template_directory_uri() . '/js/superfish.min.js', array(), null, true );

			// wp_enqueue_script('flexslider-js', get_template_directory_uri() . '/js/jquery.flexslider-min.js', [], null, true);

			wp_enqueue_script( 'flexslider-js', 'https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.3/jquery.flexslider.js', array(), null, true );

			// wp_enqueue_script('carousel-js', get_template_directory_uri() . '/js/owl.carousel.js', [], null, true);

			//wp_enqueue_script('animate-js', get_template_directory_uri() . '/js/animate.js', [], null, true);

			//wp_enqueue_script('blackandwhite-js', get_template_directory_uri() . '/js/jquery.BlackAndWhite.js', [], null, true);

			wp_enqueue_script( 'moment-js', '//cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js', array( 'jquery' ), '2.17.1', true );

			wp_enqueue_script( 'full-calendar-js', '//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.js', array( 'jquery', 'moment-js' ), '3.2.0', true );

			wp_enqueue_script( 'myscript-js', get_template_directory_uri() . '/js/myscript.js', array( 'full-calendar-js' ), '1.16', true );

		}

		//allows iframes in post
		function allow_iframes( $allowedposttags ) {
			$allowedposttags['iframe']                    = array();
			$allowedposttags['iframe']['src']             = array();
			$allowedposttags['iframe']['controls']        = array();
			$allowedposttags['iframe']['height']          = array();
			$allowedposttags['iframe']['name']            = array();
			$allowedposttags['iframe']['sandbox']         = array();
			$allowedposttags['iframe']['seamless']        = array();
			$allowedposttags['iframe']['srcdoc']          = array();
			$allowedposttags['iframe']['width']           = array();
			$allowedposttags['iframe']['scrolling']       = array();
			$allowedposttags['iframe']['longdesc']        = array();
			$allowedposttags['iframe']['frameborder']     = array();
			$allowedposttags['iframe']['marginheight']    = array();
			$allowedposttags['iframe']['marginwidth']     = array();
			$allowedposttags['iframe']['allowfullscreen'] = array();

			return $allowedposttags;
		}

		function allow_iframes_global() {
			global $allowedtags;
			$allowedtags = $this->allow_iframes( $allowedtags );
			global $allowedposttags;
			$allowedposttags = $this->allow_iframes( $allowedposttags );
		}

		function load_alerts( $data ) {

			$date = new DateTime( 'now', new DateTimeZone( 'America/New_York' ) );
			$date = $date->format( 'Y-m-d H:i:s' );

			$args           = array(
				'post_type'      => 'alert',
				'order'          => 'DESC',
				'orderby'        => 'meta_value',
				'meta_key'       => 'start_date_and_time',
				'posts_per_page' => 1,
				'meta_query'     => array(
					array(
						'key'     => 'start_date_and_time',
						'value'   => $date,
						'compare' => '<',
					),
					array(
						'key'     => 'end_date_and_time',
						'value'   => $date,
						'compare' => '>',
					),
					'relation' => 'AND',
				),
			);
			$data['alerts'] = ExtendedTimber::get_posts( $args, 'ExtendedTimberPost' );
			//pp($data['alerts']);
			return $data;
		}

		function load_custom_fields( $data ) {

			$gmemcache = new Memcached();
			$gmemcache->addServer( 'localhost', 11211 );

			if ( $gmemcache->get( 'grace-options' ) && 1 != 1 ) {
				$data['options'] = $gmemcache->get( 'grace-options' );
				// echo '<!-- options cached -->';
			} else {
				$fields  = get_fields( 'options' );
				$options = (object) array();

				foreach ( $fields as $key => $value ) {
					$options->$key = $value;
				}

				$options->privacy_policy_link = isset( $options->privacy_policy_link[0]->ID ) ? new ExtendedTimberPost( $options->privacy_policy_link[0]->ID ) : '';
				$data['options']              = $options;
				$gmemcache->set( 'grace-options', $data['options'], time() + 86400 ); // Cache for 1 day
				// echo '<!-- options fresh -->';
			}

			return $data;

		}


		function clear_options_cache( $post_id ) {

			if ( $post_id == 'options' ) {
				$gmemcache = new Memcached();
				$gmemcache->addServer( 'localhost', 11211 );
				$gmemcache->delete( 'grace-options' );
			}
		}

		function load_publications( $data ) {

			$gmemcache = new Memcached();
			$gmemcache->addServer( 'localhost', 11211 );

			if ( $gmemcache->get( 'grace-publications' ) && 1 != 1 ) {
				$data['publications'] = $gmemcache->get( 'grace-publications' );
				// echo '<!-- options cached -->';
			} else {

				$args                 = array(
					'post_type'      => array( 'grace_notes', 'bulletin_insert', 'other_publication' ),
					'posts_per_page' => 3,
					'order'          => 'DESC',
				);
				$data['publications'] = Timber::get_posts( $args, 'ExtendedTimberPost' );
				$gmemcache->set( 'grace-publications', $data['publications'], time() + 86400 ); // Cache for 1 day
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
	if ( function_exists( 'xdebug_get_code_coverage' ) ) {
		ini_set( 'xdebug.var_display_max_depth', 5 );
		ini_set( 'xdebug.var_display_max_children', 256 );
		ini_set( 'xdebug.var_display_max_data', 1024 );
	}
}

//Var dump all arguments and format them
function p() {
	setDebug();
	$args = func_get_args();
	$args = $args;
	foreach ( $args as $value ) {
		echo '<pre>';
		var_dump( $value );
		echo '</pre>';
	}
}
//Same as p() but with a die()
function pp() {
	setDebug();
	$args = func_get_args();
	$args = $args;
	foreach ( $args as $value ) {
		echo '<pre>';
		var_dump( $value );
		echo '</pre>';
	}
	die();
}

function displayMissingDependencyNotice( $plugin_name ) {

	if ( is_admin() ) {
		add_action(
			'admin_notices',
			function() use ( $plugin_name ) {
				echo '<div class="error"><p>' . $plugin_name . ' not activated. Make sure you activate the plugin in <a href="' . esc_url( admin_url( 'plugins.php' ) ) . '">' . esc_url( admin_url( 'plugins.php' ) ) . '</a></p></div>';
			}
		);
		return;
	}

	echo $plugin_name . ' not activated.  Please contact site administrator.';
	die();

}

function checkPluginDependency( $class_or_function_name, $plugin_name = '', $type = 'function' ) {

	if ( empty( $plugin_name ) ) {
		$plugin_name = $class_or_function_name;
	}

	if ( $type == 'function' && ! function_exists( $class_or_function_name ) ) {
		displayMissingDependencyNotice( $plugin_name );
		return false;
	}

	if ( ! class_exists( $class_or_function_name ) ) {
		displayMissingDependencyNotice( $plugin_name );
		return false;
	}

	return true;

}

//needed for get_current_template to work
add_filter( 'template_include', 'var_template_include', 1000 );
function var_template_include( $t ) {
	$GLOBALS['current_theme_template'] = basename( $t );
	return $t;
}

//echos the filename of the template being rendered
function get_current_template( $echo = false ) {
	if ( ! isset( $GLOBALS['current_theme_template'] ) ) {
		return false;
	}
	if ( $echo ) {
		echo $GLOBALS['current_theme_template'];
	} else {
		return $GLOBALS['current_theme_template'];
	}
}

//[foobar]
function sermons_shortcode( $atts ) {

	$args = array(

		'post_type'      => 'sermon',
		'posts_per_page' => 3,
		'order'          => 'DESC',
		'orderby'        => 'meta_value',
		'meta_key'       => 'date_given',

	);

	$sermons = ExtendedTimber::get_posts( $args, 'ExtendedTimberPost' );
	$content = Timber::compile( 'partials/sermons-small.twig', array( 'sermons' => $sermons ) );
	return $content;
}
add_shortcode( 'sermons', 'sermons_shortcode' );


/* This function handles setting up Date archive rewrite rules for
 * ANY custom post type - You pass the CPT, and it will use the
 * re-written slug if applicable.
 */
function eh_generate_date_archives( $cpt ) {
	global $wp_rewrite;
	$rules        = array();
	$post_type    = get_post_type_object( $cpt );
	$slug_archive = $post_type->has_archive;
	if ( $slug_archive === false ) {
		return $rules;
	}
	if ( $slug_archive === true ) {
		$slug_archive = $post_type->rewrite['slug'] ? $post_type->rewrite['slug'] : $post_type->name;
	}
	$dates = array(
		array(
			'rule' => '([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})',
			'vars' => array( 'year', 'monthnum', 'day' ),
		),
		array(
			'rule' => '([0-9]{4})/([0-9]{1,2})',
			'vars' => array( 'year', 'monthnum' ),
		),
		array(
			'rule' => '([0-9]{4})',
			'vars' => array( 'year' ),
		),
	);
	foreach ( $dates as $data ) {
		$query = 'index.php?post_type=' . $cpt;
		$rule  = $slug_archive . '/' . $data['rule'];

		$i = 1;
		foreach ( $data['vars'] as $var ) {
			$query .= '&' . $var . '=' . $wp_rewrite->preg_index( $i );
			$i++;
		}
		$rules[ $rule . '/?$' ]                               = $query;
		$rules[ $rule . '/feed/(feed|rdf|rss|rss2|atom)/?$' ] = $query . '&feed=' . $wp_rewrite->preg_index( $i );
		$rules[ $rule . '/(feed|rdf|rss|rss2|atom)/?$' ]      = $query . '&feed=' . $wp_rewrite->preg_index( $i );
		$rules[ $rule . '/page/([0-9]{1,})/?$' ]              = $query . '&paged=' . $wp_rewrite->preg_index( $i );
	}
	return $rules;
}
add_action( 'plugins_loaded', 'eh_generate_date_archives' );


function fix_email_href( $content ) {

	return preg_replace( '/href="([\w-]+@([\w-]+\.)+[\w-]+)"/', 'href="mailto:$1"', $content );

}
add_filter( 'the_content', 'fix_email_href' );

function post_process_event( $post_id ) {

	if ( wp_is_post_revision( $post_id ) ) {
		return;
	}

	$type = get_post_type( $post_id );
	if ( $type != 'event' ) {
		return;
	}

	$post = get_post( $post_id );

	$fields = array(
		'event_title',
		'event_description',
		'event_start_time',
		'event_end_time',
		'event_location',
	);

	foreach ( $fields as $field ) {

		$google   = $field . '_google';
		$override = $field . '_override';
		$use      = $field . '_use';

		$google   = get_field( $google, $post_id, false );
		$override = get_field( $override, $post_id, false );
		$use      = '';

		if ( empty( $override ) ) {
			$use = $google;
		} else {
			$use = $override;
		}
		update_field( $field . '_use', $use, $post_id );

		if ( $field == 'event_start_time' ) {
			$post->post_date = $use;
		}

		if ( $field == 'event_title' ) {
			$post->post_title = $use;
		}

		if ( $field == 'event_description' ) {
			$post->post_content = $use;
		}
	}

	// unhook this function so it doesn't loop infinitely
	remove_action( 'save_post', 'post_process_event' );

	// update the post, which calls save_post again
	wp_update_post( $post );

	$status = get_post_status( $post_id );

	if ( $status == 'future' ) {
		wp_publish_post( $post_id );
	}

	// re-hook this function
	add_action( 'save_post', 'post_process_event' );

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
add_action( 'admin_footer', 'admin_event_js' );


function grace_login_logo() {
	?>
	<style type="text/css">
		#login h1 a, .login h1 a {
			background-image: url(<?php echo get_field( 'logo', 'option' ); ?>);
			width: 200px;
			height: 200px;
			background-size: cover;
		}
	</style>
	<?php
}
add_action( 'login_enqueue_scripts', 'grace_login_logo' );


function grace_login_logo_url() {
	return home_url();
}
add_filter( 'login_headerurl', 'grace_login_logo_url' );

function grace_login_logo_url_title() {
	return 'Grace Episcopal Church, Alexandria VA';
}
add_filter( 'login_headertext', 'grace_login_logo_url_title' );

add_filter( 'relevanssi_match', 'relevanssi_post_type_weights' );

function relevanssi_post_type_weights( $match ) {

	$post_type = relevanssi_get_post_type( $match->doc );
	if ( $post_type == 'page' ) {
		$match->weight = $match->weight * 10;
	} else {
		$match->weight = $match->weight / 1.5;
	}

	$post_date = strtotime( get_the_time( 'Y-m-d', $match->doc ) );

	if ( abs( time() - $post_date ) < 60 * 60 * 24 * 30 ) {
		$match->weight = $match->weight * 3;
	}

	return $match;
}

add_filter( 'query_vars', 'relevanssi_qvs' );
function relevanssi_qvs( $qv ) {
	$qv[] = 'post_types';
	return $qv;
}


add_filter( 'relevanssi_search_filters', 'relevanssi_post_type_filter' );
function relevanssi_post_type_filter( $args ) {
	$post_types = get_query_var( 'post_types' );
	if ( empty( $post_types ) ) {
		$args['post_type'] = 'page';
	} else {
		if ( ! is_array( $post_types ) ) {
			$args['post_type'] = explode( ',', $post_types );
		} else {
			$args['post_type'] = $post_types;
		}
	}

	return $args;
}

add_filter( 'relevanssi_didyoumean_url', 'relevanssi_didyoumean_url_add_paramaters' );
function relevanssi_didyoumean_url_add_paramaters( $url ) {

	$extra = get_query_var( 'post_types' );
	if ( empty( $extra ) ) {
		return $url;
	};

	$query_vars = $_GET;
	unset( $query_vars['s'] );
	$qs = http_build_query( $query_vars );

	return $url . '&' . $qs;
}

add_filter( 'post_limits', 'postsperpage' );
function postsperpage( $limits ) {
	if ( is_search() ) {
		global $wp_query;
		$wp_query->query_vars['posts_per_page'] = 30;
	}
	return $limits;
}

function parse_pdf( $post_id, $echo = false ) {

	$title     = get_the_title( $post_id );
	$post_type = get_post_type( $post_id );

	if ( ! in_array( $post_type, array( 'bulletin_insert', 'grace_notes', 'other_publication', 'sermon' ) ) ) {
		//if (!in_array($post_type,['bulletin_insert'])) {
		return;
	}
	$post_title  = get_the_title( $post_id );
	$post_string = PHP_EOL . $post_id . ' | ' . $post_type . ' | ' . $post_title . ' | ';

	$file = get_field( 'pdf', $post_id );

	if ( empty( $file ) ) {
		if ( $echo ) {
			echo $post_string . ' No file ';
		}
		return $post_string . ' No file ';

	}

	if ( ! isset( $file['mime_type'] ) || $file['mime_type'] != 'application/pdf' ) {
		if ( $echo ) {
			$file['id'];
			echo $post_string . ' File not a pdf ';
		}
		return $post_string . ' File not a pdf ';
	}

	$path = get_attached_file( $file['id'] );

	try {
		$parser = new \Smalot\PdfParser\Parser();
		$pdf    = $parser->parseFile( $path );

		$text = $pdf->getText();
		$text = \ForceUTF8\Encoding::toUTF8( $text );
		//$text = \ForceUTF8\Encoding::fixUTF8($text);

		switch ( $post_type ) {
			case 'bulletin_insert':
				$field = 'field_58e2fe7dddb4d';
				break;
			case 'grace_notes':
				$field = 'field_58e2febed2d1b';
				break;
			case 'other_publication':
				$field = 'field_58e2fee5386a3';
				break;
			case 'sermon':
				$field = 'field_58e2ff121b3ab';
				break;
			default:
				if ( $echo ) {
					echo $post_string . ' Wrong Post Type ';
				}
				return $post_string . ' Wrong Post Type ';
		}

		echo update_field( $field, $text, $post_id );

	} catch ( Exception $e ) {
		if ( $echo ) {
			echo $post_string . ' Error ' . $e->getMessage();
		}
		return $post_string . ' Error ' . $e->getMessage();
	}

	if ( $echo ) {
		echo $post_string . ' Updated ';
	}

	$post = get_post( $post_id );
	if ( empty( trim( $post->post_content ) ) ) {
		$post->post_content = $text;
	}
	$res = wp_update_post( $post );
	// if ($res==0) {
	//     $post->post_content = iconv('ISO-8859-1','UTF-8', $post->post_content);
	//     $res = wp_update_post($post);
	//     update_field($field, $post->post_content, $post_id);
	// }

	echo $res;

	return $post_string . ' Updated ';

}
add_action( 'acf/save_post', 'parse_pdf', 20 );

function clear_content_area() {

	global $wpdb;

	$sql = 'DELETE FROM grace_postmeta where meta_key = "sermon_content" OR meta_key = "_sermon_content" OR meta_key= "pdf_content" OR meta_key = "_pdf_content"';

	$wpdb->query( $sql );

	$sql = 'UPDATE grace_posts SET post_content = "" where post_type="bulletin_insert" OR post_type="grace_notes" or post_type="other_publication" or post_type="sermon"';

	$wpdb->query( $sql );

}

function relevanssi_search_filters( $query ) {
	if ( isset( $_GET['post_types'] ) ) {
		return $query;
	}
	$query['post_type'] = array( 'page', 'news', 'grace_notes', 'bulletin_insert' );

	return $query;
}

add_filter( 'relevanssi_search_filters', 'relevanssi_search_filters' );
