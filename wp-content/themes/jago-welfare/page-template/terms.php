<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package jago-welfare
 */
/*Template Name: Inner Page */
get_header();
?>
<!-- Banner Area -->
<section id="common_banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="commn_banner_page">
                    <?php the_field('banner_heading');?>
                        <ul class="breadcrumb_wrapper">
                        <li> <?php
                            $breadcrumb = get_field('breadcrumbs');
                            if ($breadcrumb) {
                                $breadcrumbs = explode(' > ', $breadcrumb);
                                echo '<div class="breadcrumbs">';
                                echo '<a href="' . get_home_url() . '">Home</a>';
                                foreach ($breadcrumbs as $crumb) {
                                    echo ' <img src=" ' . get_field('breadcrumbs_image') . ' "> ';
                                
                                    echo '<a href="http://localhost/jago-welfare/terms-service/">' . $crumb . '</a>';
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

    <!-- Terms Of Serviced Area -->
    <section id="terms_service" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php the_field('content_area');?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>