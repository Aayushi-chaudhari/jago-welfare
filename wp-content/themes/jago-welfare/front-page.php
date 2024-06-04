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

get_header();
?>
<!-- <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
   <div id="sidebar" class="sidebar container">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
   </div>
<?php endif; ?> -->

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
<section id="home_one_banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner_one_text">
                    <h1><span><?php the_field('banner_text_one'); ?></h1>
                    <p><?php the_field('banner_text_two'); ?></p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner_one_img">
                    <img src="<?php the_field('main_banner_background_image'); ?>" alt="img">
                    <div class="banner_element">
                        <img src="<?php the_field('banner_element_one'); ?>" alt="icon" class="element_1 shape-1">
                        <img src="<?php the_field('banner_element_two'); ?>" alt="icon" class="element_2 shape-2">
                        <img src="<?php the_field('banner_element_three'); ?>" alt="icon" class="element_3 shape-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Top Area -->
<section id="about_top_area" class="section_padding">
    <div class="container">
        <div class="row">
            <?php if( have_rows('donate_details') ): ?>
            <?php while( have_rows('donate_details') ): the_row(); 
                                    $image = get_sub_field('donate_image');
                                    $image = get_sub_field('more_details_background_image');
                                    ?>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="about_top_boxed bg_one">
                    <div class="about_top_boxed_icon">
                        <img src="<?php the_sub_field('donate_image'); ?>" alt="img">
                    </div>
                    <div class="about_top_boxed_text">
                        <p><?php the_sub_field('donate_for_title'); ?></p>
                        <h3><?php the_sub_field('donate_for_main_heading'); ?></h3>
                        <a
                            href="<?php the_sub_field('more_details_link'); ?>"><?php the_sub_field('more_details_link_title'); ?></a>
                    </div>
                    <div class="about_top_boxed_vector">
                        <img src="<?php the_sub_field('more_details_background_image'); ?>" alt="img">
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
</section>

<!-- About Area -->
<section id="about_area" class="section_padding_bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="about_area_img">
                    <img src="<?php the_field('poverty_area_image'); ?>" alt="img">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="about_area_main_text">
                    <div class="about_area_heading">
                        <img src="<?php the_field('poverty_area_near_heading_image'); ?>" alt="img">
                        <h3><?php the_field('poverty_area_heading'); ?></h3>
                    </div>
                    <div class="about_area_heading_two">
                        <h2><?php the_field('poverty_area_heading_two'); ?></h2>
                        <h3><?php the_field('poverty_area_sub_heading'); ?></h3>
                    </div>
                    <div class="about_area_para">
                        <h5><?php the_field('poverty_area_detail'); ?> </h5>
                        <?php the_field('pover_area_info'); ?>
                    </div>
                    <div class="about_vedio_area">
                        <a href="<?php the_field('learn_more_text'); ?>"
                            class="btn btn_theme btn_md"><?php the_field('learn_more_button_'); ?></a>
                        <a href="<?php the_field('vedio_link'); ?>" class="vedio_btn popup-vimeo"><i
                                class="fa fa-play"></i><?php the_field('vedio_heading'); ?> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trending causes Area -->
<section id="trending_causes_main" class="section_padding bg-color">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                <div class="section_heading">
                    <h3><?php the_field('trending_cause_heading','options');?></h3>
                    <?php the_field('trending_cause_title', 'options'); ?>
                </div>
            </div>
        </div>
        <div class="row" id="counter">
            <?php 
                    $args = array( 'post_type' => 'trending-causes', 'posts_per_page' => 3 , 'order' => 'DESC');
                    $the_query = new WP_Query( $args ); 
                    ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
                        $featured_img_url = get_the_post_thumbnail_url($post->ID); 
                        ?>

            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="case_boxed_wrapper">
                    <div class="case_boxed_img">
                        <a href="<?php echo the_permalink();?>"><img src="<?php echo $featured_img_url ; ?>"></a>
                        <span class="causes_badge bg-theme"><?php the_category(''); ?></span>
                    </div>
                    <div class="causes_boxed_text">
                        <div class="class-full causes_pro_bar progress_bar">
                            <div class="class-full-bar-box">
                                <h3 class="h3-title">Goal: <span>$10,000</span></h3>
                                <div class="class-full-bar-percent">
                                    <h2><span class="counting-data"
                                            data-count="<?php the_field('data_count');?> "></span>
                                        <span>%</span>
                                    </h2>
                                </div>
                                <div class="skill-bar class-bar" data-width="50%">
                                    <div class="skill-bar-inner class-bar-in"></div>
                                </div>
                            </div>
                        </div>
                        <h3><a href="<?php echo the_permalink();?> "><?php the_title(); ?></a></h3>
                        <p><?php the_field('post_excerpt'); ?></p>
                        <div class="causes_boxed_bottom_wrapper">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="casuses_bottom_boxed">
                                        <div class="casuses_bottom_icon">
                                            <img src="<?php the_field('date_image'); ?>" alt="icon">
                                        </div>
                                        <div class="casuses_bottom_content">
                                            <h5>Date:</h5>
                                            <p>20 Dec, 2021</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="casuses_bottom_boxed casuses_left_padding">
                                        <div class="casuses_bottom_icon">
                                            <img src="<?php the_field('admin_image'); ?>" alt="icon">
                                        </div>
                                        <div class="casuses_bottom_content">
                                            <h5>By:</h5>
                                            <p>Admin</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php wp_reset_postdata();?>
            <?php endwhile; ?>
            <?php endif ;?>
        </div>
    </div>
