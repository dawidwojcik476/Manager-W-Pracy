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
$id = 'newsletter-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'newsletter';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$header = get_field('newsletter_page_header');
$content= get_field('newsletter_page_text');
$contact = get_field('newsletter_page_shortcode');


?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="newsletter-block__container">
        <div class="newsletter-block__topside">
            <h3><?php echo $header; ?></h3>
            <p><?php echo $content; ?></p>
           
        </div>
        <div class="newsletter-block__form">

<?php echo do_shortcode("$contact");?>
</div>
        <style>
    .tnp-field.tnp-field-button::before {
        content: 'Możesz wypisać się w każdym momencie. Zapisując się na mój newsletter akceptujesz politykę prywatności.';
        color: #3A282E;
        font-size: 13px;
    }
    </style>
    </div>