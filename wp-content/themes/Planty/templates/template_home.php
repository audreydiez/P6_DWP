<?php
/**
 * Template Name: Home Template 
 */

get_header();
?>

<main id="site-content">

	<?php get_template_part( 'template-parts/content_home'); ?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
