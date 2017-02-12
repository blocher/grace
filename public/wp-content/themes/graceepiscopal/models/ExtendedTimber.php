<?php
	class ExtendedTimber extends Timber {

		var $_terms;

		//this just removes uncategorized (and any other exluded terms passed in as fourth arg)
		public static function get_terms( $args = null, $maybe_args = array(), $TermClass = 'ExtendedTimberTerm', $exclude=array() ) {

			$terms = parent::get_terms( $args, $maybe_args, $TermClass);
			if (is_string($exclude)) {
				$exclude = array($exclude);
			}
			$exclude[] = 'uncategorized';
			$exclude = array_map('strtolower', $exclude);
			foreach ($terms as $key=>$value) {
				if (in_array(strtolower($value->slug), $exclude)) {
				    unset($terms[$key]);
				}
			}
			return $terms;
		}

		public static function get_ajax_pagination($current_url,$terms='') {
			$data = parent::get_pagination();
			foreach ($data['pages'] as &$page) {
				if (!isset($page['link'])) {
					continue;
				}
				$link = $page['link'];
				$link = explode('?',$link);
				$link = array_shift($link);
				$link = trim($link,'/');
				$link = explode('/',$link);
				$possible_page = array_pop($link);
				$page_number = is_numeric($possible_page) ? $possible_page : 1;
				$link = $current_url . '?p=' . $page_number;
				$page['link'] = $link;
				if (!empty($terms)) {
					$page['link'] .= '&terms=' . $terms;
				}
				if ($page['current'] == true) {
					$page['class']  .= ' active';
				}
				$page['class']  .= ' newsroom-page-link';
			}
			return $data;
		}


	}