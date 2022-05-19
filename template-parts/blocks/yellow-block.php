<?php

/**
 * Żółty bloczek Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'yellow-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'yellow-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


$price = get_field('yellow_block_price');
$header = get_field('yellow_block_header');
$text = get_field('yellow_block_text');
$textUppendButton = get_field('yellow_block_text_uppend_button');
$button = get_field('yellow_block_button');
$buttonUrl = get_field('yellow_block_button_url');


?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="yellow-block__container">
        <h2><?php echo $header; ?></h2>
        <p class="yellow-block__price">
        <?php echo $price; ?>
        </p>
        <p class="yellow-block__text">
        <?php echo $text; ?>
        </p>
        <p class="yellow-block__textButton">
        <?php echo $textUppendButton; ?>
        </p>
        <a href="<?php echo $buttonUrl;?>"><?php echo $button;?></a>
    </div>

</div>