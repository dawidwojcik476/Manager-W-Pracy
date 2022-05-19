<?php

/**
 * Podsumowanie Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'summary-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'summary-block-';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


$header= get_field('summary_header');
$image = get_field('summary_image');



?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="summary-block__container">
        <h2><?php echo $header; ?></h2>

        <?php if($image):?>
        <div class="summary-block__image">
            <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>

        <?php endif; ?>
        <?php if( have_rows('summary_points') ): ?>

        <div class="summary-block__points">
            <?php while( have_rows('summary_points') ): the_row(); ?>
            <p><?php echo get_sub_field('summary_points_item'); ?></p>
            <?php endwhile; ?>

        </div>
        <?php endif; ?>

    </div>

</div>