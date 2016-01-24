<?php
if ( ! function_exists( 'bizlight_footer' ) ) :
    /**
     * Footer content
     *
     * @since Bizlight 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_footer() {
        global $bizlight_customizer_all_values;
        ?>
        <!-- *****************************************
             Footer section starts
    ****************************************** -->
        <footer id="colophon" class="evision-wrapper site-footer" role="contentinfo">
            <div class="container footer-social-container">
                <?php
                if(  1 == $bizlight_customizer_all_values['bizlight-enable-social-icons']) {
                    ?>
                    <div class="social-group-nav social-icon-only evision-social-section">
                        <?php wp_nav_menu( array( 'theme_location' => 'social', 'menu_id' => 'primary-menu' ) ); ?>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="copyright">
                <?php
                if(isset($bizlight_customizer_all_values['bizlight-copyright-text'])){
                    echo wp_kses_post( $bizlight_customizer_all_values['bizlight-copyright-text'] );
                }
                ?>
            </div>
            <div class="site-info">
                <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bizlight' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'bizlight' ), 'WordPress' ); ?></a>
                <span class="sep"> | </span>
                <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'bizlight' ), 'Bizlight', '<a href="http://evisionthemes.com/" rel="designer">eVisionThemes</a>' ); ?>
            </div><!-- .site-info -->

        </footer><!-- #colophon -->
        <!-- *****************************************
                 Footer section ends
        ****************************************** -->
    <?php
    }
endif;
add_action( 'bizlight_action_footer', 'bizlight_footer', 10 );

if ( ! function_exists( 'bizlight_page_end' ) ) :
    /**
     * Page end
     *
     * @since Bizlight 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_page_end() {
        ?>
        <a class="evision-back-to-top" href="#page"><i class="fa fa-angle-up"></i></a>
        </div><!-- #page -->
    <?php
    }
endif;
add_action( 'bizlight_action_after', 'bizlight_page_end', 10 );