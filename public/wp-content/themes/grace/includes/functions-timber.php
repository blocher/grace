<?php


class TimberFunctions
{

    var $m;

    function __construct() {

        if (class_exists('Memcached')) {
            $this->m = new Memcached();
        } else if (class_exists('Memcache')) {
            $this->m = new Memcache();
        } else {
            die ('you must install the memcached extension');
        }


        $this->m->addServer('localhost', 11211);

        /***TWIG****/
        add_filter('get_twig', array($this,'add_timestamp_to_twig'));
        add_filter('get_twig', array($this,'add_clean_to_twig'));

        /***TIMBER CONTEXT****/
        add_filter('timber_context', array($this, 'add_menus'));
        add_filter('timber_context', array($this,'load_custom_fields'));

        add_action( 'save_post', array($this,'clear_options_cache') );
        add_action( 'acf/save_post', array($this,'clear_options_cache') );
    }

    function add_menus($data)
    {
        $data['main_menu'] = new TimberMenu('main-menu');
        return $data;
    }

	/**THIS NONSENSE is necessary because Timber does funky things with timestamp when using Twig date filter **/
	function add_timestamp_to_twig($twig) {
	    $twig->addFilter('timestamp', new Twig_Filter_Function('twig_timestamp_filter'));
	    return $twig;
	}


	function twig_timestamp_filter ($timestamp,$format) {
		if (!isValidTimestamp($timestamp)) {
			return $timestamp;
		}
        $date = new DateTime();
        $date->setTimezone(new DateTimeZone('UTC'));
        $date->setTimestamp($timestamp);
        return $date->format($format);
	}

    function add_clean_to_twig($twig) {
        $twig->addFilter('clean', new Twig_Filter_Function('twig_clean_filter'));
        return $twig;
    }


    function twig_clean_filter ($content) {
        return clean($content);
    }

    function clean($content) {

        $config = HTMLPurifier_Config::createDefault();
        $config->set('CSS.AllowedProperties', array());
        $config->set('HTML.SafeIframe', true);
        $config->set('URI.SafeIframeRegexp', '%.%'); //allow YouTube and Vimeo
        $purifier = new HTMLPurifier($config);
        $content = $purifier->purify($content);

        return $content;
    }

   function set_options() {

        $fields = get_fields('options');
        if (empty($fields)) {
            return;
        }
        $options = (object) array();

        foreach ($fields as $key=>$value) {
            $options->$key = $value;
        }

        @$this->m->set('grace-options', $options, time() + (86400 * 30)); // Cache for 30 days
        return $options;
   }

   function load_custom_fields($data) {

        if ($this->m->get('grace-options')) {
            $data['options'] = $this->m->get('grace-options');
        } else {
            $data['options'] = $this->set_options();
        }
        return $data;

    }

    function clear_options_cache($post_id) {
        $this->m->delete('grace-options');
        $this->set_options();
    }




}

new TimberFunctions();