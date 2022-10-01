<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
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
