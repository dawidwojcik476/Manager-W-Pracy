<?php
/*
Template Name:  Kontakt
Template Post Type: post, page, event
*/?>

<?php get_header(); ?>
<?php $image = get_field('contact_page_image');   ?>
<main id="content" role="main" class="contact">
    <div class="contact__container">
        <?php if ($image): ?>
        <div class="contact__leftside">

            <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
        <?php endif; ?>
        <div class="contact__rightside">

            <?php $contact = get_field('contact_page_contact_form_shortcode'); ?>
            <?php echo do_shortcode(" $contact ");?>


        </div>
    </div>
</main>

<?php get_footer(); ?>