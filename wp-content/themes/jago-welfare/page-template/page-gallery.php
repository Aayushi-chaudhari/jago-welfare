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
/*Template Name: Gallery*/
get_header();
?>
<!-- Banner Area -->
<section id="common_banner_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="commn_banner_page">
                    <h2><span class="color_big_heading">Gallery </span>grid</h2>
                    <ul class="breadcrumb_wrapper">
                    <li> <?php
                            $breadcrumb = get_field('breadcrumbs');
                            if ($breadcrumb) {
                                $breadcrumbs = explode(' > ', $breadcrumb);
                                echo '<div class="breadcrumbs breadcrumb_item">';
                                echo '<a href="' . get_home_url() . '">Home</a>';
                                foreach ($breadcrumbs as $crumb) {
                                    echo ' <img src=" ' . get_field('breadcrumbs_image') . ' "> ';
                                    echo '<a href="http://localhost/jago-welfare/gallery/">' . $crumb . '</a>';
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

<!-- Gallery Grid Area -->
<section id="gallery_grid_area" class="section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                <div class="section_heading">
                    <h3>Gallery</h3>
                    <h2> Explore our <span class="color_big_heading">gallery</span> to know
                        how we works</h2>
                </div>
            </div>
        </div>
        <div class="row popup-gallery">
            <?php if( have_rows('gallery_grid') ): ?>
            <?php while( have_rows('gallery_grid') ): the_row(); 
                                    $image = get_sub_field('gallery_image');
                                    $image2 = get_sub_field('hover_image');
                                    ?>
            <div class="col-lg-4 co-md-6 col-sm-12 col-12">
                <div class="gallery_item">
                    <img src="<?php the_sub_field('gallery_image');?>" alt="img">
                    <div class="gallery_overlay">
                        <a href="<?php the_sub_field('gallery_image');?>" title="FoodCamp"><img
                                src="<?php the_sub_field('hover_image');?>" alt="icon"></a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>


<!-- <div class="row popup-gallery">
    <?php 
$images = get_field('gallery_grid');
if( $images ): ?>
    <div class="col-lg-4 co-md-6 col-sm-12 col-12">
        <div class="gallery_item">
            <?php foreach( $images as $image ): ?>
            <div>
                <a href="<?php echo esc_url($image['url']); ?>">
                    <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>
            </div>
           

            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>
</div> -->



<?php get_footer(); ?>