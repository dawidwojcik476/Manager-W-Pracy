<?php
/*
Template Name:  Do pobrania
Template Post Type: post, page, event
*/?>

<?php get_header(); ?>
<main id="content" role="main">
    <section class="todownload">
        <div class="todownload__postschoice">

            <div class="todownload__postschoice-products">
                <div class="todownload__postschoice-items">
                    <div data-filter="" class="todownload__postschoice-item" id="">
                        <p><?php echo __('Wszystko')?></p>
                    </div>
                    <?php
                           $products = get_terms('typy');
      
                            foreach ($products as  $product) { ?>
                    <div data-filter=".<?php  echo $product->slug; ?>"
                        class="todownload__postschoice-item <?php  echo $product->slug; ?>"
                        id="#<?php  echo $product->slug; ?>">
                        <p><?php echo $product->name; ?></p>

                    </div>
                    <?php  }

                          ?>
                </div>
            </div>

        </div>
        <div class="todownload__posts-container">

            <div class="todownload__posts content grid">

                <?php
                $args = array(
                'post_type' => 'dopobrania',
                'posts_per_page' => -1,
                'suppress_filters' => false,
           
                );

                $query = new WP_Query($args);

                while ($query->have_posts()) {
                $query->the_post();

                $termsproductArray = get_the_terms($post->ID, 'typy');

                $termsSLug = "";
                if (is_array($termsproductArray) || is_object($termsproductArray))
{
    foreach ($termsproductArray as $term) {
        $termsSLug .= $term->slug . ' ';
        }
}
               

                ?>

                <div class="todownload__item-container <?php echo  $termsSLug; ?>  grid-item">
                    <a href="<?php echo get_permalink($query->ID) ?>" class="todownload__item ">
                        <?php $image =  get_field('post_thumbnail') ?>
                        <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />

                        <div class="todownload__item-info">
                            <p class="todownload__title"><?php echo get_the_title();?></p>
                            <p class="todownload__excerpt"><?php echo get_the_excerpt();?></p>

                        </div>


                    </a>
                    <a class="todownload__file" href="<?php echo get_permalink($query->ID) ?> ">
                        <?php  echo __('Pobierz')?><img
                            src="<?php echo get_template_directory_uri(); ?>/public/images/Download.webp"
                            alt="Download"></a>
                </div>

                <?php  }
  wp_reset_postdata();

 ?>
            </div>
        </div>



    </section>


</main>
<script>
const category = '<?php echo $_GET['typ']; ?>';
const categoryToClick = document.querySelector('.todownload__postschoice-item.<?php echo $_GET['typ']; ?>');


function generateOutput() {

    if (category == '<?php echo $_GET['typ']; ?>') {
        categoryToClick.click();
    }
}
window.setTimeout(generateOutput, 400, true);
</script>
<?php get_footer(); ?>