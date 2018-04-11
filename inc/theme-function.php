<?php

/**
* Select Images according to Category saved.
* @since Bloge 1.0.0
*
* @param null
* @return null
*
*/
if ( !function_exists('bloge_slider_images_selection') ) :
  function bloge_slider_images_selection() 
  { 
        global $bloge_theme_options;


        $category_id = $bloge_theme_options['bloge-feature-cat'];
                     
        $args = array( 'cat' =>$category_id , 'posts_per_page' => -1 );

        $query = new WP_Query($args);

        if($query->have_posts()):

          while($query->have_posts()):

           $query->the_post();
           if(has_post_thumbnail())
              {

                   $image_id = get_post_thumbnail_id();
                   $image_url = wp_get_attachment_image_src($image_id,'',true);
                   ?>
                  <div class="feature-area">
                      <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($image_url[0]);?>" alt=""></a>
                       <div class="feature-description text-center">
                          <figcaption>
                              <div class="main-cat">
                                <?php 
                                  $categories = get_the_category();
                                  if ( ! empty( $categories ) ) {
                                      echo esc_html( $categories[0]->name );   
                                  }
                                ?>
                              </div>
                              <h2><?php the_title(); ?></h2>
                            
                             <?php global $bloge_theme_options;
                                   	$bloge_slider_read_more = esc_html( $bloge_theme_options['bloge-slider-read-more'] ) ;
                            ?>
                            <?php if( !empty( $bloge_slider_read_more ) ){ ?>
                                 <a href="<?php the_permalink(); ?>" class="read-more">         
                                <?php 
   	                                  
                                    echo $bloge_slider_read_more;
                                ?>
                         <?php   } ?>

                            </a>
                          </figcaption>
                       </div>
                       <div class="overley"></div>
                  </div>        

<?php 
              }
          endwhile; endif;wp_reset_postdata();
 }
endif;

/**
 * Goto Top functions
 *
 * @since Bloge 1.0.0
 *
 */
if (!function_exists('bloge_go_to_top')) :
    function bloge_go_to_top()
    {
        ?>
        <a id="toTop" href="#" title="<?php esc_attr_e('Go to Top', 'bloge'); ?>">
            <i class="fa fa-angle-double-up"></i>
        </a>
    <?php
    } endif;


/**
 * Date display functions
 *
 * @since Bloge 1.0.0
 *
 * @param string $format
 * @return string
 *
 */
if ( ! function_exists( 'bloge_date_display' ) ) :

    function bloge_date_display( $format = 'l, F j, Y') {
        echo date_i18n(get_option('date_format'));
    }
endif;

/**
 * Exclude category in blog page
 *
 * @since Bloge 1.0.0
 *
 * @param null
 * @return int
 */

  global $bloge_theme_options;
  $bloge_theme_options  = bloge_get_theme_options();
	$showpost = $bloge_theme_options['bloge-exclude-slider-category'];	
if( $showpost != 1 )
{
 if (!function_exists('bloge_exclude_category_in_blog_page')) :
    function bloge_exclude_category_in_blog_page($query)
    {   	

        if ($query->is_home && $query->is_main_query()  ) {
        	$bloge_theme_options    = bloge_get_theme_options();
            $catid = $bloge_theme_options['bloge-feature-cat'];
            $exclude_categories = $catid;
            if (!empty($exclude_categories)) {
                $cats = explode(',', $exclude_categories);
                $cats = array_filter($cats, 'is_numeric');
                $string_exclude = '';
                echo $string_exclude;
                if (!empty($cats)) {
                    $string_exclude = '-' . implode(',-', $cats);
                    $query->set('cat', $string_exclude);
                }
            }
        }
        return $query;
    }
endif;
}
add_filter('pre_get_posts', 'bloge_exclude_category_in_blog_page');


/**
 * Sanitize checkbox field
 *
 *  @since Bloge 1.0.0
 */
if (!function_exists('bloge_sanitize_checkbox')) :
    function bloge_sanitize_checkbox($checked)
    {
        // Boolean check.
        return ((isset($checked) && true == $checked) ? true : false);
    }
endif;