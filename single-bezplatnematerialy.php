<?php get_header(); ?>
<main id="content" role="main" class="content-single">
    <div class="content-single__container">
        <?php the_content();?>
    </div>
</main>

<section class="share-post">

    <div class="share-post__container">
        <h4><?php echo __('Podziel się:'); ?></h4>
        <?php echo do_shortcode('[addtoany]'); ?>
    </div>



</section>

<?php

$data= new WP_Query(array(
    'post_type' => 'bezplatnematerialy',
    'posts_per_page' => 3,
    'suppress_filters' => false
));?>
<?php if($data->have_posts()) : ?>
<section class="front-blog single-post">



    <div class="front-blog__container">
        <div class="front-blog__header">
            <h2 class="title"><?php echo __('Ostatnie najciekawsze artykuły')?></h2>
            <p><?php echo __('Większa dawka wiedzy!')?></p>
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

        <a class="front-blog__button" href="<?php echo get_post_type_archive_link( 'bezplatnematerialy' ); ?>">
            <?php echo __('Więcej')?></a>






    </div>

</section>
<?php endif; ?>
<?php wp_reset_postdata();?>
<?php get_footer(); ?>