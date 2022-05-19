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
$id = 'block-points-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block-points';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


$header= get_field('point_block_header');
$image = get_field('point_block_image');



?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="block-points__container">
        <?php if ($header): ?>
        <h2> <?php echo $header; ?></h2>
        <?php endif; ?>
        <?php if ($image): ?>
        <div class="block-points__image">
            <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
        <?php endif; ?>
        <?php if( have_rows('point_blocks_items') ): ?>

        <div class="block-points__items">
            <?php while( have_rows('point_blocks_items') ): the_row();?>
            <div class="block-points__item">
                <div class="block-points__item-header">
                    <?php $icon = get_sub_field('point_blocks_items_icon'); ?>
                    <img src="<?php echo esc_url($icon['sizes']['large']); ?>"
                        alt="<?php echo esc_attr($icon['alt']); ?>" />
                    <h5><?php echo get_sub_field('point_blocks_items_header'); ?></h5>
                </div>
                <?php if( have_rows('point_blocks_items_list') ): ?>
                <div class="block-points__item-list">
                <?php while( have_rows('point_blocks_items_list') ): the_row();?>
                    <p><?php echo get_sub_field('point_blocks_items_list_point'); ?></p>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>

            </div>

            <?php endwhile; ?>

        </div>
        <?php endif; ?>
    </div>

</div>