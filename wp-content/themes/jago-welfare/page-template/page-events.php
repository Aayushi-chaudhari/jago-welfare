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
 * @package jago-welfare
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		if (have_posts()) {
			while (have_posts()) {
			  the_post();
			  // Regular post content
			  the_content();
		  
			  // Custom query for the custom post type
			  $args = array(
				'post_type' => 'custom-post', // Replace 'products' with your custom post type name
				'posts_per_page' => 5, // Number of posts to display
			  );
			  $custom_query = new WP_Query($args);
		  
			  // Display custom post type data
			  if ($custom_query->have_posts()) {
				echo '<h2>Related Products</h2>';
				echo '<ul>';
				while ($custom_query->have_posts()) {
				  $custom_query->the_post();
				  echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';

				  
				}
				echo '</ul>';
				
			  }
		  
			  // Restore original post data
			  wp_reset_postdata();
			}
		  }
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
