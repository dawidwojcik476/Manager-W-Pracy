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
$id = 'findinside-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'findinside';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


$header = get_field('findinside_header');
$text = get_field('findinside_text');
$image = get_field('findinside_image'); 



?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="findinside__container">
        <h3>
            <?php echo $header; ?>
        </h3>
        <p><?php echo $text; ?></p>
        <?php if($image): ?>
        <div class="findinside__image">
            <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
        <?php endif; ?>
        <div class="findinside__items">
        <?php if( have_rows('findinside_items') ): ?>
        <?php while( have_rows('findinside_items') ): the_row(); ?>
        <div class="findinside__item">
            <?php $icon = get_sub_field('findinside_items_icon');  ?>
            <img src="<?php echo esc_url($icon['sizes']['large']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
            <div class="findinside__item-content">
                <p class="findinside__item-content-title"><?php echo get_sub_field('findinside_items_title'); ?></p>
                <p class="findinside__item-content-text"><?php echo get_sub_field('findinside_items_content'); ?></p>
            </div>

        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>

</div>