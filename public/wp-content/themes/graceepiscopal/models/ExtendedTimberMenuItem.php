<?php

	class ExtendedTimberMenuItem extends TimberMenuItem {

		public function active() {

			if ((is_home() || is_front_page()) && strpos($this->url,'%home_url%')) {
				return 'active';
			}

			$url = trim($_SERVER['REQUEST_URI'],'/');
     		$path = explode("/", $url); // splitting the path
     		$current = end($path); // get the value of the last element

			if ($current == $this->object) {
				return 'active';
			}

			if (is_archive()) {
				$url = str_replace(home_url(),'',$this->url);
				$url = str_replace('/','',$url);
				if ( $url == $current) {
					return 'active';
				}
			}
			
			if (is_page())
			{
				if (strtolower($current) == strtolower($this->__title)) return 'active';
			}

			return '';
		}

		public function get_link() {
			$link =  parent::get_link();
			if (strpos($link,'home_url')) {
				$link = home_url();
			}
			return $link;
		}

		public function target() {

			$home_url = trim(home_url()," \t\n\r\0\x0B" .'\\' . '/' );
			$site_url = trim(site_url()," \t\n\r\0\x0B" .'\\' . '/' );

			$home_url = str_replace('http://','',$home_url);
			$site_url = str_replace('http://','',$site_url);

			$home_url = str_replace('https://','',$home_url);
			$site_url = str_replace('https://','',$site_url);

			$link = $this->get_link();

			if (strpos($link,$home_url)!==FALSE || strpos($link,$site_url)!==FALSE) {
				return '_self';
			} else {
				return '_blank';
			}
		}

	}
