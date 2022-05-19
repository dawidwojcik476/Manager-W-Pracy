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
$id = 'colors-blocks-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'colors-blocks';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}




?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="colors-blocks__container">
        <?php if( have_rows('color_blocks') ): ?>
        <?php while( have_rows('color_blocks') ): the_row(); ?>
        <div class="colors-blocks__item"
            style="background-color: <?php echo get_sub_field('color_blocks_bg'); ?>; color: <?php echo get_sub_field('color_blocks_color_font'); ?>">
            <style>
            .colors-blocks__item p::before {
                content: '';
               
                width: 8px;
                height: 8px;
                display: block;
                background-color: <?php echo get_sub_field('color_blocks_color_font');
                ?>;
                margin-right: 24px;
                border-radius: 50%;
            }
            </style>
            <h4><?php echo get_sub_field('color_blocks_header'); ?></h4>
            <?php if( have_rows('color_blocks_points') ): ?>
            <?php while( have_rows('color_blocks_points') ): the_row(); ?>
            <p ><?php echo get_sub_field('color_blocks_points_item'); ?></p>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>

</div>