</section>

<!-- Upcoming Events Area -->
<section id="upcoming_events" class="section_padding_bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                <div class="section_heading">
                    <h3>Upcoming events</h3>
                    <h2>Join our upcoming
                        <span class="color_big_heading">events</span> for contribution
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
                    $args = array( 'post_type' => 'upcoming-events', 'posts_per_page' => 1 , 'order'  => 'ASC',);
                    $the_query = new WP_Query( $args ); 
                    ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
                        $featured_img_url = get_the_post_thumbnail_url($post->ID); 
                        ?>
            <!-- <?php
                $categories = get_the_category();
                if ($categories) {
                    foreach ($categories as $category) {
                        // Check if the category has a parent
                        if ($category->parent) {
                            // Sub-category
                            echo '<span class="sub-category">' . $category->name . '</span>';
                            // Get the parent category
                            $parent_category = get_category($category->parent);
                            if ($parent_category) {
                                echo '<span class="parent-category">' . $parent_category->name . '</span>';
                            }
                        } else {
                            // Parent category
                            // echo '<span class="parent-category">' . $category->name . '</span>';
                        }
                    }
                }
                ?> -->

            <div class="col-lg-6">
                <div class="event_left_side_wrapper">
                    <div class="event_big_img">
                        <a href="event-detail.html"><img src=<?php echo $featured_img_url; ?>></a>
                    </div>
                    <div class="event_content_area big_content_padding">
                        <div class="event_tag_area">
                            <a href="event.html"><?php the_category(''); ?></a>
                        </div>
                        <div class="event_heading_area">
                            <div class="event_heading">
                                <h3><a href="event-details.html"><?php the_title(); ?></a></h3>
                            </div>
                            <div class="event_date">
                                <img src="<?php the_field('date_image'); ?>" alt="icon">
                                <?php the_field('start_date');?>
                            </div>
                        </div>
                        <div class="event_para">
                            <p><?php the_field('post_detail'); ?></p>
                        </div>
                        <div class="event_boxed_bottom_wrapper">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="event_bottom_boxed">
                                        <div class="event_bottom_icon">
                                            <img src="<?php the_field('location_image'); ?>" alt="icon">
                                        </div>
                                        <div class="event_bottom_content">
                                            <h5><?php the_field('location'); ?></h5>
                                            <p><?php the_field('actual_location_'); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="event_bottom_boxed">
                                        <div class="event_bottom_icon">
                                            <img src="<?php the_field('clock_image'); ?>" alt="icon">
                                        </div>
                                        <div class="event_bottom_content">
                                            <h5><?php the_field('start_message'); ?></h5>
                                            <p><?php the_field('start_time'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event_button">
                            <a href="event-details.html"
                                class="btn btn_md btn_theme"><?php the_field('joint_event'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php wp_reset_postdata();?>
            <?php endwhile; ?>
            <?php endif; ?>


            <div class="col-lg-6">
                <?php 
                    $args = array( 'post_type' => 'upcoming-events', 'posts_per_page' => 3 , 'order'  => 'DESC',);
                    $the_query = new WP_Query( $args ); 
                    ?>
                <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
                        $thumbnail = get_the_post_thumbnail();
                        ?>
                <div class="event_left_side_wrapper">
                    <div class="event_content_area small_content_padding">
                        <div class="event_tag_area">
                            <a href="event.html"><?php the_category(''); ?></a>
                        </div>
                        <div class="event_heading_area">
                            <div class="event_heading">
                                <h3><a href="event-details.html"><?php the_title(); ?></a></h3>
                            </div>
                            <div class="event_date">
                                <img src="<?php the_field('date_image'); ?>" alt="icon">
                                <?php the_field('start_date');?>
                            </div>
                        </div>
                        <div class="event_para">
                            <p><?php the_field('post_detail'); ?></p>
                        </div>
                        <div class="event_boxed_bottom_wrapper">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="event_bottom_boxed">
                                        <div class="event_bottom_icon">
                                            <img src="<?php the_field('location_image'); ?>" alt="icon">
                                        </div>
                                        <div class="event_bottom_content">
                                            <h5><?php the_field('location'); ?></h5>
                                            <p><?php the_field('actual_location_'); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="event_bottom_boxed">
                                        <div class="event_bottom_icon">
                                            <img src="<?php the_field('clock_image'); ?>" alt="icon">
                                        </div>
                                        <div class="event_bottom_content">
                                            <h5><?php the_field('start_message'); ?></h5>
                                            <p><?php the_field('start_time'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php wp_reset_postdata();?>
                <?php endwhile;?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Donate Area -->
<section id="donate_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="donate_text">
                    <h3><?php the_field('donations_title'); ?></h3>
                    <?php the_field('doations_sub_details'); ?>
                    <a href="<?php the_field('donate_now_button_link'); ?>"
                        class="btn btn_md btn_theme"><?php the_field('donate_now_button'); ?> </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partner Area -->
<section id="partner_area">
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

<!-- Counter  Area -->
<section id="counter_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="counter_area_wrapper">
                    <div class="row">

                        <?php if( have_rows('total_satisfied_section','options') ): ?>
                        <?php while( have_rows('total_satisfied_section', 'options') ): the_row(); 
                                    $image = get_sub_field('total_satisfied_image','options');                           
                                    ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="counter_item">
                                <img src="<?php the_sub_field('total_satisfied_image', 'options'); ?>" alt="icon">
                                <h2 class="counter" data-countto="<?php the_sub_field('happy_numbers', 'options');?>"
                                    data-duration="2000">0</h2>
                                <p><?php the_sub_field('headings'); ?></p>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Blog Area -->
<section id="home_blog_area" class="section_after bg-color">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                <div class="section_heading">
                    <h3>Our latest news</h3>
                    <h2>Check all
                        <span class="color_big_heading">our latest</span> news and updates
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
                    $args = array( 'post_type' => 'latest-news', 'posts_per_page' => 3 , 'order' => 'ASC');
                    $the_query = new WP_Query( $args ); 
                    ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
                        $featured_img_url = get_the_post_thumbnail_url($post->ID); 
                        ?>

            <div class="col-lg-4">
                <div class="blog_card_wrapper">
                    <div class="blog_card_img">
                        <a href="news-details.html"><img src=<?php echo $featured_img_url;?>></a>
                    </div>
                    <div class="blog_card_text">
                        <div class="blog_card_tags">
                            <a href="news.html"><?php the_field('news_hashtags'); ?></a>
                        </div>
                        <div class="blog_card_heading">
                            <h3><a href="news-details.html"><?php the_title(); ?></a></h3>
                            <p><?php the_field('post_details');?></p>
                        </div>
                        <div class="blog_boxed_bottom_wrapper">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="blog_bottom_boxed">
                                        <div class="blog_bottom_icon">
                                            <img src="<?php the_field('calender_image'); ?>" alt="icon">
                                        </div>
                                        <div class="blog_bottom_content">
                                            <h5><?php the_field('date_text'); ?></h5>
                                            <p><?php the_field('actual_date'); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="blog_bottom_boxed blog_left_padding">
                                        <div class="blog_bottom_icon">
                                            <img src="<?php the_field('admin_image'); ?>" alt="icon">
                                        </div>
                                        <div class="blog_bottom_content">
                                            <h5><?php the_field('admin_title'); ?></h5>
                                            <p><?php the_field('admin_name'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php wp_reset_postdata();?>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php
$taxonomy = 'category';
$terms = get_terms($taxonomy);

if (!empty($terms) && !is_wp_error($terms)) {
    echo '<ul>';
    foreach ($terms as $term) {
        $category_link = get_term_link($term);
        echo '<li><a href="' . esc_url($category_link) . '">' . $term->name . '</a></li>';
    }
    echo '</ul>';
}
?>


<?php get_footer(); ?>