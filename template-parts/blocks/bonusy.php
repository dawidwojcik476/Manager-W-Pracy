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
$id = 'bonusy-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'bonusy';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


$header = get_field('bonusy_header');
$underHeader = get_field('bonusy_text_under_header');
$underBonusy= get_field('bonusy_text_upper_case');




?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="bonusy__container">
        <div class="bonusy__header">
            <h3 class="bonusy__header-title">
                <?php echo $header; ?>
            </h3>
            <p class="bonusy__header-text"> <?php echo $underHeader; ?></p>
            <p class="bonusy__header-underbonuses"> <?php echo $underBonusy; ?></p>
        </div>
        <div class="bonusy__items">


            <?php if( have_rows('bonusy_items') ): ?>
            <?php while( have_rows('bonusy_items') ): the_row(); ?>
            <div class="bonusy__item">
                <p class="bonusy__item-order"><?php echo get_sub_field('bonusy_items_order'); ?></p>
                <h2 class="bonusy__item-header"><?php echo get_sub_field('bonusy_items_header'); ?></h2>
                <div class="bonusy__item-image">
                    <?php $image =  get_sub_field('bonusy_items_image') ?>
                    <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
                <p class="bonusy__item-descript"><?php echo get_sub_field('bonusy_items_descript'); ?></p>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

</div>