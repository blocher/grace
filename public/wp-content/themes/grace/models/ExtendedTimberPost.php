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
						$excerpt .= ' <a href="' . $this->permalink()  . '">' . $readmore . '</a>';
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

	    function featured_image($size='homepage_module') {
	    	
	    	$featured_image = $this->thumbnail();
	    	if (!empty($featured_image)) {
	    		return $featured_image->src($size);
	    	}

	    	global $possible_images;

	    	if (empty($possible_images)) {

	    		$possible_images = [];
		    	if( have_rows('default_pictures', 'option') ):

					while( have_rows('default_pictures', 'option') ): the_row();
					 
					    $possible_images[] = get_sub_field('image'); 
					        
					endwhile;
					 
				endif;
				if (empty($possible_images)) {
		    		return '';
		    	}

	    	}

	    	$key = array_rand($possible_images);
	    	$tid = $possible_images[$key];
	    	unset($possible_images[$key]);

	    	$image = new TimberImage($tid);

	    	return $image->src($size);
	    	
	    }

	    function subcommittee() {
	    	$subcommittees = $this->terms('subcommittee');
	    	if (count($subcommittees)<1) {
				return '';
			}
	    	$subcommittee = array_shift($subcommittees);
	    	$name = $subcommittee->name;
	    	$name = str_replace('-',' ',$subcommittee->name);
	    	if (!strpos($subcommittee->name,'Committee on')) {
	    		$name = 'Committee on ' . $name;
	    	}
	    	$name = ucwords($name);
	    	$name = str_replace('On','on',$name);
	    	$name = str_replace('And','and',$name);
	    	return $name;
	    }






	}