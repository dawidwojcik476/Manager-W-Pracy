<?php

/**
 * PDF generator Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'pdf-generator-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'pdf-generator';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


$image = get_field('pdf_icon');
$text = get_field('pdf_text');
$button = get_field('pdf_button');
$file = get_field('pdf_file');


?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="pdf-generator__container">
        <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <p><?php echo $text ;?></p>
        <?php if( $file ): ?>
        <a download href="<?php echo $file; ?>"><img
                src="<?php echo get_template_directory_uri(); ?>/public/images/Download.webp"
                alt="Download"><?php echo $button; ?></a>
        <?php endif; ?>

    </div>

</div>