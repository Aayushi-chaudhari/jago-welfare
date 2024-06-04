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
/*Template Name: custom post detail*/
get_header();
?>
<!-- search -->
<div class="search-overlay">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-close">
                <span class="search-overlay-close-line"></span>
                <span class="search-overlay-close-line"></span>
            </div>
            <div class="search-overlay-form">
                <form>
                    <input type="text" class="input-search" placeholder="Search here...">
                    <button type="button"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Banner Area -->
<section id="common_banner_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="commn_banner_page">
                    <h2>Cause <span class="color_big_heading">details</span></h2>
                    <ul class="breadcrumb_wrapper">
                        <li class="breadcrumb_item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb_item"><img src="assets/img/icon/arrow.png" alt="img"></li>
                        <li class="breadcrumb_item"><a href="causes.html">Cause</a></li>
                        <li class="breadcrumb_item"><img src="assets/img/icon/arrow.png" alt="img"></li>
                        <li class="breadcrumb_item active">Cause details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- causes details Area -->
<section id="trending_causes_main" class="section_padding">
    <div class="container">
        <div class="row" id="counter">
            <div class="col-lg-8">
                <div class="details_wrapper_area">
                    <div class="details_big_img">
                        <img src="<?php the_field('hero_image_post');?>" alt="img">
                        <span class="causes_badge bg-yellow">Education</span>
                    </div>
                    <div class="details_skill_area">
                        <div class="class-full causes_pro_bar_flex progress_bar">
                            <div class="class-full-bar-box">
                                <h3 class="h3-title">Goal: <span>$11,000</span></h3>
                                <div class="class-full-bar-percent">
                                    <h2><span class="counting-data" data-count="89">0</span>
                                        <span>%</span>
                                    </h2>
                                </div>
                                <div class="skill-bar class-bar" data-width="89%">
                                    <div class="skill-bar-inner class-bar-in"></div>
                                </div>
                            </div>
                            <div class="details_top_btn">
                                <a href="make-donation.html" class="btn btn_md btn_theme">Donate now</a>
                            </div>
                        </div>

                    </div>
                    <?php the_field('post_content');?>

                    <div class="download_pdf_area">
                        <div class="pdf_download_left">
                            <img src="<?php the_field('pdf_image');?>" alt="icon">
                            <h4><?php the_field('pdf_name');?></h4>
                        </div>
                        <div class="pdf_download_right">
                            <?php if( get_field('pdf_file') ): ?>
                            <a href="<?php the_field('pdf_file'); ?>" class="btn btn_md btn_theme" download>Download
                                now</a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php
                         $args = array( 'post_type' => 'trending-causes', 'posts_per_page' => -1 );
                         $the_query = new WP_Query( $args ); 

                                    if ( $the_query->have_posts() ) :
                                        while ( $the_query->have_posts() ) : $the_query->the_post(); 
                                            the_post();

                                            // get_template_part( 'template-parts/content', get_post_type() );

                                  
                                            // If comments are open or we have at least one comment, load up the comment template.
                                            if ( comments_open() || get_comments_number() ) :
                                                comments_template();
                                            endif;

                                        endwhile; // End of the loop.
                                    endif;
		                ?>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar_first">
                    <!-- Project Organizer -->
                    <div class="project_organizer_wrapper sidebar_boxed">
                        <div class="project_organizer_img">
                            <img src="<?php the_field('project_organizer_image','options');?>" alt="img" />
                        </div>
                        <div class="project_organizer_text">
                            <h5><?php the_field('project_title','options');?></h5>
                            <h3><?php the_field('organizer_name','options');?></h3>
                            <p><?php the_field('designation','options');?></p>
                            <ul>
                                <li><img src="<?php the_field('category_image','options');?>" alt="icon"> Category:
                                    <span><?php the_field('category_title','options');?></span>
                                </li>
                                <li><img src="<?php the_field('location_image','options');?>" alt="icon"> Location:
                                    <span><?php the_field('location_title','options');?></span>
                                </li>
                                <li><img src="<?php the_field('date_image','options');?>" alt="icon"> Date:
                                    <span><?php the_field('date_','options');?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Recent Donet -->
                    <div class="project_recentdonet_wrapper sidebar_boxed">
                        <div class="sidebar_heading_main">
                            <h3><?php the_field('donation_title', 'options');?></h3>
                        </div>
                        <?php if( have_rows('recent_donations','options') ): ?>
                        <?php while( have_rows('recent_donations', 'options') ): the_row(); 
                                    $image = get_sub_field('doner_image', 'options');
                                    ?>
                        <div class="recent_donet_item">
                            <div class="recent_donet_img">
                                <a href="cause-details.html"><img src="<?php the_sub_field('doner_image','options');?>"
                                        alt="img"></a>
                            </div>

                            <div class="recent_donet_text">
                                <div class="sidebar_inner_heading">
                                    <h4><a href="cause-details.html"><?php the_sub_field('doner_name', 'options');?></a>
                                    </h4>
                                    <h5><?php the_sub_field('amount','options');?></h5>
                                </div>
                                <p><?php the_sub_field('doner_designation','options'); ?></p>
                                <h6><?php the_sub_field('time_of_donation','options');?></h6>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>


                    <!-- Recent Causes -->
                    <div class="recent_causes_wrapper sidebar_boxed">
                        <div class="sidebar_heading_main">
                            <h3>Recent causes</h3>
                        </div>
                        <?php 
                    $args = array( 'post_type' => 'trending-causes', 'posts_per_page' =>4, 'order' => 'ASC');
                    $the_query = new WP_Query( $args ); 
                    ?>
                        <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
                                $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full'); 
                                $published_date = get_the_date();
                                
                                ?>

                        <div class="recent_donet_item">
                            <div class="recent_donet_img">
                                <a href="cause-details.html"><img src="<?php echo $featured_img_url; ?>"></a>
                            </div>
                            <div class="recent_donet_text">
                                <div class="sidebar_inner_heading">
                                    <h4><a href="cause-details.html"><?php the_title();?></a></h4>
                                </div>
                                <h6><?php echo $published_date;?></h6>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                    <!-- share Causes -->
                    <div class="share_causes_wrapper sidebar_boxed">
                        <div class="sidebar_heading_main">
                            <h3><?php the_field('share_title', 'options');?></h3>
                        </div>
                        <div class="social_icon_sidebar">
                            <ul>
                                <?php if( have_rows('share_icons','options') ): ?>
                                <?php while( have_rows('share_icons', 'options') ): the_row(); 
                                    $image = get_sub_field('share_social_icons', 'options');
                                    ?>
                                <li><a href="#!"><img src="<?php the_sub_field('share_social_icons', 'options');?>"
                                            alt="icon"></a></li>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Left column with three thumbnail images -->
<div class="thumbnail-container">
  <img class="thumbnail" src="<?php the_field('image_one');?>" alt="Image 1">
  <img class="thumbnail" src="<?php the_field('image_one_copy');?>" alt="Image 2">
  <img class="thumbnail" src="<?php the_field('image_one_copy2');?>" alt="Image 3">
</div>

<!-- Right column with the selected image -->
<div class="image-viewer">
  <img id="selected-image" src="path_to_image_1.jpg" alt="Selected Image">
</div>

<?php get_footer(); ?>