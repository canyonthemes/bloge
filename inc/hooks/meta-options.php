<?php
/*
* Meta Section In Post
* @since 1.0.0
* @package Bloge
*/ 
if ( ! function_exists( 'bloge_meta_section' ) ) :
    /**
     * Meta Section in Post
     *
     * @since 1.0.0
     */
    function bloge_meta_section(){
?>
	<div class="col-sm-12 post-meta-wrapper">
		<?php
		global $bloge_theme_options;
		$bloge_meta_options =  $bloge_theme_options['bloge-meta-options'];
		if ( 'post' === get_post_type() && (1 == $bloge_meta_options ) ) : ?>
			<div class="entry-meta">
				<?php bloge_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</div>
<?php
}
endif;
add_action( 'bloge_meta_section_action', 'bloge_meta_section', 10 );

/*
* Meta Section In Sigle Post
* @since 1.0.0
* @package Bloge
*/ 
if ( ! function_exists( 'bloge_footer_meta_section' ) ) :
    /**
     * Meta Section in Single Post
     *
     * @since 1.0.0
     */
    function bloge_footer_meta_section(){ 
?>
<footer class="entry-footer">
	<?php 
	global $bloge_theme_options;
	$bloge_footer_meta_options =  $bloge_theme_options['bloge-meta-options'];
		if( 1 == $bloge_footer_meta_options ) {		
		  bloge_entry_footer();
		}  
	?>

</footer><!-- .entry-footer -->
<?php
}
endif;
add_action( 'bloge_footer_meta_section_action', 'bloge_footer_meta_section', 10 );