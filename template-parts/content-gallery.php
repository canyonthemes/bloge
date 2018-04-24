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
		<?php

        if ( ! is_single() && get_post_gallery() )
        { ?>
			<div class="post-gallery-section">
			    <div class="media-wrapper">
			       <?php $gallery =get_post_gallery ( get_the_ID(), false );
                    $count=0;
                      foreach ( $gallery['src'] AS $src ) {
                      if($count ==0 )
                       {
<<<<<<< HEAD
				   ?>
=======
				   ?> 
>>>>>>> 05abef8196b7bfda8d1551815bf750502d23fe5c

				      	<div class="food-col-left col-md-8 col-sm-8 col-xs-12">
				          <div class="col-md-12 col-sm-12 col-xs-12">
				            <div class="media-item">
				              <div class="media-item-inner">
<<<<<<< HEAD
				              	   <a class="fancybox" data-fancybox-group="gallery" href="<?php echo esc_url( $src ); ?>">
				                      <img class="img-responsive" src="<?php echo esc_url( $src ) ; ?>" alt="">
				                    </a>
=======
				              	   <a class="fancybox" data-fancybox-group="gallery" href="<?php echo esc_url( $src ); ?>"> 
				                      <img class="img-responsive" src="<?php echo esc_url( $src ) ; ?>" alt="">
				                    </a>  
>>>>>>> 05abef8196b7bfda8d1551815bf750502d23fe5c
				              </div>
				            </div>
				          </div>
	                	</div>
	                <?php

	                    }

	                    if ( $count == 2)  { ?>

	                    <div class="food-col-right col-md-4 col-sm-4 col-xs-12">
				       <?php }

	                     if ( $count == 1 || $count == 2)  {
<<<<<<< HEAD

	                     ?>
                    	<div class="media-item">
				          <div class="media-item-inner">
				             <a class="fancybox" data-fancybox-group="gallery" href="<?php echo esc_url( $src ); ?>">
=======
	                   
	                     ?>
                    	<div class="media-item">
				          <div class="media-item-inner">
				             <a class="fancybox" data-fancybox-group="gallery" href="<?php echo esc_url( $src ); ?>">  
>>>>>>> 05abef8196b7bfda8d1551815bf750502d23fe5c
				              <img class="img-responsive" src="<?php echo esc_url( $src ) ; ?>">
				           </a>
				          </div>
				        </div>
				    <?php  if ( $count == 2)  { ?>
                         </div>
				     <?php }}

                   if($count == 3)
                    { ?>
                    	<div class="clearfix"></div>
				   <?php }  ?>
<<<<<<< HEAD


			       <?php
			       if( $count >= 3)
			       {
			        ?>
			          <div class="col-md-4 col-sm-4 col-xs-12">

			            <div class="media-item">
			              <div class="media-item-inner">
			              	<a class="fancybox" data-fancybox-group="gallery" href="<?php echo esc_url( $src ); ?>">
=======
                   
				  
			       <?php
			       if( $count >= 3)
			       {
			        ?>   
			          <div class="col-md-4 col-sm-4 col-xs-12">
			           
			            <div class="media-item">
			              <div class="media-item-inner">
			              	<a class="fancybox" data-fancybox-group="gallery" href="<?php echo esc_url( $src ); ?>"> 
>>>>>>> 05abef8196b7bfda8d1551815bf750502d23fe5c
			                   <img class="img-responsive" src="<?php echo esc_url( $src ) ; ?>" alt="">
			                </a>
			              </div>
			            </div>
			          </div>
<<<<<<< HEAD
               		<?php } $count++; } ?>
				</div>
			</div>
  		<?php } ?>
=======
               		<?php } $count++; } ?>     
				</div>
			</div>
  		<?php } ?>
<<<<<<< HEAD
=======
  		<div class="col-sm-12 post-meta-wrapper">
			<?php
			if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php bloge_posted_on(); ?>
				</div><!-- .entry-meta -->
			<?php
			endif; ?>
		</div>
>>>>>>> 05abef8196b7bfda8d1551815bf750502d23fe5c
>>>>>>> ac119dd2dc130b6732d971446365b2be02e71367
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
<<<<<<< HEAD
				    <p><?php the_excerpt(); ?></p> 
=======
<<<<<<< HEAD
				     <?php
				      $content = get_the_content();
				      $trimmed_content = wp_trim_words( $content, 60);
				     ?>
				     <p><?php echo esc_html( $trimmed_content ) ; ?></p>
=======
				     <?php 
				      $content = get_the_content();
				      $trimmed_content = wp_trim_words( $content, 60); 
				     ?>
				     <p><?php echo esc_html( $trimmed_content ) ; ?></p> 
>>>>>>> 05abef8196b7bfda8d1551815bf750502d23fe5c
>>>>>>> ac119dd2dc130b6732d971446365b2be02e71367
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
<<<<<<< HEAD
  		</div>
=======
  		</div>		
>>>>>>> 05abef8196b7bfda8d1551815bf750502d23fe5c
</article>

