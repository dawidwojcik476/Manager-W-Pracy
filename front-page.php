<?php get_header(); ?>

<div class="front-background" style="background-image: url(<?php echo get_field('front_banner'); ?>);">
    <div class="front-background__content">
        <div class="front-background__content-text">
            <?php echo get_field('front_banner_text'); ?>
        </div>
        <a class="front-background__content-button" href="<?php echo get_field('front_banner_url'); ?>"><img
                src="<?php echo get_template_directory_uri(); ?>/public/images/present.webp"
                alt="Ikona"><?php echo get_field('front_banner_button'); ?></a>
    </div>
</div>

<section class="front-aboutme">
    <div class="front-aboutme__image">
        <?php $image =  get_field('front_aboutme_image') ?>
        <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    </div>
    <div class="front-aboutme__content">
        <h2> <?php echo get_field('front_aboutme_header') ?></h2>
        <div class="front-aboutme__content-text">
            <?php echo get_field('front_aboutme_content') ?>
        </div>
        <a href="<?php echo get_field('front_aboutme_button_url') ?>"
            class="front-aboutme__content-button"><?php echo get_field('front_aboutme_button') ?></a>
    </div>
</section>
<?php if( have_rows('front_blocks') ): ?>
<section class="front-blocks">
    <div class="front-blocks__container">


        <div class="front-blocks__header">
            <h3><?php echo get_field('front_blocks_header') ?></h3>
            <p><?php echo get_field('front_blocks_header_text') ?></p>
        </div>
        <div class="front-blocks__items">
            <?php while( have_rows('front_blocks') ): the_row(); ?>
            <a class="front-blocks__item" href="<?php echo get_sub_field('front_blocks_url') ?>">
                <?php $image =  get_sub_field('front_blocks_image') ?>
                <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                    alt="<?php echo esc_attr($image['alt']); ?>" />
                <div class="front-blocks__item-text">
                    <p><?php echo get_sub_field('front_blocks_text') ?></p>
                </div>
            </a>
            <?php endwhile; ?>
        </div>
    </div>

</section>
<?php endif; ?>

<?php

$data= new WP_Query(array(
    'post_type' => 'bezplatnematerialy',
    'posts_per_page' => 3,
    'suppress_filters' => false
));?>
<?php if($data->have_posts()) : ?>
<section class="front-blog">
    <div class="front-blog__container">
        <div class="front-blog__header">
            <h2 class="title"><?php the_field('front_front-blog_header');?></h2>
            <p><?php the_field('front_front-blog_text');?></p>
        </div>
        <div class="front-blog__items">
            <?php   
    while($data->have_posts())  : $data->the_post();?>
            <a href="<?php echo get_permalink(); ?>" class="front-blog__item">
                <?php $image =  get_field('post_thumbnail') ?>
                <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                    alt="<?php echo esc_attr($image['alt']); ?>" />
                <div class="front-blog__item-date-cat">
                    <p> <?php the_time( 'd-m-Y' );?></p>
                    <ul>
                        <?php
                  foreach ( get_the_terms( $post->ID, 'kategorie' ) as $cat ) {
                        echo '<li>' . __( $cat->name ) . '</li>';
                        }?>
                    </ul>
                </div>
                <p class="front-blog__title"><?php the_title(); ?></p>

            </a>
            <?php     endwhile; ?>


        </div>

        <a class="front-blog__button" href="/bezplatne-materialy/">
            <?php echo __('Więcej')?></a>






    </div>

</section>
<?php endif; ?>
<?php wp_reset_postdata();?>

<?php

$data= new WP_Query(array(
    'post_type' => 'produkty',
    'posts_per_page' => 3,
    'suppress_filters' => false
));?>
<?php if($data->have_posts()) : ?>
<section class="front-products">


    <div class="front-products__container">
        <div class="front-products__header">
            <h2 class="title"><?php the_field('front_front-products_header');?></h2>
            <p><?php the_field('front_front-products_text');?></p>
        </div>
        <div class="front-products__items">
            <?php   
    while($data->have_posts())  : $data->the_post();?>
            <a href="<?php echo get_permalink(); ?>" class="front-products__item">
                <?php $image =  get_field('post_thumbnail') ?>
                <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                    alt="<?php echo esc_attr($image['alt']); ?>" />

                <p class="front-products__title"><?php the_title(); ?></p>
                <div class="front-products__excerpt"><?php the_excerpt(); ?></div>
                <p class="front-products__button"><?php echo __('Pokaż')?></p>
            </a>
            <?php     endwhile; ?>


        </div>

        <a class="front-products__button-archive" href="<?php echo get_post_type_archive_link( 'produkty' ); ?>">
            <?php echo __('Zobacz wszystkie')?></a>






    </div>

</section>
<?php endif; ?>
<?php wp_reset_postdata();?>

<?php if( have_rows('reviews_blocks') ): ?>

<section class="reviews">
    <div class="reviews__container">
        <div class="reviews__header">
            <h3><?php echo get_field('reviews_header') ?></h3>
            <p><?php echo get_field('reviews_header_text') ?></p>
        </div>
        <div class="reviews__wrapper">
            <div class="reviews__image">
                <?php $image =  get_field('reviews_image') ?>
                <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                    alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
            <div class="reviews__items-container">
                
          
            <div class="reviews__items">
            <?php while( have_rows('reviews_blocks') ): the_row(); ?>
                <div class="reviews__item">
                    <div class="reviews__item-text">
                        <?php echo get_sub_field('reviews_blocks_text') ?>
                    </div>
                    <div class="reviews__item-person">
                        <?php $image =  get_sub_field('reviews_blocks_image') ?>
                        <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                        <div class="reviews__item-person-info">
                            <p class="name">
                                <?php echo get_sub_field('reviews_blocks_name') ?>
                            </p>
                            <p class="position">
                                <?php echo get_sub_field('reviews_blocks_position') ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <div class="reviews__items-dots"></div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>