<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bloge
 */
global $bloge_theme_options;
 $bloge_read_more = esc_html( $bloge_theme_options['bloge-read-more-text'] );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('boxed'); ?>>

	<div class="bloge-post-wrapper">

		<div class="reletive">

			<!--post thumbnal options-->

			<div class="bloge-post-thumb post-thumb">

							<?php

								if ( ! is_single() && get_post_gallery() ) { ?>

						    		<div class="bloge-gallery-section"> 
				                        <div id="gallery-2" class="gallery galleryid-201 gallery-columns-3 gallery-size-medium">								  
									    		   <?php $gallery =get_post_gallery ( get_the_ID(), false ); 
							                            foreach ( $gallery['src'] AS $src ) {
							                   		?> 

							                   		<figure class="gallery-item">
												        <div class="gallery-icon landscape">               
							                  			    <a class="fancybox" data-fancybox-group="gallery" href="<?php echo esc_url( $src ); ?>"> 
							                  			        <img src="<?php echo esc_url( $src ) ; ?>" class="img-responsive" alt="Gallery image" />
							                  			    </a>
							                  			</div>
							                  		</figure>	    
											            <?php
											        } 

											        ?>
				                        </div>        

						    		</div>

						    <?php	

						       

						       }



							?>

			</div><!-- .post-thumb-->

			<?php
			/**
			 * Hook - bloge_doctype.
			 *
			 * @hooked bloge_doctype_action - 10
			 */
			do_action('bloge_meta_section_action'); ?>

		</div>

		<div class="row">

			<div class="col-sm-10 col-sm-offset-1">

				<div class="entry-header">

					<?php

					if ( is_single() ) :

						the_title( '<h1 class="entry-title">', '</h1>' );

					else :

						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

					endif; ?>

				</div><!-- .entry-header -->



				<div class="entry-content">

					<?php 

						$content = get_the_content();

						$trimmed_content = wp_trim_words( $content, 60); 

					?>

					<p><?php echo esc_html( $trimmed_content ) ; ?></p> 

				</div><!-- .entry-content -->



				<div class="entry-footer">

					<div class="row">

						<div class="col-sm-6 col-md-6 more-area text-left">

							<a href="<?php the_permalink(); ?>">

							<?php echo $bloge_read_more; ?>  <i class="fa fa-angle-double-right"></i></a>

						</div>

					</div>

				</div>

			</div>

		</div>

</article><!-- #post-## -->

