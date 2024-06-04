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
/*Template Name: News*/
get_header();
?>

 <!-- Banner Area -->
 <section id="common_banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="commn_banner_page">
                        <h2><span class="color_big_heading">News</span></h2>
                        <ul class="breadcrumb_wrapper">
                        <li> <?php
                            $breadcrumb = get_field('breadcrumbs');
                            if ($breadcrumb) {
                                $breadcrumbs = explode(' > ', $breadcrumb);
                                echo '<div class="breadcrumbs breadcrumb_item">';
                                echo '<a href="' . get_home_url() . '">Home</a>';
                                foreach ($breadcrumbs as $crumb) {
                                    echo ' <img src=" ' . get_field('breadcrumbs_image') . ' "> ';
                                    echo '<a href="http://localhost/jago-welfare/news/">' . $crumb . '</a>';
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

    <!-- News Area -->
    <section id="main_blog_area" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="section_heading">
                        <h3><?php the_field('latest_news_heading', 'options'); ?></h3>
                        <?php the_field('latest_news_sub_heading', 'options'); ?>
                    </div>
                </div>
            </div>
            <div class="row">
           
                <div class="col-lg-4">
                    <?php 
                        $args = array( 'post_type' => 'trending-causes', 
                                        'posts_per_page' => 1 );
                                        
                        $the_query = new WP_Query( $args ); 
                        ?>
                                    <?php if ( $the_query->have_posts() ) : ?>
                                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
                            $featured_img_url = get_the_post_thumbnail_url($post->ID);
                            
                            ?>
                    <div class="blog_card_wrapper">
                        <div class="blog_card_img">
                            <a href="news-details.html"><img src="<?php echo $featured_img_url ; ?>" alt="img"></a>
                        </div>
                        <div class="blog_card_text">
                            <div class="blog_card_tags">
                                <a href="news-details.html"><?php the_category(''); ?></a>
                            </div>
                            <div class="blog_card_heading">
                                <h3><a href="<?php echo the_permalink();?>"> <?php the_title(); ?></a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod...</p>
                            </div>
                            <div class="blog_boxed_bottom_wrapper">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="blog_bottom_boxed">
                                            <div class="blog_bottom_icon">
                                                <img src="<?php the_field('date_image'); ?>" alt="icon">
                                            </div>
                                            <div class="blog_bottom_content">
                                                <h5>Date:</h5>
                                                <p>20 Dec, 2021</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="blog_bottom_boxed blog_left_padding">
                                            <div class="blog_bottom_icon">
                                                <img src="<?php the_field('admin_image'); ?>" alt="icon">
                                            </div>
                                            <div class="blog_bottom_content">
                                                <h5>By:</h5>
                                                <p>Admin</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php 
                    $args = array( 'post_type' => 'upcoming-events', 
                                    'posts_per_page' => 1 );
                                    
                    $the_query = new WP_Query( $args ); 
                    ?>
                                <?php if ( $the_query->have_posts() ) : ?>
                                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
                        $featured_img_url = get_the_post_thumbnail_url($post->ID);
						
                        ?>
                    <div class="blog_two_wrapper mt-30">
                        <a href="news-details.html"><img src="<?php echo $featured_img_url ; ?>" alt="img"></a>
                        <div class="news_two_text">
                            <a href="news-details.html"><?php the_category(''); ?></a>
                            <h3><a href="news-details.html">“Work for food” programme for
                                    the elder people</a></h3>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                
                <div class="col-lg-4">
                <?php 
                    $args = array( 'post_type' => 'latest-news', 
                                    'posts_per_page' => 1 );
                                    
                    $the_query = new WP_Query( $args ); 
                    ?>
                                <?php if ( $the_query->have_posts() ) : ?>
                                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
                        $featured_img_url = get_the_post_thumbnail_url($post->ID);
						
                        ?>
                    <div class="blog_two_wrapper">
                        <a href="news-details.html"><img src="<?php echo $featured_img_url ; ?>" alt="img"></a>
                        <div class="news_two_text">
                            <a href="news-details.html">#WomenRights</a>
                            <h3><a href="<?php echo the_permalink();?>"> <?php the_title(); ?></h3>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>

                    <?php 
                    $args = array( 'post_type' => 'trending-causes', 
                                    'posts_per_page' => 1,
                                    'order' => 'ASC'
                                 );
                                    
                    $the_query = new WP_Query( $args ); 
                    ?>
                                <?php if ( $the_query->have_posts() ) : ?>
                                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
                        $featured_img_url = get_the_post_thumbnail_url($post->ID);
						
                        ?>
                    <div class="blog_card_wrapper mt-30">
                        <div class="blog_card_img">
                            <a href="news-details.html"><img src="<?php echo $featured_img_url ; ?>"></a>
                        </div>
                        <div class="blog_card_text">
                            <div class="blog_card_tags">
                                <a href="news.html">#Habitation</a>
                            </div>
                            <div class="blog_card_heading">
                                <h3><a href="<?php echo the_permalink();?>"> <?php the_title(); ?></a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod...</p>
                            </div>
                            <div class="blog_boxed_bottom_wrapper ">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="blog_bottom_boxed">
                                            <div class="blog_bottom_icon">
                                                <img src="<?php the_field('date_image'); ?>" alt="icon">
                                            </div>
                                            <div class="blog_bottom_content">
                                                <h5>Date:</h5>
                                                <p>20 Dec, 2021</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="blog_bottom_boxed blog_left_padding">
                                            <div class="blog_bottom_icon">
                                                <img src="<?php the_field('admin_image'); ?>" alt="icon">
                                            </div>
                                            <div class="blog_bottom_content">
                                                <h5>By:</h5>
                                                <p>Admin</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>

                    <?php 
                    $args = array( 'post_type' => 'latest-news', 
                                    'posts_per_page' => 1 );
                                    
                    $the_query = new WP_Query( $args ); 
                    ?>
                                <?php if ( $the_query->have_posts() ) : ?>
                                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
                        $featured_img_url = get_the_post_thumbnail_url($post->ID);
						
                        ?>
                    <div class="blog_two_wrapper mt-30">
                        <a href="news-details.html"><img src="<?php echo $featured_img_url ; ?>" alt="img"></a>
                        <div class="news_two_text">
                            <a href="news-details.html">#Education</a>
                            <h3><a href="news-details.html">Give children a good education
                                    & better life</a></h3>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
               
                <div class="col-lg-4">
                    <?php 
                        $args = array( 'post_type' => 'trending-causes', 
                                        'posts_per_page' => 1 );
                                        
                        $the_query = new WP_Query( $args ); 
                        ?>
                                    <?php if ( $the_query->have_posts() ) : ?>
                                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
                            $featured_img_url = get_the_post_thumbnail_url($post->ID);
                            
                            ?>
                    <div class="blog_card_wrapper">
                        <div class="blog_card_img">
                            <a href="news-details.html"><img src="<?php echo $featured_img_url ; ?>" alt="img"></a>
                        </div>
                        <div class="blog_card_text">
                            <div class="blog_card_tags">
                                <a href="news-details.html"><?php the_category(''); ?></a>
                            </div>
                            <div class="blog_card_heading">
                                <h3><a href="<?php echo the_permalink();?>"> <?php the_title(); ?></a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod...</p>
                            </div>
                            <div class="blog_boxed_bottom_wrapper">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="blog_bottom_boxed">
                                            <div class="blog_bottom_icon">
                                                <img src="<?php the_field('date_image'); ?>" alt="icon">
                                            </div>
                                            <div class="blog_bottom_content">
                                                <h5>Date:</h5>
                                                <p>20 Dec, 2021</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="blog_bottom_boxed blog_left_padding">
                                            <div class="blog_bottom_icon">
                                                <img src="<?php the_field('admin_image'); ?>" alt="icon">
                                            </div>
                                            <div class="blog_bottom_content">
                                                <h5>By:</h5>
                                                <p>Admin</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php 
                    $args = array( 'post_type' => 'upcoming-events', 
                                    'posts_per_page' => 1 );
                                    
                    $the_query = new WP_Query( $args ); 
                    ?>
                                <?php if ( $the_query->have_posts() ) : ?>
                                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
                        $featured_img_url = get_the_post_thumbnail_url($post->ID);
						
                        ?>
                    <div class="blog_two_wrapper mt-30">
                        <a href="news-details.html"><img src="<?php echo $featured_img_url ; ?>" alt="img"></a>
                        <div class="news_two_text">
                            <a href="news-details.html"><?php the_category(''); ?></a>
                            <h3><a href="news-details.html">“Work for food” programme for
                                    the elder people</a></h3>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>

            </div>
        </div>

    </section>


<?php get_footer();?>