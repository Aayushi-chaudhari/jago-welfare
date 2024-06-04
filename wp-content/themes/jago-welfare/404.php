<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package jago-welfare
 */
/*Template Name: 404 Error*/
get_header();
?>

	 <!-- Banner Area -->
	 <section id="common_banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="commn_banner_page">
                        <h2>404 <span class="color_big_heading">Error</span></h2>
                        <ul class="breadcrumb_wrapper">
						<li> <?php
                            $breadcrumb = get_field('breadcrumbs');
                            if ($breadcrumb) {
                                $breadcrumbs = explode(' > ', $breadcrumb);
                                echo '<div class="breadcrumbs breadcrumb_item">';
                                echo '<a href="' . get_home_url() . '">Home</a>';
                                foreach ($breadcrumbs as $crumb) {
                                    echo ' <img src=" ' . get_field('breadcrumbs_image') . ' "> ';
                                    echo '<a href="http://localhost/jago-welfare/404-error/">' . $crumb . '</a>';
                                }
                                echo '</div>';
                            }
                            ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Error Area -->
    <section id="error_area" class="section_padding">
        <h2 class="d-none">Heading</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="error_area_content text-center">
                        <img src="<?php the_field('404_error_image'); ?>" alt="img">
                        <a href="<?php the_field('back_to_home_link');?>" class="btn btn_theme btn_md"><?php the_field('back_to_home_text');?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer();
