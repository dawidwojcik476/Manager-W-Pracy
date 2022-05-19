<?php
/*
Template Name:  Sklep
Template Post Type: post, page, event
*/?>

<?php get_header(); ?>
<main id="content" role="main">

    <?php

$data= new WP_Query(array(
    'post_type' => 'produkty',
    'posts_per_page' => -1,
    'suppress_filters' => false
));?>

    <section class="shop">


        <div class="shop__container">
            <div class="shop__header">
                <h2 class="title"><?php the_field('front_shop_header');?></h2>
                <p><?php the_field('front_shop_text');?></p>
            </div>
            <div class="shop__items">
                <?php   
    while($data->have_posts())  : $data->the_post();?>
                <a href="<?php echo get_permalink(); ?>"
                    class="shop__item <?php if (get_field('product_promo_price')): ?>promo<?php endif;?>">
                    <p class="shop__promo">Wyprzedaż</p>
                    <?php $image =  get_field('post_thumbnail') ?>
                    <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />

                    <p class="shop__title"><?php the_title(); ?></p>
                    <div class="shop__excerpt"><?php the_excerpt(); ?></div>
                    <div class="shop__price <?php if (get_field('product_promo_price')): ?>promo<?php endif;?>">
                        <p class="shop__price-normal">
                            <?php echo get_field('product_price') ?> PLN
                        </p><?php if (get_field('product_promo_price')): ?>
                        <p class="shop__price-promo"> <?php echo get_field('product_promo_price') ?> PLN</p>
                        <?php endif;?>
                    </div>
                    <p class="shop__button"><?php echo __('Kup teraz')?></p>
                </a>
                <?php     endwhile; ?>


            </div>



        </div>

    </section>



</main>

<?php get_footer(); ?>