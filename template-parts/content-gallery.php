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
				   ?> 

					      	<div class="food-col-left col-md-8 col-sm-8 col-xs-12">
					        
					          <div class="col-md-12 col-sm-12 col-xs-12">
					            <div class="media-item">
					              <div class="media-item-inner">
					                <img class="img-responsive" src="<?php echo esc_url( $src ) ; ?>" alt="">
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
	                   
	                     ?>
                    	   <div class="media-item">
				          <div class="media-item-inner">
				            <img class="img-responsive" src="<?php echo esc_url( $src ) ; ?>">
				          </div>
				        </div>
				    <?php  if ( $count == 2)  { ?>
                         </div>
				     <?php }}

                   if($count == 3)
                    { ?>
                    	<div class="clearfix"></div>
				   <?php }  ?>
                   
				  
			       <?php
			       if( $count >= 3)
			       {
			        ?>   
			          <div class="col-md-4 col-sm-4 col-xs-12">
			           
			            <div class="media-item">
			              <div class="media-item-inner">
			                <img class="img-responsive" src="<?php echo esc_url( $src ) ; ?>" alt="">
			              </div>
			            </div>
			          </div>
           
               <?php } $count++; } ?>     
			  	
			</div>

  <?php } ?>		
	</div>
</article>

