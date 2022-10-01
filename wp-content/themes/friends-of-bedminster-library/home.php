<?php
/*
 * Template Name: Home
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Friends_of_Bedminster_Library
 */
	get_header();
?>

	<main id="primary" class="site-main">
 
		<?php
			get_template_part( 'template-parts/content-hero' );
			get_template_part( 'template-parts/content-coming-up' );
			get_template_part( 'template-parts/content-join-us' );
			get_template_part( 'template-parts/content-insta-stream' );
			get_template_part( 'template-parts/content-contact-footer' );
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
