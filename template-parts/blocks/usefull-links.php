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
$id = 'usefull-links-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'usefull-links';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


$header = get_field('usefull_links_header');



?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="usefull-links__container">
        <h3>
            <?php echo $header; ?>
        </h3>
        <?php if( have_rows('usefull_links_items') ): ?>
        <?php while( have_rows('usefull_links_items') ): the_row(); ?>
        <div class="usefull-links__item">
            <p><?php echo get_sub_field('usefull_links_name'); ?></p> — <a
            target="_blank"  href="<?php echo get_sub_field('usefull_links_url'); ?>"><?php echo get_sub_field('usefull_links_url_name'); ?></a>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>

</div>