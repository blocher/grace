<?php
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

	    public function excerpt($maxchars = 200, $force = false, $readmore = '...', $strip = true) {

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
	    		'post_parent' => $this->parent->ID,
	    		'nopagaing' => true,
	    		'post_type' => $post_type,
	    		'order_by' => 'menu_order',
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
	    	];
	    	return ExtendedTimber::get_posts($args,$object_type);

	    }

	    function children($post_type='any',$object_type='ExtendedTimberPost') {

	    	$args = [
	    		'post_parent' => $this->ID,
	    		'nopagaing' => true,
	    		'post_type' => $post_type,
	    		'order_by' => 'menu_order',
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
	    	];
	    	return ExtendedTimber::get_posts($args,$object_type);

	    }






	}