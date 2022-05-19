<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="icon" type="image/png" href="<?php the_field('favicon','option'); ?>" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>
    <div class="app-container">
        <?php if(get_field('topbar_button', 'option')): ?>
        <div class="header__top">
            <?php echo get_field('topbar_text', 'option'); ?> <a href="<?php echo get_field('topbar_url', 'option'); ?>"
                class="header__top-button"><?php echo get_field('topbar_button', 'option'); ?></a>
        </div>
        <?php endif; ?>

        <header class="header" id="header">
            <div class="header__container">
                <div class="header__logo">
                    <a class="header__logo-link" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <?php if( get_field('header_logo', 'option') ): ?>
                        <img class="header__logo-image" src="<?php echo get_field('header_logo', 'option'); ?>"
                            alt="Logo" />
                        <?php endif; ?>

                    </a>
                </div>
                <div class="header__menu-container">


                    <nav class="header__menu <?php the_field('header_font_color_white'); ?>">
                        <?php    wp_nav_menu([      
                    'menu' => 'main-menu',
                      'theme_location'    => 'primary-menu',
                      'menu_id'            => 'primary-menu',
                      'menu_class'        => 'header__menu-ul',
               ]); ?>


                    </nav>
                    <?php if( have_rows('social_media', 'option') ): ?>

                    <div class="header__socials">
                        <?php while( have_rows('social_media', 'option') ): the_row(); ?>
                        <a target="_blank" href="<?php echo get_sub_field('social_media_url') ?>">
                            <?php $image =  get_sub_field('social_media_icon') ?>
                            <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" />
                        </a>
                        <?php endwhile; ?>
                    </div>


                    <?php endif; ?>
                </div>

                <div class="header__ham <?php the_field('header_font_color_white'); ?>">
                    <div class="header__ham-menubtn"></div>
                </div>




        </header>
        <?php if(!is_front_page() && !is_singular('dopobrania') && !is_singular('produkty')): ?>

        <div class="header__banner <?php the_field('background_content_options'); ?> <?php the_field('background_options'); ?>"
            style="<?php if (get_field('background_options') == 'image'):?> background-image: url(<?php the_field('page_background_image') ?>);<?php else:?> background-color: <?php the_field('page_background_color'); ?> <?php endif;?>">
            <div class="header__banner-container page" style="color: <?php the_field('page_font_color'); ?>">
                <h1> <?php if (is_page_template( 'template-newsletter.php' )): echo do_shortcode('[newsletter]'); else: ?> <?php the_field('page_header'); ?> <?php if(!get_field('page_header')) : the_title();?>
                    <?php endif;?>       <?php endif;?></h1>
                <?php if(get_field('page_text_under_header')) :?>
                <div class="content">
                    <?php the_field('page_text_under_header'); ?>
                </div>

                <?php endif;?>
                <?php if(get_field('page_button')) :?>
                <a style="background-color: <?php the_field('page_button_color'); ?>"
                    href="<?php the_field('page_button_url'); ?>"><?php the_field('page_button'); ?></a>
                <?php endif;?>
                <?php if (is_singular('bezplatnematerialy')): ?>
                <div class="post-content">
                    <p><?php the_time( 'd-m-Y' );?></p>
                    <ul>
                        <?php
                  foreach ( get_the_terms( $post->ID, 'kategorie' ) as $cat ) {
                        echo '<li>' . __( $cat->name ) . '</li>';
                        }?>
                    </ul>
                </div>
                <?php endif; ?>
                <?php if (get_field('header_banner_social_media') == 'yes'):?>
                <div class="header__banner-socials">
                    <?php while( have_rows('social_media', 'option') ): the_row(); ?>
                    <a target="_blank" href="<?php echo get_sub_field('social_media_url') ?>">
                        <?php $image =  get_sub_field('social_media_icon') ?>
                        <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    </a>
                    <?php endwhile; ?>
                </div>
                <?php endif;?>
               
            </div>


        </div>

        <?php endif; ?>