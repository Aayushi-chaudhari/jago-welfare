<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jago-welfare
 */

get_header();
?>
<!-- Banner Area -->
<section id="common_banner_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="commn_banner_page">
                    <h2><span class="color_big_heading">Causes</span></h2>
                    <ul class="breadcrumb_wrapper">
                    <li> 
                        <?php
                            $breadcrumb = get_field('breadcrumbs');
                            if ($breadcrumb) {
                                $breadcrumbs = explode(' > ', $breadcrumb);
                                echo '<div class="breadcrumbs breadcrumb_item">';
                                echo '<a href="' . get_home_url() . '">Home</a>';
                                foreach ($breadcrumbs as $crumb) {
                                    echo ' <img src=" ' . get_field('breadcrumbs_image') . ' "> ';
                                    echo '<a href="http://localhost/jago-welfare/causes/">' . $crumb . '</a>';
                                }
                                echo '</div>';
                            }
                            ?>
                            </li>
                        <li class="breadcrumb_item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb_item"><img src="assets/img/icon/arrow.png" alt="img"></li>
                        <li class="breadcrumb_item active">Causes</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

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
                    $args = array( 'post_type' => 'trending-causes', 
                                    'posts_per_page' => -1 );
                                    
                    $the_query = new WP_Query( $args ); 
                    ?>
                                <?php if ( $the_query->have_posts() ) : ?>
                                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
                        $featured_img_url = get_the_post_thumbnail_url($post->ID);
						
                        ?>

            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="case_boxed_wrapper">
                    <div class="case_boxed_img">
                        <a href="causes.html"><img src="<?php echo $featured_img_url ; ?>"></a>
                    </div>
                    <div class="causes_boxed_text">
                        <div class="class-full causes_pro_bar progress_bar">
                            <div class="class-full-bar-box">
                                <h3 class="h3-title">Goal: <span>$10,000</span></h3>
                                <div class="class-full-bar-percent">
                                    <h2><span class="counting-data" data-count="85">0</span>
                                        <span>%</span>
                                    </h2>
                                </div>
                                <div class="skill-bar class-bar" data-width="85%">
                                    <div class="skill-bar-inner class-bar-in"></div>
                                </div>
                            </div>
                        </div>
                        <h3><a href="<?php echo the_permalink();?>"> <?php the_title(); ?></a></h3>
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
            
            <?php endwhile; ?>
            <?php endif ;?>
        </div>
    </div>
</section>

<?php
get_sidebar();
get_footer();
?>



<!-- ------------------------------------------------------------------------------------------------------------- -->