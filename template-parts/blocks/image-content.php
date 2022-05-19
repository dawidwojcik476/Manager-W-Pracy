<?php

/**
 * Zdjęcie i treść Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'image-content-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'image-content';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


$choice = get_field('image_content_side');
$image = get_field('image_content_image');
$content = get_field('image_content_content');
$socials = get_field('image_content_socials');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="image-content__container <?php echo $choice; ?>">
        <?php if ($image):?>
        <div class="image-content__leftside">
        <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                    alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
        <?php endif;?>
        <div class="image-content__rightside">
            <?php echo $content ?>
            <?php if ($socials == 'yes'): ?>
            <div class="image-content__socials">
                <?php while( have_rows('social_media', 'option') ): the_row(); ?>
                <a target="_blank" href="<?php echo get_sub_field('social_media_url') ?>">
                    <?php $image =  get_sub_field('social_media_icon') ?>
                    <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>

</div>