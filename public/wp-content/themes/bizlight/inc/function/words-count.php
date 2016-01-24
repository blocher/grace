<?php
/**
* Returns word count of the sentences.
*
* @since @since Bizlight 1.0.0
*/
if ( ! function_exists( 'bizlight_words_count' ) ) :
	function bizlight_words_count( $length = 25, $bizlight_content = null ) {
		$length = absint( $length );
		$source_content = preg_replace( '`\[[^\]]*\]`', '', $bizlight_content );
		$trimmed_content = wp_trim_words( $source_content, $length, '...' );
		return $trimmed_content;
	}
endif;