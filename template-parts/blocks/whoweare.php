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
$id = 'whoweare-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'whoweare';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}



$header = get_field('whoweare_header');
$bgColor= get_field('whoweare_bg_color');
$fontColor= get_field('whoweare_font_color');




?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>"
    style="background-color: <?php echo $bgColor;  ?>!important; color: <?php echo $fontColor;  ?>!important">
    <h3 class="whoweare__header"> <?php echo $header ; ?></h3>

    <div class="whoweare__container ">
        <?php if( have_rows('whoweare_blocks') ): ?>
        <?php while( have_rows('whoweare_blocks') ): the_row(); ?>
        <?php $image = get_sub_field('whoweare_blocks_image'); ?>
        <?php $content = get_sub_field('whoweare_blocks_content'); ?>
        <?php $pageTitle = get_sub_field('whoweare_blocks_page'); ?>
        <?php $pageUrl = get_sub_field('whoweare_blocks_page_url'); ?>
        <?php $pageUrlName = get_sub_field('whoweare_blocks_page_url_name'); ?>
        <div class="whoweare__item <?php echo get_sub_field('whoweare_blocks_side') ?>">

            <?php if ($image):?>
            <div class="whoweare__leftside">
                <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                    alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
            <?php endif;?>
            <div class="whoweare__rightside">
                <div class="whoweare__content">
                    <?php echo $content ?>
                </div>
                <?php if($pageUrl):?>
                <div class="whoweare__page">
                    <p class="whoweare__page-title"><?php echo $pageTitle ?> - </p>
                    <a target="_blank" href="<?php echo $pageUrl; ?>" class="whoweare__page-url"><?php echo $pageUrlName; ?></a>
                </div>
                <?php endif;?>
                <?php if( have_rows('whoweare_blocks_social_media') ): ?>
                <div class="whoweare__socials">
                    <?php while( have_rows('whoweare_blocks_social_media') ): the_row(); ?>
                    <a target="_blank" href="<?php echo get_sub_field('whoweare_blocks_social_media_url') ?>">
                        <?php $image =  get_sub_field('whoweare_blocks_social_media_icon') ?>
                        <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    </a>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>

</div>

<style> 
.whoweare__content h2{
    color: <?php echo $fontColor;  ?>!important;
}
</style>