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

			<div class="col-sm-12 post-meta-wrapper">

				<?php

				if ( 'post' === get_post_type() ) : ?>

					<div class="entry-meta">

						<?php bloge_posted_on(); ?>

					</div><!-- .entry-meta -->

				<?php

				endif; ?>

			</div>

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

<article id="post-<?php the_ID(); ?>" <?php post_class('boxed'); ?>>
	<div class="bloge-post-wrapper">
		<div class="post-gallery-section">
		    <div class="media-wrapper">
		      	<div class="food-col-left col-md-8 col-sm-8 col-xs-12">
		          <div class="col-md-12 col-sm-12 col-xs-12">
		            <div class="media-item">
		              <div class="media-item-inner">
		                <img class="img-responsive" src="http://demo.canyonthemes.com/bloge/wp-content/uploads/sites/14/2017/11/men-2425121_12801.jpg" alt="">
		              </div>
		            </div>
		          </div>
		          <div class="clearfix"></div>
		          <div class="col-md-6 col-sm-6 col-xs-12">
		            <div class="media-item">
		              <div class="media-item-inner">
		                <img class="img-responsive" src="http://demo.canyonthemes.com/bloge/wp-content/uploads/sites/14/2017/11/men-2425121_12801.jpg" alt="">
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-sm-6 col-xs-12">
		            <div class="media-item">
		              <div class="media-item-inner">
		                <img class="img-responsive" src="http://demo.canyonthemes.com/bloge/wp-content/uploads/sites/14/2017/11/men-2425121_12801.jpg">
		              </div>
		            </div>
		          </div>
		      	</div>

		      	<div class="food-col-right col-md-4 col-sm-4 col-xs-12">
			        <div class="media-item">
			          <div class="media-item-inner">
			            <img class="img-responsive" src="http://demo.canyonthemes.com/bloge/wp-content/uploads/sites/14/2017/11/men-2425121_12801.jpg">
			          </div>
			        </div>
			        <div class="media-item">
			          <div class="media-item-inner">
			            <img class="img-responsive" src="http://demo.canyonthemes.com/bloge/wp-content/uploads/sites/14/2017/11/men-2425121_12801.jpg">
			          </div>
			        </div>
			        <div class="media-item">
			          <div class="media-item-inner">
			            <img class="img-responsive" src="http://demo.canyonthemes.com/bloge/wp-content/uploads/sites/14/2017/11/men-2425121_12801.jpg">
			          </div>
			        </div>
		      	</div>
		  	</div>
		</div>
	</div>
</article>

