<?php

/**
 * Żółty przerywnik Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'pakiety-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'pakiety';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$header = get_field('pakiety_header');




?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="pakiety__container">
        <h2> <?php echo $header; ?></h2>
        <div class="pakiety__items">


            <?php if( have_rows('pakiety_points') ): ?>
            <?php while( have_rows('pakiety_points') ): the_row(); ?>


            <p> <?php echo get_sub_field('pakiety_points_item'); ?></p>

            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

</div>