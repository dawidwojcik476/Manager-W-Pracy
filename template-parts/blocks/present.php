<?php

/**
 * Prezent Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'present-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'present';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


$header = get_field('present_header');
$image= get_field('present_image');
$title = get_field('present_title');
$titleButton = get_field('present_button_title');
$file = get_field('present_file');



?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="present__container">
        <h3>
            <?php echo $header; ?>
        </h3>
        <div class="present__wrapper">
            <div class="present__leftside">
                <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                    alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
            <div class="present__rightside">
                <p> <?php echo $title; ?></p>
                <?php if( $file ): ?>
                <a download href="<?php echo $file ?>"><img src="<?php echo get_template_directory_uri(); ?>/public/images/Download.webp"
                    alt="Download"><?php echo $titleButton ?></a>
                <?php endif; ?>
            </div>
        </div>

    </div>

</div>