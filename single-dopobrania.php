<?php get_header(); ?>


<main id="content" role="main" class="single-dopobrania content">
<a class="backtopage" href="/do-pobrania"><img src="<?php echo get_template_directory_uri(); ?>/public/images/Arrow-Right.webp"
        alt="Download"> <?php echo __('Do pobrania'); ?></a>
    <div class="single-dopobrania__container">
        <section class="single-dopobrania__container-leftside">
            <?php $image= get_field('todownload_file_image'); ?>
            <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        </section>
        <section class="single-dopobrania__container-rightside">
            <div class="single-dopobrania__container-content">
                <?php the_content(); ?>

            </div>
            <div class="single-dopobrania__container-newsletter">
                <?php echo do_shortcode('[newsletter_form button_label="Zapisz się do newslettera i pobierz"]
                    [newsletter_field name="first_name" label="Twoje imię"]
                    [newsletter_field name="email" label="Twój e-mail"]
                    [newsletter_field name="privacy"]
                    [/newsletter_form]')?>

            </div>
        </section>
    </div>
</main>

<script>
const submitForm = document
    .querySelector(".tnp-subscription");

submitForm.name = "newsletter";



$('.tnp-subscription').submit(function(e) {
    e.preventDefault();



    // Creating the element anchor that
    // will download pdf
    let element = document.createElement("a");
    element.href = "<?php the_field('todownload_file_download')?>";
    element.download = "<?php the_field('todownload_file_download')?>";

    // Adding the element to body
    document.documentElement.appendChild(element);

    // Above code is equivalent to
    // <a href="path of file" download="file name"> 

    // onClick property, to trigger download
    element.click();

    // Removing the element from body
    document.documentElement.removeChild(element);

    // onClick property, to trigger submit form


    submitForm.submit();
});
</script>
<?php get_footer(); ?>