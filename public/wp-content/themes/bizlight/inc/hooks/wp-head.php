<?php
if( ! function_exists( 'bizlight_wp_head' ) ) :

    /**
     * Bizlight wp_head hook
     *
     * @since  Bizlight 1.0.0
     */
    function bizlight_wp_head(){
        global $bizlight_customizer_all_values;
        global $bizlight_google_fonts;
        $bizlight_font_family_site_identity = $bizlight_google_fonts[$bizlight_customizer_all_values['bizlight-font-family-site-identity']];
        $bizlight_font_family_h1_h6 = $bizlight_google_fonts[$bizlight_customizer_all_values['bizlight-font-family-h1-h6']];
        /*Color options */
        $bizlight_h1_h6_color = $bizlight_customizer_all_values['bizlight-h1-h6-color'];
        $bizlight_link_color = $bizlight_customizer_all_values['bizlight-link-color'];
        $bizlight_link_hover_color = $bizlight_customizer_all_values['bizlight-link-hover-color'];
        $bizlight_site_identity_color = $bizlight_customizer_all_values['bizlight-site-identity-color'];
        ?>
        <style type="text/css">
            /*site identity font family*/
            .site-title,
            .site-title a,
            .site-description,
            .site-description a{
                font-family: '<?php echo esc_attr( $bizlight_font_family_site_identity ); ?>'!important;
            }
            /*Title font family*/
            h1, h1 a,
            h1.site-title,
            h1.site-title a,
            h2, h2 a,
            h3, h3 a,
            h4, h4 a,
            h5, h5 a,
            h6, h6 a {
                font-family: '<?php echo esc_attr( $bizlight_font_family_h1_h6 ); ?>'!important;
            }
            <?php
            /*Main h1-h6 color*/
            if( !empty($bizlight_h1_h6_color) ){
            ?>
            h1, h1 a,
            h2, h2 a,
            h3, h3 a,
            h4, h4 a,
            h5, h5 a,
            h6, h6 a,
            .box-container .box-inner a:hover{
                color: <?php echo esc_attr( $bizlight_h1_h6_color );?> !important; /*#212121*/
            }
            <?php
            }
          /*Link color*/
            if( !empty($bizlight_link_color) ){
            ?>
            a,
            a > p,
            .posted-on a,
            .cat-links a,
            .tags-links a,
            .author a,
            .comments-link a,
            .edit-link a,
            .nav-links .nav-previous a,
            .nav-links .nav-next a,
            .page-links a {
                color: <?php echo esc_attr( $bizlight_link_color ); ?> !important; /*#212121*/
            }
            <?php
            }
            /*Link Hover color*/
              if( !empty($bizlight_link_hover_color) ){
              ?>
              a:hover,
              a > p:hover,
              .posted-on a:hover,
              .cat-links a:hover,
              .tags-links a:hover,
              .author a:hover,
              .comments-link a:hover,
              .edit-link a:hover,
              .nav-links .nav-previous a:hover,
              .nav-links .nav-next a:hover,
              .page-links a:hover{
                  color: <?php echo esc_attr( $bizlight_link_hover_color ); ?> !important; /*#212121*/
              }
              <?php
              }
            /*header menu text*/
            if( !empty( $bizlight_site_identity_color ) ){
            ?>
            .site-title,
            .site-title a,
            .site-description,
            .site-description a{
                color: <?php echo esc_attr( $bizlight_site_identity_color );?>!important;
            }
            <?php
            }
            $bizlight_custom_css = $bizlight_customizer_all_values['bizlight-custom-css'];
            $bizlight_custom_css_output = '';
            if ( ! empty( $bizlight_custom_css ) ) {
                $bizlight_custom_css_output .= esc_textarea( $bizlight_custom_css ) ;
            }
            echo $bizlight_custom_css_output;/*escaping done above*/
            ?>
        </style>
    <?php
    }
endif;
add_action( 'wp_head', 'bizlight_wp_head' );
