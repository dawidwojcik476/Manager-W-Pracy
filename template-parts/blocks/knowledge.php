<?php

/**
 * Wiedza Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'knowledge-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'knowledge';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}



$header = get_field('knowledge_header');


?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="knowledge__container">
        <h3><?php echo $header; ?></h3>
        <div class="knowledge__container-points">
            <?php if( have_rows('knowledge_blocks') ): ?>
            <?php while( have_rows('knowledge_blocks') ): the_row();
            $content = get_sub_field('knowledge_blocks_content');
            $image = get_sub_field('knowledge_blocks_icon'); 
            $choice = get_sub_field('knowledge_blocks_width');?>

            <div class="knowledge__container-point" style="width: <?php echo $choice; ?>">
                <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                    alt="<?php echo esc_attr($image['alt']); ?>" />
                <p><?php echo $content?></p>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

</div>