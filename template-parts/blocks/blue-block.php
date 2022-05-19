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
$id = 'blue-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'blue-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


$image = get_field('blue_block_image');
$header = get_field('blue_block_header');
$text = get_field('blue_block_text');
$button = get_field('blue_block_button');
$buttonUrl = get_field('blue_block_button_url');


?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="blue-block__container">
        <?php if($image):?>
        <div class="blue-block__leftside">
            <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
        <?php endif; ?>
        <div class="blue-block__rightside">
            <h2><?php echo $header; ?></h2>
            <p><?php echo $text; ?></p>
            <a href="<?php echo $buttonUrl; ?>"><?php echo $button; ?></a>
        </div>


    </div>

</div>