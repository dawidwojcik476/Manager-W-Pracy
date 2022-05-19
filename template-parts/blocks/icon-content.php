<?php

/**
 * Ikona z treścią Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'icon-content-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'icon-content';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


$image = get_field('icon_content_icon');
$header = get_field('icon_content_header');
$content = get_field('icon_content_content');
$button = get_field('icon_content_button');
$buttonUrl = get_field('icon_content_button_url');


?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="icon-content__container">
        <div class="icon-content__leftside">
        <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                    alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
        <div class="icon-content__rightside">
            <h3><?php echo $header ?></h3>
            <p><?php echo $content ?></p>
            <a href="<?php echo $buttonUrl ?>"><?php echo $button ?></a>
        </div>
    </div>

</div>