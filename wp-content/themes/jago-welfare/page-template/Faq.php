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
/*Template Name: Faq*/
get_header();
?>
<!-- Banner Area -->
<section id="common_banner_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="commn_banner_page">
                    <h2><span class="color_big_heading">Faq</span></h2>
                    <ul class="breadcrumb_wrapper">
                        <li> <?php
                            $breadcrumb = get_field('breadcrumbs');
                            if ($breadcrumb) {
                                $breadcrumbs = explode(' > ', $breadcrumb);
                                echo '<div class="breadcrumbs">';
                                echo '<a href="' . get_home_url() . '">Home</a>';
                                foreach ($breadcrumbs as $crumb) {
                                    echo ' <img src=" ' . get_field('breadcrumbs_image') . ' "> ';
                                
                                    echo '<a href="http://localhost/jago-welfare/causes/">' . $crumb . '</a>';
                                }
                                echo '</div>';
                            }
                            ?></li>
                        <!-- <li class="breadcrumb_item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb_item"><img src="assets/img/icon/arrow.png" alt="img"></li>
                        <li class="breadcrumb_item active">Faq</li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Faqs Area -->
<section id="faqs_arae_top" class="section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                <div class="section_heading">
                    <h3><?php the_field('faq_heading');?></h3>
                    <?php the_field('faq_main_heading'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if( have_rows('fund_raise') ): ?>
            <?php while( have_rows('fund_raise') ): the_row(); 
                                    $image1 = get_sub_field('fund_raise_image');
                                    $image = get_sub_field('background_image');
                                    ?>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="about_top_boxed bg_one bg_two">
                    <div class="about_top_boxed_icon">
                        <img src="<?php the_sub_field('fund_raise_image'); ?>" alt="img">
                    </div>
                    <div class="about_top_boxed_text">
                        <p><?php the_sub_field('heading_');?></p>
                        <h3><?php the_sub_field('sub_heading');?></h3>
                        <a href="faqs.html"><?php the_sub_field('learn_more');?></a>
                    </div>
                    <div class="about_top_boxed_vector">
                        <img src="<?php the_sub_field('background_image'); ?>" alt="img">
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</section>



<section id="faqs_arae_main" class="section_padding_bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="faqs_area">
                    <div class="accordion"  id="accordionExample">
                        <?php if( have_rows('accordian_items') ): ?>
                        <?php while( have_rows('accordian_items') ): the_row();                                    
                                    ?>
                        <div class="accordion-item">
                            <h3 class="accordion-header"><?php the_sub_field('accordian_title');?>
                            <i class="accordion-toggle"></i>
                        </h3>
                            
                            <div class="accordion-content">
                                <!-- Content for Accordion Item 1 -->
                                <?php the_sub_field('accordian_description');?>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif;?>                                  
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="faqs_area">
                    <div class="accordion"  id="accordionExample2">
                        <?php if( have_rows('accordian_items_2') ): ?>
                        <?php while( have_rows('accordian_items_2') ): the_row();                                    
                                    ?>
                        <div class="accordion-item">
                            <h3 class="accordion-header-two"><?php the_sub_field('accordian_title');?>
                            <span class="accordion-toggle"></span>
                        </h3>
                            <div class="accordion-content">
                                <!-- Content for Accordion Item 1 -->
                                <?php the_sub_field('details');?>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif;?>                                  
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>