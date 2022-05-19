<?php
/*
Template Name:  Bezpłatne materiały
Template Post Type: post, page, event
*/?>


<?php get_header(); ?>
<main id="content" role="main">
    <section class="materials">
        <div class="materials__postschoice">

            <div class="materials__postschoice-products">
                <div class="materials__postschoice-header">
                    <h3><?php echo __('Kategorie')?></h3>
                </div>
                <div class="materials__postschoice-items">
                    <div data-filter="" class="materials__postschoice-item" id="">
                        <p><?php echo __('Wszystko')?></p>
                    </div>
                    <?php
                           $products = get_terms('kategorie');
      
                            foreach ($products as  $product) { ?>
                    <div data-filter=".<?php  echo $product->slug; ?>"
                        class="materials__postschoice-item <?php  echo $product->slug; ?>"
                        id="#<?php  echo $product->slug; ?>">
                        <p><?php echo $product->name; ?></p>

                    </div>
                    <?php  }

                          ?>
                </div>
            </div>
            <div class="materials__postschoice-products">
                <div class="materials__postschoice-header">
                    <h3><?php echo __('Social media')?></h3>
                </div>
                <div class="materials__postschoice-items socials">
                <?php while( have_rows('social_media', 'option') ): the_row(); ?>
                        <a target="_blank" href="<?php echo get_sub_field('social_media_url') ?>">
                            <?php $image =  get_sub_field('social_media_icon') ?>
                            <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" />
                        </a>
                        <?php endwhile; ?>
                </div>
            </div>
        </div>
        <div class="materials__posts-container">

            <div class="materials__posts content grid">

                <?php
                $args = array(
                'post_type' => 'bezplatnematerialy',
                'posts_per_page' => -1,
                'suppress_filters' => false,
           
                );

                $query = new WP_Query($args);

                while ($query->have_posts()) {
                $query->the_post();

                $termsproductArray = get_the_terms($post->ID, 'kategorie');

                $termsSLug = "";
                foreach ($termsproductArray as $term) {
                $termsSLug .= $term->slug . ' ';
                }

                ?>


                <a href="<?php echo get_permalink($query->ID) ?>"
                    class="front-blog__item blog <?php echo  $termsSLug; ?>  grid-item">
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
                    <p class="front-blog__title"><?php echo get_the_title();?></p>

                </a>
                <?php  }
  wp_reset_postdata();

 ?>
            </div>
        </div>



    </section>


</main>
<script>
const category = '<?php echo $_GET['kategoria']; ?>';
const categoryToClick = document.querySelector('.materials__postschoice-item.<?php echo $_GET['kategoria']; ?>');


function generateOutput() {

    if (category == '<?php echo $_GET['kategoria']; ?>') {
        categoryToClick.click();
    }
}
window.setTimeout(generateOutput, 400, true);
</script>
<?php get_footer(); ?>