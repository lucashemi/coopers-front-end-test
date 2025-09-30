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
 * @package underscores-teste
 */

get_header();

?>

<main id="primary" class="site-main">

	<?php get_template_part('template-parts/hero'); ?>
	<?php get_template_part('template-parts/to-do-list'); ?>
	<?php get_template_part('template-parts/plans'); ?>
	<?php get_template_part('template-parts/good-things'); ?>
	<?php get_template_part('template-parts/get-in-touch'); ?>

</main><!-- #main -->

<?php
get_footer();