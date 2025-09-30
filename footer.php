<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores-teste
 */

// ACF Variables

// Footer variables
$footer_background = get_field('footer_background');
$footer_graphism = get_field('footer_graphism');
$footer_title = get_field('footer_title');
$footer_email = get_field('footer_email');

?>

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<div class="footer">
			<div class="footer-bg" style="background-image: url('<?php echo $footer_background; ?>');"></div>
			<div class="footer-content">
				<h3 class="footer-title"><?php echo $footer_title; ?></h3>
				<p class="footer-email"><?php echo $footer_email; ?></p>
				<small class="footer-copyright">
					© <?php echo date('Y'); ?> Coopers. All rights reserved.
				</small>
			</div>
			<div class="footer-graphism" style="background-image: url('<?php echo $footer_graphism; ?>');"></div>
		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>