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
/*Template Name: Testimonial*/
get_header();
?>
   <!-- Banner Area -->
   <section id="common_banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="commn_banner_page">
                        <h2><span class="color_big_heading">Testmonials</span></h2>
                        <ul class="breadcrumb_wrapper">
                        <li> <?php
                            $breadcrumb = get_field('breadcrumbs');
                            if ($breadcrumb) {
                                $breadcrumbs = explode(' > ', $breadcrumb);
                                echo '<div class="breadcrumbs breadcrumb_item">';
                                echo '<a href="' . get_home_url() . '">Home</a>';
                                foreach ($breadcrumbs as $crumb) {
                                    echo ' <img src=" ' . get_field('breadcrumbs_image') . ' "> ';
                                    echo '<a href="http://localhost/jago-welfare/pages/">' . $crumb . '</a>';
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

    <!-- volunteer Area -->
    <section id="testimonial_area" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="section_heading">
                        <h3><?php the_field('main_heading');?></h3>
                        <?php the_field('sub_heading');?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial_slider_wrapper owl-theme owl-carousel slider_dots slide">
                        
                    <?php if( have_rows('testimonials','options') ): ?>
                    <?php while( have_rows('testimonials', 'options') ): the_row(); 
                                    $image = get_sub_field('testimonial_image', 'options');
                                    $image2 = get_sub_field('qoute_image', 'options');
                                    ?>
                        <div class="testimonial_wrapper_boxed">
                            <img src="<?php the_sub_field('testimonial_image','options');?>" alt="img">
                            <p><?php the_sub_field('testimonial_description','options');?></p>
                            <div class="test_author">
                                <img src="<?php the_sub_field('qoute_image','options');?>" alt="img">
                                <h4><?php the_sub_field('testimonial_name','options');?></h4>
                                <h5><?php the_sub_field('designation','options');?></h5>
                            </div>
                        </div>
                        <?php endwhile;?>
                        <?php endif; ?>                                                                                                                                                                  
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>