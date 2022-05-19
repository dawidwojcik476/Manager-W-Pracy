<?php

/**
 * Bloczki O mnie Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'aboutme-blocks-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'aboutme-blocks';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}





?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="aboutme-blocks__container ">
        <?php echo $content; ?>
        <?php if( have_rows('aboutme_blocks') ): ?>
        <?php while( have_rows('aboutme_blocks') ): the_row();
        $image = get_sub_field('aboutme_blocks_icon');
        $content = get_sub_field('aboutme_blocks_text');
        $url = get_sub_field('aboutme_blocks_url');?>

        <a href="<?php echo $url ?>" class="aboutme-blocks__item">
            <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <div class="aboutme-blocks__item-content">
                <p><?php echo $content ?></p>
            </div>
        </a>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>

</div>