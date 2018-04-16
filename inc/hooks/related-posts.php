<?php 
/**
 * Related Post
 *
 * @since Bloge 1.0.0
 *
 * @param null
 * @return void
 *
 */
if (!function_exists('bloge_related_post_below')) :

    /**
     * Related Post 
     *
     * @since 1.0.0
     */

    function bloge_related_post_below($post_id)
    {
        global $bloge_theme_options;
        $bloge_theme_options  = bloge_get_theme_options();
       
         $categories = get_the_category($post_id);
       
        if ($categories)
        {
            $category_ids = array();
           
            foreach ($categories as $category)
            {
                $category_ids[] = $category->term_id;
                $category_name[] = $category->slug;
            }

            $bloge_plus_cat_post_args = array(
                'category__in' => $category_ids,
                'post__not_in' => array($post_id),
                'post_type' => 'post',
                'posts_per_page' => 2,
                'post_status' => 'publish',
                'ignore_sticky_posts' => true
            );
            $bloge_plus_featured_query = new WP_Query($bloge_plus_cat_post_args);
            ?>
            <div class="related-post news-block">
                <header class="entry-header">
                    <h2 class="entry-title">
                        <?php esc_html_e('Related Posts', 'bloge') ?>
                    </h2>
                </header>
                <div class="row">
                    <?php
                    while ($bloge_plus_featured_query->have_posts()) :
                        $bloge_plus_featured_query->the_post(); ?>
                         <article class="col-sm-6 id="post-<?php the_ID(); ?>" <?php post_class(); ?>">
                                <div class="bloge-post-wrapper <?php if ( !has_post_thumbnail () ) { echo "no-feature-image"; } ?>">
                                   <!--post thumbnal options-->
                                    <?php if ( has_post_thumbnail () ) 
                                    { ?>
                                        <div class="bloge-post-thumb post-thumb">
                                            <a href="<?php the_permalink(); ?>">
                                             <?php the_post_thumbnail( 'full' ); ?>
                                            </a>
                                        </div><!-- .post-thumb-->
                              <?php } ?>
                                    <div class="content-wrap">
                                        <div class="related-header">
                                            <?php
                                            if ( is_single() ) :
                                               
                                                the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>', '</h3>' );
                                            else :
                                                the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
                                            endif; ?>
                                        </div><!-- .entry-header -->
                                        <div class="date"><?php the_date(); ?></div>
                                    </div>
                                </div>
                        </article><!-- #post-## -->
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <?php
        }
    }
endif;
add_action('bloge_related_posts', 'bloge_related_post_below', 10, 1);