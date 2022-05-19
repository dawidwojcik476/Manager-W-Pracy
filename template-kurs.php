<?php
/*
Template Name:  Kurs
Template Post Type: produkty
*/?>

<?php get_header(); ?>
<section class="header__bannerkurs">
    <div class="header__bannerkurs-container <?php if(!get_field('kurs_banner_video')):?> novideo <?php endif; ?>">

        <?php if(get_field('kurs_banner_video')):?>

        <div class="header__bannerkurs-leftside">
            <?php the_field('kurs_banner_video')?>
        </div>
        <?php endif; ?>
        <div class="header__bannerkurs-rightside">
            <h1><?php the_field('kurs_banner_header')?></h1>
            <p><?php the_field('kurs_banner_text')?></p>
            <a href="<?php the_field('kurs_banner_url')?>"><?php the_field('kurs_banner_button')?></a>
        </div>
    </div>
</section>
<main id="content" role="main" class="content">


    <div class="content__container">
    <?php the_content();?>
    </div>


</main>

<?php get_footer(); ?>