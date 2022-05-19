<?php
/*
Template Name:  Zwykły produkt
Template Post Type: produkty
*/?>

<?php get_header(); ?>


<main id="content" role="main" class="product content">
    <a class="backtopage" href="/sklep"><img
            src="<?php echo get_template_directory_uri(); ?>/public/images/Arrow-Right.webp" alt="Download">
        <?php echo __('Sklep'); ?></a>

    <div class="product__container">
        <?php     $imagesArray = get_field('product__gallery');
                         if( $imagesArray ): ?>
        <div class="product__container-leftside">
            <div class="product__gallery">

                <ul>
                    <?php     if (is_array($imagesArray) || is_object($imagesArray)):?>
                    <?php foreach( $imagesArray as $image ): ?>
                    <li class="product__gallery-item">
                        <a href="<?php echo esc_url($image['url']); ?>"
                            data-title="<?php echo esc_html($image['caption']); ?>" data-lightbox="roadtrip">
                            <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" />

                        </a>

                    </li>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </ul>


            </div>
        </div>
        <?php endif; ?>
        <div class="product__container-rightside">
            <div class="product__firstblock">
                <h1><?php the_title(); ?></h1>
                <div class="product__firstblock-descript"><?php echo get_field('product_descript')?></div>
                <div
                    class="product__firstblock-price  <?php if (get_field('product_promo_price')): ?>promo<?php endif;?>">
                    <p class="product__firstblock-price-normal">
                        <?php echo get_field('product_price') ?> PLN
                    </p><?php if (get_field('product_promo_price')): ?>
                    <p class="product__firstblock-price-promo"> <?php echo get_field('product_promo_price') ?> PLN</p>
                    <?php endif;?>
                </div>

                <a class="product__button" href="<?php echo get_field('product_url')?>">Kup teraz</a>

            </div>

            <div class="product__ndblock">
                <?php echo get_field('product_details')?>


                <a class="product__button" href=" <?php echo get_field('product_url') ?>">Kup teraz</a>

            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>