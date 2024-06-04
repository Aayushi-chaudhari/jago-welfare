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
/*Template Name: contact*/
get_header();
?>

<!-- Banner Area -->
<section id="common_banner_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="commn_banner_page">
                    <h2><span class="color_big_heading">Contact</span></h2>
                    <ul class="breadcrumb_wrapper">
                        <li> <?php
                            $breadcrumb = get_field('breadcrumbs');
                            if ($breadcrumb) {
                                $breadcrumbs = explode(' > ', $breadcrumb);
                                echo '<div class="breadcrumbs">';
                                echo '<a href="' . get_home_url() . '">Home</a>';
                                foreach ($breadcrumbs as $crumb) {
                                    echo ' <img src=" ' . get_field('breadcrumbs_image') . ' "> ';
                                
                                    echo '<a href="http://localhost/jago-welfare/contact/">' . $crumb . '</a>';
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

<!-- Contact Area -->
<section id="contact_arae_main" class="section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                <div class="section_heading">
                    <h3><?php the_field('contact_heading'); ?></h3>
                    <?php the_field('contact_sub_heading'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="contact_area_left">
                    <?php if( have_rows('deatils_section') ): ?>
                    <?php while( have_rows('deatils_section') ): the_row(); 
                                    $image = get_sub_field('deatail_image');
                                    ?>
                    <div class="contact_left_item">
                        <div class="contact_left_icon">
                            <img src="<?php the_sub_field('deatail_image');?>" alt="icon">
                        </div>
                        <div class="contact_left_text">
                            <h3><?php the_sub_field('detail_heading');?></h3>
                            <?php the_sub_field('description'); ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact_form_Wrapper">
                    <h3>Leave us a message</h3>
                    <div>
                    <?php echo do_shortcode('[contact-form-7 id="559" title="Contact form 1"]');?>
                    </div>                  
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Map Area -->
<section id="contact_full_map" class="section_padding_bottom">
    <div class="contact_content_boxed">
        <div class="container">
            <div class="row">
                <?php if( have_rows('contact_content_details') ): ?>
                <?php while( have_rows('contact_content_details') ): the_row(); 
                                    $image = get_sub_field('content_image');
                                    $image2 = get_sub_field('backround_image');?>

                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="about_top_boxed bg_one">
                        <div class="about_top_boxed_icon">
                            <img src="<?php the_sub_field('content_image');?>" alt="img">
                        </div>
                        <div class="about_top_boxed_text">
                            <p><?php the_sub_field('content_heading');?></p>
                            <?php the_sub_field('content_sub_heading');?>
                            <a href="contact.html"><?php the_sub_field('deatils_button_text');?></a>
                        </div>
                        <div class="about_top_boxed_vector">
                            <img src="<?php the_sub_field('backround_image');?>" alt="img">
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact_map_area">
                    <?php the_field('map');?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>