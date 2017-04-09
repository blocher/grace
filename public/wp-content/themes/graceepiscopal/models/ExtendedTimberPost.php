<?php

	use \Carbon\Carbon;

	class ExtendedTimberPost extends TimberPost {

		function __construct($pid = null) {

	        parent::__construct($pid);

	       // $this->post_content = $this->stripMSWord($this->post_content);
	      //  $this->post_excerpt = $this->stripMSWord($this->post_excerpt);




	    }

		private function stripMSWord($content) {

			$config = HTMLPurifier_Config::createDefault();
			$config->set('CSS.AllowedProperties', array('background-color','text-align'));
			$config->set('HTML.SafeIframe', true);
			$config->set('URI.SafeIframeRegexp', '%.%'); //allow YouTube and Vimeo
			$purifier = new HTMLPurifier($config);
			$content = $purifier->purify($content);

			return $content;
		}

	    public function excerpt($maxchars = 250, $force = false, $readmore = '...read more', $strip = true) {

	    	if (is_search()) {

	    		$strip = false;
	    		return $this->post_excerpt;
	    	}

	   		if ($force == true && !empty($this->post_excerpt)) {
	   			$excerpt =  $this->post_excerpt;
	   			if ($strip) {
					$excerpt = strip_tags($excerpt);
				}
	   		} else {
	   			$excerpt = !empty($this->post_excerpt) ? $this->post_excerpt : $this->post_content;
	   			if ($strip) {
					$excerpt = strip_tags($excerpt);
				}
	   			if (strlen($excerpt)>$maxchars) {
			   		$excerpt = substr($excerpt, 0, $maxchars);
					$pos = strrpos($excerpt, " ");
					if ($pos>0) {
						$excerpt = substr($excerpt, 0, $pos);
					}

					if (!empty($readmore) && !empty($excerpt)) {
						$excerpt .= ' <a href="' . $this->link()  . '">' . $readmore . '</a>';
					}
				}

			}

			return trim($excerpt);
	    }

	   	public function title_excerpt($maxchars = 200, $readmore = '...') {

	   		$excerpt = $this->post_title;
   			if (strlen($excerpt)>$maxchars) {
		   		$excerpt = substr($excerpt, 0, $maxchars);
				$pos = strrpos($excerpt, " ");
				if ($pos>0) {
					$excerpt = substr($excerpt, 0, $pos);
				}

				if (!empty($readmore) && !empty($excerpt)) {
					$excerpt .= ' ' . $readmore;
				}
			}

			return trim($excerpt);
	    }

        /**
         * Overriding category to exclude "Uncategorized", can use get_category for original functionality
	     * @return mixed
	     */
	    function category() {
	        $cats = $this->get_categories();
	        foreach ($cats as $cat) {
	        	if (strtoupper($cat->slug) != 'UNCATEGORIZED') {
	        		return $cat;
	        	}
	        }
	        return null;
	    }

	    /**
         * Overriding categories to exclude "Uncategorized", can use get_categories for original functionality
	     * @return mixed
	     */
	    function categories() {
	        $cats = $this->get_categories();
	        foreach ($cats as $key=>$value) {
	        	if (strtoupper($value->slug) == 'UNCATEGORIZED') {
	        		unset($cats[$key]);
	        	}
	        }
	        return $cats;
	    }

	    function post_type_object() {
	    	return get_post_type_object( $this->post_type );
	    }

	    function post_type_name() {
	    	return $this->post_type_object()->labels->singular_name;
	    }


	    function siblings($post_type='any',$object_type='ExtendedTimberPost') {

	    	if (!is_object($this->parent)) {
	    		return [];
	    	}

	    	$args = [
	    		'post_parent' => !is_object($this->parent) ? 0 : $this->parent->ID,
	    		'nopagaing' => true,
	    		'post_type' => $post_type,
	    		'order_by' => 'menu_order',
	    		'order' => 'ASC',
	    		'post__not_in' => [$this->id],
	    	];
	    	return ExtendedTimber::get_posts($args,$object_type);

	    }

	    function parents($post_type='any',$object_type='ExtendedTimberPost') {

	    	if ($this->post_parent == 0) {
	    		return [];
	    	}

	    	$args = [
	    		'p' => $this->post_parent,
	    		'nopagaing' => true,
	    		'post_type' => $post_type,
	    		'order_by' => 'menu_order',
	    		'order' => 'ASC',
	    	];
	    	return ExtendedTimber::get_posts($args,$object_type);

	    }

	    function children($post_type='any',$object_type='ExtendedTimberPost') {

	    	$args = [
	    		'post_parent' => $this->ID,
	    		'nopagaing' => true,
	    		'post_type' => $post_type,
	    		'order_by' => 'menu_order',
	    		'order' => 'ASC',
	    	];
	    	return ExtendedTimber::get_posts($args,$object_type);

	    }

	    function children_and_siblings($post_type='any',$object_type='ExtendedTimberPost') {

	    	if (!is_object($this->parent)) {
	    		return [];
	    	}

	    	$args = [
	    		'post_parent__in' => [$this->parent->ID, $this->ID],
	    		'nopagaing' => true,
	    		'post_type' => $post_type,
	    		'order_by' => 'menu_order',
	    		'order' => 'ASC',
	    	];
	    	return ExtendedTimber::get_posts($args,$object_type);

	    }

	    function main_image($size='page_header') {
	    	if (has_post_thumbnail( $this->ID )) {
					  return $this->get_thumbnail()->src($size);
				}

			  $default_photos = get_field('default_page_headers','option');
			  $photo_number = rand(0, count($default_photos)-1);
			  return $default_photos[$photo_number]['photo']['sizes'][$size];

	    }

	    function alert_link() {

	    	if ($this->post_type!='alert') {
	    		return '';;
	    	}

	    	if ($this->custom['link_type']=='none') {
	    		return '';
	    	}

	    	if ($this->custom['link_type']=='internal') {
	    		$alert_link = new ExtendedTimberPost($this->custom['internal_link']);
	    		$alert_link = $alert_link->link();
	    		return ($alert_link);
	    	}

	    	if ($this->custom['link_type']=='external') {
	    		return $this->custom['external_link'];
	    	}


	    }

	    function start_date($format='l F j, Y') {
	    	if ($this->post_type!='event') {
	    		return;
	    	}

	    	$time = new Carbon($this->event_start_time_use, new DateTimeZone('America/New_York'));
	    	return $time->format($format);
	    }

	    function end_date($format='l F j, Y') {
	    	if ($this->post_type!='event') {
	    		return;
	    	}

	    	$time = new Carbon($this->event_end_time_use, new DateTimeZone('America/New_York'));
	    	return $time->format($format);
	    }

	    function start_time($format='g:i A') {
	    	if ($this->post_type!='event') {
	    		return;
	    	}

	    	$time = new Carbon($this->event_start_time_use, new DateTimeZone('America/New_York'));
	    	return $time->format($format);
	    }

	    function end_time($format='g:i A') {
	    	if ($this->post_type!='event') {
	    		return;
	    	}

	    	$time = new Carbon($this->event_end_time_use, new DateTimeZone('America/New_York'));
	    	return $time->format($format);
	    }

	    function same_start_and_end() {

	    	if ($this->post_type!='event') {
	    		return;
	    	}

	    	$start = new Carbon($this->event_start_time_use, new DateTimeZone('America/New_York'));
	    	$end = new Carbon($this->event_end_time_use, new DateTimeZone('America/New_York'));

	    	return $start->eq($end);

	    }

	    function all_day() {
	    	if ($this->post_type!='event') {
	    		return;
	    	}

	    	$start = new Carbon($this->event_start_time_use, new DateTimeZone('America/New_York'));
	    	$end = new Carbon($this->event_end_time_use, new DateTimeZone('America/New_York'));

	    	return $start->format('G:i') == '0:00' && $end->format('G:i') == '23:59' ? true : false;
	    }

	    function multi_day() {
	    	if ($this->post_type!='event') {
	    		return;
	    	}

	    	$start = new Carbon($this->event_start_time_use, new DateTimeZone('America/New_York'));
	    	$end = new Carbon($this->event_end_time_use, new DateTimeZone('America/New_York'));

	    	return $start->format('F') != $end->format('F') || $start->format('j') != $end->format('j') ? true : false;
	    }






	}