<footer id="footer" role="contentinfo">
    <?php if(is_front_page()):?>
    <section class="newsletter">
        <div class="newsletter__container">


            <div class="newsletter__leftside">
                <h6><?php echo get_field('newsletter_header') ?></h6>
                <p><?php echo get_field('newsletter_text') ?></p>
            </div>
            <div class="newsletter__rightside">
                <?php echo do_shortcode('[newsletter_form button_label="Zapisz się do newslettera"]
                    [newsletter_field name="first_name" label="Twoje imię"]
                    [newsletter_field name="email" label="Twój e-mail"]
                    [/newsletter_form]')?>
            </div>

    </section>

    <style>
    .tnp-field.tnp-field-button::before {
        content: 'Możesz wypisać się w każdym momencie. Zapisując się na mój newsletter akceptujesz politykę prywatności.';
        color: #3A282E;
        font-size: 13px;
    }
    </style>
    <?php endif; ?>


    <section class="footer-menu">
        <div class="footer-menu__container">


            <?php if( get_field('footer_logo', 'option') ): ?>
            <div class="footer__logo">
                <img class="footer__logo-image" src="<?php echo get_field('footer_logo', 'option'); ?>" alt="Logo" />
            </div>
            <?php endif; ?>
            <div class="footer__menu">
                <div class="footer__menu materials">
                    <h5><?php echo __('Materiały')?></h5>
                    <?php    wp_nav_menu([      
                    'menu' => 'footer-menu',
                      'theme_location'    => 'footer-menu',
                      'menu_id'            => 'footer-menu',
                      'menu_class'        => 'footer__menu-ul',
               ]); ?>
                </div>
                <div class="footer__menu manager">
                    <h5><?php echo __('Manager w Pracy')?></h5>
                    <?php    wp_nav_menu([      
                    'menu' => 'footer-menu2',
                      'theme_location'    => 'footer-menu2',
                      'menu_id'            => 'footer-menu2',
                      'menu_class'        => 'footer__menu-ul',
               ]); ?>
                </div>
                <div class="footer__menu listens">
                    <h5><?php echo __('Do posłuchania')?></h5>
                    <?php    wp_nav_menu([      
                    'menu' => 'footer-menu2',
                      'theme_location'    => 'footer-menu3',
                      'menu_id'            => 'footer-menu3',
                      'menu_class'        => 'footer__menu-ul',
               ]); ?>
                </div>
                <div class="footer__menu socials">
                    <h5><?php echo __('Bądźmy w kontakcie')?></h5>
                    <div class="footer__menu-socials">
                        <?php while( have_rows('social_media', 'option') ): the_row(); ?>
                        <a target="_blank" href="<?php echo get_sub_field('social_media_url') ?>">
                            <?php $image =  get_sub_field('social_media_icon') ?>
                            <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" />
                        </a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>

            <div class="footer__copyrights">
                <p> <?php echo __('Copyright 2022 © Manager w Pracy'); ?></p>
                <?php    wp_nav_menu([      
                    'menu' => 'footer-rules',
                      'theme_location'    => 'footer-rules',
                      'menu_id'            => 'footer-rules',
                      'menu_class'        => 'footer__rules-ul',
               ]); ?>
            </div>
        </div>
    </section>

</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>