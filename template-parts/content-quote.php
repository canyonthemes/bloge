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
		<div class="row reletive">
			<!--post thumbnal options-->
			<div class="bloge-post-thumb post-thumb">
			 <?php $content = get_the_content();
               $content_a = explode("<blockquote>",$content);
               $content_b = explode("</blockquote>", $content_a[1]);
               echo '<div class="quote-section">';
               echo $content_b[0];
               echo '</div>';
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
