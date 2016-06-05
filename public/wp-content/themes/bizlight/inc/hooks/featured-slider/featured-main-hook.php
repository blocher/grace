<?php
if ( ! function_exists( 'bizlight_featured_slider_array' ) ) :
    /**
     * Featured Slider array creation
     *
     * @since Bizlight 1.0.0
     *
     * @param string $from_slider
     * @return array
     */
    function bizlight_featured_slider_array( ){

        $bizlight_fs_contents_array[0]['bizlight-fs-title'] = __('Welcome to bizlight','bizlight');
        $bizlight_fs_contents_array[0]['bizlight-fs-content'] = __('Unlike other companies, we do not charge hundreds of dollars per theme.','bizlight');
        $bizlight_fs_contents_array[0]['bizlight-fs-link'] = '#';
        $bizlight_fs_contents_array[0]['bizlight-fs-image'] = get_template_directory_uri()."/assets/img/slider.jpg";

        $bizlight_fs_args = array();
        $repeated = array('bizlight-fs-pages-ids');
        $bizlight_fs_posts = bizlight_get_repeated_all_value( 3 ,$repeated);
        $bizlight_fs_posts_ids = array();
        if( null != $bizlight_fs_posts ) {
            foreach( $bizlight_fs_posts as $bizlight_fs_post ) {
                if( 0 != $bizlight_fs_post['bizlight-fs-pages-ids'] ){
                    $bizlight_fs_posts_ids[] = $bizlight_fs_post['bizlight-fs-pages-ids'];
                }
            }
            if( !empty( $bizlight_fs_posts_ids )){
                $bizlight_fs_args =    array(
                    'post_type' => 'page',
                    'post__in' => $bizlight_fs_posts_ids,
                    'posts_per_page' => 3,
                    'orderby' => 'post__in'
                );
            }

        }
        if( !empty( $bizlight_fs_args )){
            // the query
            $bizlight_fs_post_query = new WP_Query( $bizlight_fs_args );
            if ( $bizlight_fs_post_query->have_posts() ) :
                $i = 0;
                while ( $bizlight_fs_post_query->have_posts() ) : $bizlight_fs_post_query->the_post();
                    $url ='';
                    if(has_post_thumbnail()){
                        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'home-main-slider' );
                        $url = $thumb['0'];
                    }
                    $bizlight_fs_contents_array[$i]['bizlight-fs-title'] = get_the_title();
                    $bizlight_fs_contents_array[$i]['bizlight-fs-content'] = bizlight_words_count( 20 ,get_the_content());;
                    $bizlight_fs_contents_array[$i]['bizlight-fs-link'] = get_permalink();
                    $bizlight_fs_contents_array[$i]['bizlight-fs-image'] = $url;
                    $i++;
                endwhile;
                wp_reset_postdata();
            endif;
        }
        return $bizlight_fs_contents_array;
    }
endif;

if ( ! function_exists( 'bizlight_featured_slider' ) ) :
    /**
     * Featured Slider
     *
     * @since Bizlight 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function bizlight_featured_slider() {
        global $bizlight_customizer_all_values;
        if( 1 != $bizlight_customizer_all_values['bizlight-fs-enable'] ){
            return null;
        }
        $bizlight_slider_arrays = bizlight_featured_slider_array();
        if( is_array( $bizlight_slider_arrays )){
        $bizlight_fs_enable_control = $bizlight_customizer_all_values['bizlight-fs-enable-control'];
        $bizlight_fs_enable_autoplay = $bizlight_customizer_all_values['bizlight-fs-enable-autoplay'];
        ?>
            <div class="evision-wrapper evision-wrap-banner evision-banner-right-nav">
                <ul class="evision-main-slider"
                    id="evision-slider"
                    data-control="<?php echo esc_attr( $bizlight_fs_enable_control ); ?>"
                    data-auto="<?php echo esc_attr( $bizlight_fs_enable_autoplay ); ?>"
                    >
            <?php
            $i = 1;
            foreach( $bizlight_slider_arrays as $bizlight_slider_array ){
                if( 3 < $i){
                    break;
                }
                if(empty($bizlight_slider_array['bizlight-fs-image'])){
                    $bizlight_fs_image = get_template_directory_uri().'/assets/img/no-image-126_530.jpg';
                }
                else{
                    $bizlight_fs_image =$bizlight_slider_array['bizlight-fs-image'];
                }
                ?>
                <li style="background-image: url('<?php echo esc_url( $bizlight_fs_image ); ?>');">
                    <div class="container evision-slider-content overhidden">
                        <div class="evision-slider-caption evision-animate fadeInUp">
                            <h1 class="main-title"><?php echo esc_html( $bizlight_slider_array['bizlight-fs-title'] ); ?></h1>
                            <div class="banner-divider-container">
                                <span class="banner-divider"></span>
                            </div>
                            <div class="banner-con">
                                <p>
                                    <?php echo wp_kses_post( $bizlight_slider_array['bizlight-fs-content'] ); ?>
                                </p>
                            </div>
                            <a class="banner-btn button" href="<?php echo esc_url( $bizlight_slider_array['bizlight-fs-link'] ); ?>">
                                <?php _e('Click to start', 'bizlight'); ?>
                            </a>
                        </div>
                    </div>
                </li>
                <?php
                $i++;
            }
        }
        ?>
            </ul>
        </div><!-- slider section -->
        <?php
    }
endif;
add_action( 'homepage', 'bizlight_featured_slider', 10 );