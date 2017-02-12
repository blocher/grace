<?php
	class ExtendedTimberTerm extends TimberTerm {

		public $PostClass = 'ExtendedTimberPost';
    	public $TermClass = 'ExtendedTimberTerm';


		public function __construct($tid = null , $tax = '') {
			parent::__construct($tid, $tax);

			if (!function_exists('get_fields')) {
	    		return '';
	    	}
	    	$fields = get_fields($this->taxonomy . '_' . $this->ID);
	    	foreach ($fields as $key=>$value) {
	    		if (!empty($key)) {
	    			$this->$key = $value;
	    		}
	    	}

		}

		public function __get($name)
	    {
	    	if (!function_exists('get_field')) {
	    		return '';
	    	}
	        return get_field($name, $this->taxonomy . '_' . $this->ID);
	    }

        /**
	     * @param int $tid
	     * @return int
	     */
	    protected function get_tid($tid) {
	        global $wpdb;
	        if (is_numeric($tid)) {
	            return $tid;
	        }
	        if (gettype($tid) == 'object') {
	            $tid = $tid->term_id;
	        }
	        if (is_numeric($tid)) {
	            $query = $wpdb->prepare("SELECT * FROM $wpdb->terms WHERE term_id = %d", $tid);
	        } else {
	        	if (!isset($this->taxonomy)) {
	        		$query = $wpdb->prepare("SELECT * FROM $wpdb->terms WHERE slug = %s and taxonomy", $tid);
	        	} else {
	            	$query = $wpdb->prepare("SELECT * FROM $wpdb->terms, $wpdb->term_taxonomy WHERE $wpdb->terms.slug = %s and $wpdb->term_taxonomy.taxonomy= %s AND $wpdb->term_taxonomy.term_id = $wpdb->terms.term_id;", $tid, $this->taxonomy);
	            }
	        }
	        $result = $wpdb->get_row($query);
	        if (isset($result->term_id)) {
	            $result->ID = $result->term_id;
	            $result->id = $result->term_id;
	            return $result->ID;
	        }
	        return 0;
	    }

	    public function excerpt($maxchars = 200, $force = false, $readmore = '...', $strip = true) {

	    	if (is_search()) {
	    		$strip = false;
	    		return $this->description();
	    	}

	   		if ($force == true && !empty($this->description())) {
	   			$excerpt =  $this->description();
	   			if ($strip) {
					$excerpt = strip_tags($excerpt);
				}
	   		} else {
	   			$excerpt = $this->description();
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

		
	}