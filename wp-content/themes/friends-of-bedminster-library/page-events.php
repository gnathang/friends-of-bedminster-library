<?php
/*
 * Template Name: Events
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Friends_of_Bedminster_Library
 */
get_header('events');
?>

<!-- *** THIS PAGE ACTS AS A REDIRECT TO THE EVENTS PAGE (page.events.php) *** -->
	<main id="primary" class="site-main">
		<?php get_template_part('template-parts/content-events-page'); ?>
		<?php get_template_part('template-parts/content-join-us'); ?>
		<?php get_template_part('template-parts/content-contact-footer'); ?>
	</main><!-- #main -->

<?php
// get_sidebar(); 
get_footer();

