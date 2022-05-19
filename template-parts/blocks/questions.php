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
$id = 'questions-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'questions';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


$header = get_field('questions_header');
$text = get_field('questions_text');



?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="questions__container">
        <h3 class="questions__header">
            <?php echo $header; ?>
        </h3>
        <p class="questions__text"> <?php echo $text; ?></p>
        <?php if( have_rows('questions_items') ): ?>
        <?php while( have_rows('questions_items') ): the_row(); ?>
        <div class="questions__item">
            <p class="questions__item-question"><?php echo get_sub_field('questions_items_question');?></p>
            <p class="questions__item-answer"><?php echo get_sub_field('questions_items_answer');?></p>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>

</div>