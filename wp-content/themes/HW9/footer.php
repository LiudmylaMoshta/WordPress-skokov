
<?php wp_footer(); ?>


<footer id="footer" class="container-fluid">
	<div class="container">
		<ul class="row row-footer-skokov">
			<li class="col-xs-12 col-sm-3 col-md-4 col-lg-4 col-skokov-about">
				<h3 class="title-footer">About Us</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
					sed diam nonummy nibh euismod tincidunt ut
					laoreet dolore magna aliquam erat volutpat. Ut wisi
					enim ad minim veniam, quis nostrud exerci tation ullamcorper
					suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
				<a href="#" class="btn-learn-more">Learn more</a>
				<h3 class="title-footer">Photo Stream</h3>
				<ul class="row row-footer-img-container">
					<li class="col-xs-6 col-md-4">
						<img src="<?php bloginfo('template_url'); ?>/images/footer-img-girl.png" class="img-responsive img-skokov-about" alt="image-color">
					</li>
					<li class="col-xs-6 col-md-4">
						<img src="<?php bloginfo('template_url'); ?>/images/footer-image-face.png" class="img-responsive img-skokov-about" alt="image-face">
					</li>
					<li class="col-xs-6 col-md-4">
						<img src="<?php bloginfo('template_url'); ?>/images/footer-image-horse.png" class="img-responsive img-skokov-about" alt="image-horse">
					</li>
					<li class="col-xs-6 col-md-4">
						<img src="<?php bloginfo('template_url'); ?>/images/footer-image-color.png" class="img-responsive img-skokov-about" alt="image-color">
					</li>
					<li class="col-xs-6 col-md-4">
						<img src="<?php bloginfo('template_url'); ?>/images/footer-image-line.png" class="img-responsive img-skokov-about" alt="image-line">
					</li>
					<li class="col-xs-6 col-md-4">
						<img src="<?php bloginfo('template_url'); ?>/images/footer-image.png" class="img-responsive img-skokov-about" alt="image">
					</li>

				</ul>

			</li>
			<li class="col-xs-12 col-sm-5 col-md-4 col-lg-4 col-skokov-tweets">



					<?php if ( is_active_sidebar( 'true_twitter' ) ) : ?>

                        <div id="true_twitter" class="sidebar">
							<?php dynamic_sidebar( 'true_twitter' ); ?>

                        </div>

					<?php endif; ?>

					<?php if ( is_active_sidebar( 'true_foot' ) ) : ?>

                        <div id="true_foot" class="sidebar">
							<?php dynamic_sidebar( 'true_foot' ); ?>

                        </div>

					<?php endif; ?>
			</li>
			<li class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-skokov-contact">
				<h3 class="title-footer">Contact info</h3>
				<address class="address-skokov">
					<dl>
						<dt>
							<i class="fa fa-map-marker icon-footer-skokov" aria-hidden="true"></i>
							Address:
						</dt>
						<dd><?php echo get_theme_mod('contact_address'); ?>
						</dd>
					</dl>
					<dl>
						<dt>
							<i class="fa fa-whatsapp icon-footer-skokov" aria-hidden="true"></i>
							Phone:
						</dt>
						<dd>
							<a href="tel:380458454578" class="dd-tel">
								<a href="tel:380458454578"><?php echo get_theme_mod('contact_tel'); ?></a>
								<a href="tel:380458454579"><?php echo get_theme_mod('contact_tel2'); ?></a>
							</a>
						</dd>
					</dl>
					<dl>
						<dt>
							<i class="fa fa-envelope icon-footer-skokov" aria-hidden="true"></i>
							E-mail:
						</dt>
						<dd>
							<a href="mailto:freeforwebdesign@gmail.com" class="dd-email">
								<?php echo get_theme_mod('contact_mail'); ?>
							</a>
						</dd>
					</dl>
				</address>
				<h4 class="title-footer">Follow Us</h4>
				<p>Lorem Ipsum is simply dummy text of the printing
					and typesetting industry.</p>
				<form class="form-skokov" action="//vk.us14.list-manage.com/subscribe/post?u=04b1bc4222eb5bbecab4a45d4&amp;id=4d848524da" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
					<div class="input-group">
						<input type="email" class="form-control input-footer-skokov" name="EMAIL" id="mce-EMAIL" required placeholder="I">
						<span class="input-group-btn input-group-btn-skokov">
                        <button class="btn btn-footer-skokov " type="submit">
                            <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                        </button>
                    </span>
					</div>
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
				<ul class="col-xs-12 col-sm-8 nav navbar-nav navbar-right navbar-right-fotter">
					<li class="li-nav-skokov"><a href="index.php">HOME</a></li>
					<li class="li-nav-skokov"><a href="portfolio.html">PORTFOLIO</a></li>
					<li class="li-nav-skokov"><a href="blog.html">BLOG</a></li>
					<li class="li-nav-skokov"><a href="about.html">ABOUT US</a></li>
					<li class="li-nav-skokov"><a href="contact.html">CONTACT</a></li>
				</ul>
			</div>
		</div>
	</nav>
</footer>
<!--jquery-->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<!--masonry-->
<script src="http://masonry.desandro.com/masonry.pkgd.min.js"></script>
<!--js/bootstrap-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--fansybox-->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/lib/fancybox/jquery.fancybox.js"></script>

<script src="<?php bloginfo('template_url'); ?>/lib/jmosaicflow/jquery.mosaicflow.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/lib/lightslider/js/lightslider.js"></script>

<script src="<?php bloginfo('template_url'); ?>/js/index.js"></script>

</body>
</html>
