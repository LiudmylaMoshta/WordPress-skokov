<?php wp_footer(); ?>


<footer id="footer" class="container-fluid">
    <div class="container">
        <ul class="row row-footer-skokov">
            <?php if (is_active_sidebar('footer1_about_us')) : ?>
                <li id="footer1_about_us" class="col-md-4 col-skokov-about">
                    <?php dynamic_sidebar('footer1_about_us'); ?>
                </li>
            <?php endif; ?>

            <?php if (is_active_sidebar('footer2_twitter')) : ?>
                <li id="footer2_twitter" class="col-md-4 col-skokov-tweets">
                    <?php dynamic_sidebar('footer2_twitter'); ?>
                </li>
            <?php endif; ?>

            <li class="col-md-4 col-skokov-contact">
                <h3 class="title-footer">Contact info</h3>
                <address class="address-skokov">
                    <dl>
                        <dt>
                            <span class="fa fa-map-marker icon-footer-skokov" aria-hidden="true"></span>
                            Address:
                        </dt>
                        <dd><?php echo get_theme_mod('contact_address'); ?></dd>
                    </dl>
                    <dl>
                        <dt>
                            <span class="fa fa-whatsapp icon-footer-skokov" aria-hidden="true"></span>
                            Phone:
                        </dt>
                        <dd>
                            <a href="#" class="dd-tel">
                                <a href="tel:<?php echo get_theme_mod('contact_tel'); ?>"><?php echo get_theme_mod('contact_tel'); ?></a>
                                <a href="tel:<?php echo get_theme_mod('contact_tel2'); ?>"><?php echo get_theme_mod('contact_tel2'); ?></a>
                            </a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                            <i class="fa fa-envelope icon-footer-skokov" aria-hidden="true"></i>
                            E-mail:
                        </dt>
                        <dd>
                            <a href="mailto:<?php echo get_theme_mod('contact_mail'); ?>" class="dd-email">
                                <?php echo get_theme_mod('contact_mail'); ?>
                            </a>
                        </dd>
                    </dl>
                </address>
                <form class="form-skokov"
                      action="http://vk.us14.list-manage.com/subscribe/post?u=04b1bc4222eb5bbecab4a45d4&amp;id=4d848524da"
                      method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank"
                      novalidate>
                    <?php if (is_active_sidebar('footer3_mailchimp')) : ?>
                        <div id="footer3_mailchimp">
                            <?php dynamic_sidebar('footer3_mailchimp'); ?>
                        </div>
                    <?php endif; ?>
                </form>
            </li>
        </ul>
    </div>
    <nav class="navbar navbar-inverse navbar-skokov-bottom">
        <div class="container">
            <div class="row">
                <span class="col-sm-4 footer-autor">
                Copyright 2013 - FreeForWebDesign.com - All Rights Reserved
            </span>
                <?php wp_nav_menu(array(
                    'theme_location' => 'menu1',
                    'menu_class'     => 'nav navbar-nav navbar-right navbar-right-fotter',
                )); ?>
            </div>
        </div>
    </nav>
</footer>

</body>
</html>
