<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jago-welfare
 */

?>
<!-- Subscribe Area -->
<section id="subscribe_area">
    <div class="container">
        <div class="subscribe_wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="subscribe_text">
                        <p><?php the_field('newsletter_heading', 'options'); ?></p>
                        <?php the_field('news_letter_sub_heading', 'options'); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cta_right_side">
                        <form
                            action="https://gmail.us21.list-manage.com/subscribe/post?u=569f15492b7f5adc1ab3006ff&amp;id=182fc79510&amp;f_id=006155e1f0"
                            method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                            class="validate" target="_blank" novalidate id="subscribe_form">
                            <div class="input-group">
                                <?php echo do_shortcode('[mc4wp_form id=359]'); ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Area -->
<footer id="footer_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="footer_area_about">
                    <img src="<?php the_field('site_logo','options'); ?>" alt="img">
                    <p><?php the_field('site_details','options');?></p>
                    <?php the_field('address_','options'); ?>
                    <?php the_field('phone','options'); ?>
                    <?php the_field('email_area','options'); ?>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                <div class="footer_navitem_ara">
                    <h3><?php the_field('quick_link_heading', 'options'); ?></h3>
                    <div class="nav_item_footer">
                        <ul>
                            <?php if( have_rows('quick_links', 'options') ): ?>
                            <?php while( have_rows('quick_links', 'options') ): the_row(); 
                                   
                                    ?>
                            <?php 
                            $link = get_sub_field('quick_link_footer', 'options');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                            <li><a class="button footer-links" href="<?php echo esc_url( $link_url ); ?>"
                                    target="<?php echo esc_attr( $link_target ); ?>">
                                    <?php echo esc_html( $link_title ); ?>
                                </a></li>
                            <?php endif; ?>
                            <?php endwhile;?>
                            <?php endif;?>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                <div class="footer_navitem_ara">
                    <h3><?php the_field('support_heading','option'); ?></h3>
                    <div class="nav_item_footer">
                        <ul>
                            <?php if( have_rows('support_links', 'options') ): ?>
                            <?php while( have_rows('support_links', 'options') ): the_row(); 
                                   
                                    ?>
                            <?php 
                            $link = get_sub_field('support_link_footer', 'options');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                            <li><a class="button footer-links" href="<?php echo esc_url( $link_url ); ?>"
                                    target="<?php echo esc_attr( $link_target ); ?>">
                                    <?php echo esc_html( $link_title ); ?>
                                </a></li>
                            <?php endif; ?>
                            <?php endwhile;?>
                            <?php endif;?>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="footer_navitem_ara">
                    <h3><?php the_field('latest_tweet_heading', 'options'); ?></h3>
                    <div class="footer_twitter_area">
                        <a href="#!" class="footer_twit_title"><i class="fab fa-twitter"></i> #digitalmarketing</a>
                        <p><?php the_field('latest_footer_detail','options'); ?></p>
                        <a href="#!" class="footer_twit_two"><?php the_field('footer_tweet');?></a>
                        <h6>December 13, 2021 04:20 PM</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Copyright Area -->
<div class="copyright_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="co-lg-6 col-md-6 col-sm-12 col-12">
                <div class="copyright_left">
                    <p>Copyright © 2022 All Rights Reserved</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <ul class="copyright_right">
                    <?php if( have_rows('social_media_icons','options') ): ?>
                    <?php while( have_rows('social_media_icons', 'options') ): the_row(); 
                                    $image = get_sub_field('social_media_images', 'options');
                                    ?>
                    <li>
                        <a href="#!"><img src="<?php the_sub_field('social_media_images', 'options'); ?>">
                                </a>
                    </li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- Top To Bottom Area -->
<div class="go-top">
    <i class="fas fa-chevron-up"></i>
    <i class="fas fa-chevron-up"></i>
</div>


<!-- Mirrored from andit.co/projects/html/jago-welfare/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 May 2023 05:06:29 GMT -->

<?php wp_footer(); ?>

</body>

</html>