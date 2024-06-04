<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jago-welfare
 */
/*Template Name: Login*/
// if (is_user_logged_in()) {
//     wp_redirect(home_url()); // Redirect to homepage if the user is already logged in
//     exit();
// }

get_header();
?>

<?php echo do_shortcode('[forminator_form id="665"]');?>


<?php get_footer(); ?>