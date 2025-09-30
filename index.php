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

// ACF Variables
$title = get_field('title');
$subtitle = get_field('subtitle');
$description = get_field('description');
$button_text = get_field('button_text');
$hero_image = get_field('hero_image');
$background_image = get_field('background_image');
?>

	<main id="primary" class="site-main">

		<div class="hero">
			<div class="hero-background-image"></div>
			<div class="hero-wrapper">
				<div class="hero-content">
					<h1 class="hero-title"><?php echo esc_html($title); ?> <span class="hero-subtitle">your daily jobs</span></h1>
					<p class="hero-description">The only way to get things done.</p>
					<a href="#todo-list-title">
						<button class="hero-button">Meet the To-do list</button>
					</a>
				</div>
				<div class="hero-div-image">
					<img class="hero-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-image.webp" alt="Picture of a person." />
				</div>
			</div>
		</div>



	</main><!-- #main -->
	

	

<?php
//get_footer();

			/**
		 * if ( have_posts() ) :
 * 
	 * 		if ( is_home() && ! is_front_page() ) :
		 * 		?>
			 * 	<header>
				 * 	<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			 * 	</header>
			 * 	<?php
		 * 	endif;
 * 
	 * 		while ( have_posts() ) :
			 * 	the_post();

				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
			 * 	get_template_part( 'template-parts/content', get_post_type() );
 * 
		 * 	endwhile;
 * 
		 * 	the_posts_navigation();
 * 
		 * else :
 * 
		 * 	get_template_part( 'template-parts/content', 'none' );
 * 
	 * 	endif;
		 */