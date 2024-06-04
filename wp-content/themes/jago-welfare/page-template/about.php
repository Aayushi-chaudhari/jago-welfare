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
/*Template Name: About*/
get_header();
?>
<!-- Banner Area -->
<section id="common_banner_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="commn_banner_page">
                    <h2><span class="color_big_heading">About</span> us</h2>
                    <ul class="breadcrumb_wrapper">
                        <li> <?php
                            $breadcrumb = get_field('breadcrumbs');
                            if ($breadcrumb) {
                                $breadcrumbs = explode(' > ', $breadcrumb);
                                echo '<div class="breadcrumbs breadcrumb_item">';
                                echo '<a href="' . get_home_url() . '">Home</a>';
                                foreach ($breadcrumbs as $crumb) {
                                    echo ' <img src=" ' . get_field('breadcrumbs_image') . ' "> ';
                                    echo '<a href="http://localhost/jago-welfare/about/">' . $crumb . '</a>';
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

<!-- About Area -->
<section id="about_area" class="section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="about_area_img">
                    <img src="<?php the_field('poverty_area_image','options'); ?>" alt="img">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="about_area_main_text">
                    <div class="about_area_heading">
                        <img src="<?php the_field('poverty_area_near_heading_image','options'); ?>" alt="img">
                        <h3><?php the_field('poverty_area_heading','options'); ?></h3>
                    </div>
                    <div class="about_area_heading_two">
                        <h2><?php the_field('poverty_area_heading_two','options'); ?></h2>
                        <h3><?php the_field('poverty_area_sub_heading','options'); ?></h3>
                    </div>
                    <div class="about_area_para">
                        <h5><?php the_field('poverty_area_detail','options'); ?> </h5>
                        <?php the_field('pover_area_info','options'); ?>
                    </div>
                    <div class="about_vedio_area">
                        <a href="<?php the_field('learn_more_text','options'); ?>"
                            class="btn btn_theme btn_md"><?php the_field('learn_more_button_','options'); ?></a>
                        <a href="<?php the_field('vedio_link','options'); ?>" class="vedio_btn popup-vimeo"><i
                                class="fa fa-play"></i><?php the_field('vedio_heading','options'); ?> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- volunteer Area -->
    <section id="volunteer_area" class="section_after section_padding bg-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="section_heading">
                        <h3><?php the_field('volunteer_heading');?></h3>
                        <?php the_field('volunteer_sub_heading');?>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php if( have_rows('volunteer_card') ): ?>
            <?php while( have_rows('volunteer_card') ): the_row(); 
                                    $image = get_sub_field('volunteer_image');                                  
                                    ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="volunteer_wrapper">
                        <div class="volunteer_img">
                            <img src="<?php the_sub_field('volunteer_image');?>" alt="img">
                            <div class="volunteer_icon">
                                <ul>
                                    <li>
                                        <a href="#!"><i class="fab fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="fab fa-twitter-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="volunteer_text">
                            <h3><a href="#!"><?php the_sub_field('volunteer_name');?></a></h3>
                            <p><?php the_sub_field('volunteer_designation');?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>


<!-- Partner Area -->
<section id="partner_area" class="section_padding_bottom">
    <h2 class="d-none">Heading</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="slider">
                    <?php if (have_rows('partner_area_image_slider', 'options')) : ?>
                    <?php while (have_rows('partner_area_image_slider','options')) : the_row(); ?>
                    <?php $image = get_sub_field('partner_area_images', 'options'); ?>
                    <div class="slide">
                        <img src="<?php the_sub_field('partner_area_images', 'options'); ?>" />
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- newsletter Events Area -->
<section id="newletter_banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="newletter_text">
                    <h4><img src="<?php the_field('comunity_image');?>" alt="img"><?php the_field('join_heading');?></h4>
                    <?php the_field('join_sub_heading');?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="newletter_button">
                    <a href="volunter.html" class="btn news_btn btn_theme"><?php the_field('become_volunteer');?></a>
                </div>
            </div>
        </div>
    </div>

</section>


<section id="testimonial_area" class="section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                <div class="section_heading">
                    <h3><?php the_field('main_heading','options');?></h3>
                    <?php the_field('sub_heading','options');?>
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