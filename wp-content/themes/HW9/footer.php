<?php wp_footer(); ?>


<footer id="footer" class="container-fluid">
    <div class="container">
        <ul class="row row-footer-skokov">
            <li class="col-xs-12 col-sm-3 col-md-4 col-lg-4 col-skokov-about">

                <?php if (is_active_sidebar('footer1_about_us')) : ?>
                    <div id="footer1_about_us" class="sidebar">
                        <?php dynamic_sidebar('footer1_about_us'); ?>
                    </div>
                <?php endif; ?>
                <a href="#" class="btn-learn-more">Learn more</a>
                <h3 class="title-footer">Photo Stream</h3>
                <ul class="row row-footer-img-container">
                    <li class="col-xs-6 col-md-4">
                        <img src="<?php bloginfo('template_url'); ?>/images/footer-img-girl.png"
                             class="img-responsive img-skokov-about" alt="image-color">
                    </li>
                    <li class="col-xs-6 col-md-4">
                        <img src="<?php bloginfo('template_url'); ?>/images/footer-image-face.png"
                             class="img-responsive img-skokov-about" alt="image-face">
                    </li>
                    <li class="col-xs-6 col-md-4">
                        <img src="<?php bloginfo('template_url'); ?>/images/footer-image-horse.png"
                             class="img-responsive img-skokov-about" alt="image-horse">
                    </li>
                    <li class="col-xs-6 col-md-4">
                        <img src="<?php bloginfo('template_url'); ?>/images/footer-image-color.png"
                             class="img-responsive img-skokov-about" alt="image-color">
                    </li>
                    <li class="col-xs-6 col-md-4">
                        <img src="<?php bloginfo('template_url'); ?>/images/footer-image-line.png"
                             class="img-responsive img-skokov-about" alt="image-line">
                    </li>
                    <li class="col-xs-6 col-md-4">
                        <img src="<?php bloginfo('template_url'); ?>/images/footer-image.png"
                             class="img-responsive img-skokov-about" alt="image">
                    </li>
                </ul>
            </li>
            <li class="col-sm-5 col-md-4 col-skokov-tweets">
                <?php if (is_active_sidebar('footer2_twitter')) : ?>
                    <div id="footer2_twitter" class="sidebar">
                        <?php dynamic_sidebar('footer2_twitter'); ?>
                    </div>
                <?php endif; ?>
            </li>
            <li class="col-sm-4 col-md-4 col-skokov-contact">
                <h3 class="title-footer">Contact info</h3>
                <address class="address-skokov">
                    <dl>
                        <dt>
                            <span class="fa fa-map-marker icon-footer-skokov" aria-hidden="true"></span>
                            Address:
                        </dt>
                        <dd><?php echo get_theme_mod('contact_address'); ?>
                        </dd>
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
                        <div id="footer3_mailchimp" class="sidebar">
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
                <span class="col-xs-12 col-sm-4 footer-autor">
                Copyright 2013 - FreeForWebDesign.com - All Rights Reserved
            </span>
                    <?php wp_nav_menu( array('theme_location'=>'menu1',
                                             'menu_class'=>'nav navbar-nav navbar-right navbar-right-fotter',
                    ));?>
            </div>
        </div>
    </nav>
</footer>
<!--<!--jquery-->-->
<!--<script src="http://code.jquery.com/jquery-latest.min.js"></script>-->
<!--<!--masonry-->-->
<!--<script src="http://masonry.desandro.com/masonry.pkgd.min.js"></script>-->
<!--<!--js/bootstrap-->-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"-->
<!--        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"-->
<!--        crossorigin="anonymous"></script>-->
<!--<!--fansybox-->-->
<!--<script type="text/javascript" src="--><?php //bloginfo('template_url'); ?><!--/lib/fancybox/jquery.fancybox.js"></script>-->
<!---->
<!--<script src="--><?php //bloginfo('template_url'); ?><!--/lib/jmosaicflow/jquery.mosaicflow.min.js"></script>-->
<!--<script src="--><?php //bloginfo('template_url'); ?><!--/lib/lightslider/js/lightslider.js"></script>-->
<!---->
<!--<script src="--><?php //bloginfo('template_url'); ?><!--/js/index.js"></script>-->

</body>
</html>
