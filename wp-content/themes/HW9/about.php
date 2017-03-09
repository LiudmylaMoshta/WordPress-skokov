<?php
/*
 Template name: about us
 */
?>

<?php get_header(); ?>

<section class="container-fluid section-project-skokov">
    <h1 class="title-project"><?php the_title(); ?></h1>
</section>

<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>

        <?php
    endwhile;
else: ?>

<?php endif; ?>

<?php get_footer(); ?>
<!---->
<!--<section class="container section-about-welcome">-->
<!--    <div class="media media-about row">-->
<!--        <div class="col-xs-12 col-sm-4">-->
<!--            <img class="media-object img-media-about img-responsive" src="images/img-welcome.png" alt="offices"/>-->
<!--        </div>-->
<!--        <div class="col-xs-12 col-sm-8 media-body-about">-->
<!--            <h2 class="media-heading title-welcome">welcome to our team</h2>-->
<!--            <p class="text-welcome-prew">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet-->
<!--                dolore magna aliquam erat volutpat. </p>-->
<!--            <div class="row text-welcome">-->
<!--                <p class="col-xs-12 col-sm-12 col-md-6">-->
<!--                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,-->
<!--                    sed diam nonummy nibh euismod tincidunt ut laoreet-->
<!--                    dolore magna aliquam erat volutpat. Ut wisi enim ad-->
<!--                    minim veniam, quis nostrud exerci tation ullamcorper-->
<!--                    suscipit lobortis nisl ut aliquip ex ea commodo-->
<!--                    consequat. Duis autem vel eum iriure dolor in hendrerit-->
<!--                    in vulputate velit esse molestie consequat, vel illum-->
<!--                    dolore eu feugiat nulla facilisis at vero eros et accumsan-->
<!--                    et iusto odio dignissim qui blandit praesent luptatum-->
<!--                    zzril delenit augue duis dolore te feugait nulla facilisi.-->
<!--                </p>-->
<!--                <p class="col-xs-12 col-sm-12 col-md-6">-->
<!--                    Claritas est etiam processus dynamicus, qui sequitur-->
<!--                    mutationem consuetudium lectorum. Mirum est notare-->
<!--                    quam littera gothica, quam nunc putamus parum-->
<!--                    claram, anteposuerit litterarum formas humanitatis per-->
<!--                    seacula quarta decima et quinta decima. Eodem modo-->
<!--                    typi, qui nunc nobis videntur parum clari, fiant sollemnes-->
<!--                    in futurum.-->
<!--                </p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</section>-->
<!---->
<!--<section class="container section-progress-bar">-->
<!--    <h2 class="title-about">our skills</h2>-->
<!--    <p class="text-progress-bar">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>-->
<!--    <ul class="row">-->
<!--        <li class="col-xs-12 col-sm-6 col-md-6">-->
<!--            <div class="progress progress-about">-->
<!--                <div class="progress-bar progress-bar-about" role="progressbar" aria-valuenow="90"-->
<!--                     aria-valuemin="0" aria-valuemax="100" style="width:90%">-->
<!--                    <span class="progress-title">90%</span>-->
<!--                    <span>photoshop</span>-->
<!--                </div>-->
<!--            </div>-->
<!--        </li>-->
<!--        <li class="col-xs-12 col-sm-6 col-md-6">-->
<!--            <div class="progress progress-about">-->
<!--                <div class="progress-bar progress-bar-about" role="progressbar" aria-valuenow="87"-->
<!--                     aria-valuemin="0" aria-valuemax="100" style="width:87%">-->
<!--                    <span class="progress-title">87%</span>-->
<!--                    <span>html/css</span>-->
<!--                </div>-->
<!--            </div>-->
<!--        </li>-->
<!--        <li class="col-xs-12 col-sm-6 col-md-6">-->
<!--            <div class="progress progress-about">-->
<!--                <div class="progress-bar progress-bar-about" role="progressbar" aria-valuenow="70"-->
<!--                     aria-valuemin="0" aria-valuemax="100" style="width:70%">-->
<!--                    <span class="progress-title">70%</span>-->
<!--                    <span>wordpress</span>-->
<!--                </div>-->
<!--            </div>-->
<!--        </li>-->
<!--        <li class="col-xs-12 col-sm-6 col-md-6">-->
<!--            <div class="progress progress-about">-->
<!--                <div class="progress-bar progress-bar-about" role="progressbar" aria-valuenow="75"-->
<!--                     aria-valuemin="0" aria-valuemax="100" style="width:75%">-->
<!--                    <span class="progress-title">75%</span>-->
<!--                    <span>javascript</span>-->
<!--                </div>-->
<!--            </div>-->
<!--        </li>-->
<!--        <li class="col-xs-12 col-sm-6 col-md-6">-->
<!--            <div class="progress progress-about">-->
<!--                <div class="progress-bar progress-bar-about" role="progressbar" aria-valuenow="80"-->
<!--                     aria-valuemin="0" aria-valuemax="100" style="width:80%">-->
<!--                    <span class="progress-title">80%</span>-->
<!--                    <span>illustrator</span>-->
<!--                </div>-->
<!--            </div>-->
<!--        </li>-->
<!--        <li class="col-xs-12 col-sm-6 col-md-6">-->
<!--            <div class="progress progress-about">-->
<!--                <div class="progress-bar progress-bar-about" role="progressbar" aria-valuenow="76"-->
<!--                     aria-valuemin="0" aria-valuemax="100" style="width:76%">-->
<!--                    <span class="progress-title">76%</span>-->
<!--                    <span>php</span>-->
<!--                </div>-->
<!--            </div>-->
<!--        </li>-->
<!--        <li class="col-xs-12 col-sm-6 col-md-6">-->
<!--            <div class="progress progress-about">-->
<!--                <div class="progress-bar progress-bar-about" role="progressbar" aria-valuenow="65"-->
<!--                     aria-valuemin="0" aria-valuemax="100" style="width:65%">-->
<!--                    <span class="progress-title">65%</span>-->
<!--                    <span>joomla</span>-->
<!--                </div>-->
<!--            </div>-->
<!--        </li>-->
<!--        <li class="col-xs-12 col-sm-6 col-md-6">-->
<!--            <div class="progress progress-about">-->
<!--                <div class="progress-bar progress-bar-about" role="progressbar" aria-valuenow="85"-->
<!--                     aria-valuemin="0" aria-valuemax="100" style="width:85%">-->
<!--                    <span class="progress-title">85%</span>-->
<!--                    <span>mysql</span>-->
<!--                </div>-->
<!--            </div>-->
<!--        </li>-->
<!--    </ul>-->
<!--</section>-->
<!---->
<!--<section class="container section-team">-->
<!--    <h2 class="title-about">our team</h2>-->
<!--    <p class="text-team">-->
<!--        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore-->
<!--        magna aliquam erat volutpat.-->
<!--    </p>-->
<!--    <ul class="list-team row"> <!--на экране 1280×600 и выше посъежали li, во втором ряду отображается только 1 li-->-->
<!--        <li class="col-xs-12 col-sm-4 col-md-3  col-lg-3 team-item">-->
<!--            <img src="images/photo1.png" alt="boy" class="img-team img-circle img-responsive"/>-->
<!--            <h3 class="title-name">web designer</h3>-->
<!--        </li>-->
<!--        <li class="col-xs-12 col-sm-4 col-md-3 col-lg-3 team-item">-->
<!--            <img src="images/photo2.png" alt="boy" class="img-team img-circle img-responsive"/>-->
<!--            <h3 class="title-name">web designer</h3>-->
<!--        </li>-->
<!--        <li class="col-xs-12 col-sm-4 col-md-3 col-lg-3 team-item">-->
<!--            <img src="images/photo3.png" alt="boy" class="img-team img-circle img-responsive"/>-->
<!--            <h3 class="title-name">front-end developer</h3>-->
<!--        </li>-->
<!--        <li class="col-xs-12 col-sm-4 col-md-3 col-lg-3 team-item">-->
<!--            <img src="images/photo4.png" alt="girl" class="img-team img-circle img-responsive"/>-->
<!--            <h3 class="title-name">web developer</h3>-->
<!--        </li>-->
<!---->
<!--        <li class="col-xs-12 col-sm-4 col-md-3 col-lg-3 team-item">-->
<!--            <img src="images/photo5.png" alt="boy" class="img-team img-circle img-responsive"/>-->
<!--            <h3 class="title-name"> web developer</h3>-->
<!--        </li>-->
<!--        <li class="col-xs-12 col-sm-4 col-md-3 col-lg-3 team-item">-->
<!--            <img src="images/photo6.png" alt="girl" class="img-team img-circle img-responsive"/>-->
<!--            <h3 class="title-name">markup developer</h3>-->
<!--        </li>-->
<!--        <li class="col-xs-12 col-sm-4 col-md-3 col-lg-3 team-item">-->
<!--            <img src="images/photo7.png" alt="boy" class="img-team img-circle img-responsive"/>-->
<!--            <h3 class="title-name">CMS master</h3>-->
<!--        </li>-->
<!--        <li class="col-xs-12 col-sm-4 col-md-3 col-lg-3 team-item">-->
<!--            <img src="images/photo8.png" alt="girl" class="img-team img-circle img-responsive"/>-->
<!--            <h3 class="title-name"><a href="#">send cv</a></h3> <!--это кнопка для отправкю резюме-->-->
<!--        </li>-->
<!--    </ul>-->
<!--</section>-->
<!---->
<!--<footer id="footer" class="container-fluid">-->
<!--    <div class="container">-->
<!--        <ul class="row row-footer-skokov">-->
<!--            <li class="col-xs-12 col-sm-3 col-md-4 col-lg-4 col-skokov-about">-->
<!--                <h3 class="title-footer">About Us</h3>-->
<!--                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,-->
<!--                    sed diam nonummy nibh euismod tincidunt ut-->
<!--                    laoreet dolore magna aliquam erat volutpat. Ut wisi-->
<!--                    enim ad minim veniam, quis nostrud exerci tation ullamcorper-->
<!--                    suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>-->
<!--                <a href="#" class="btn-learn-more">Learn more</a>-->
<!--                <h3 class="title-footer">Photo Stream</h3>-->
<!--                <ul class="row row-footer-img-container">-->
<!--                    <li class="col-xs-6 col-md-4">-->
<!--                        <img src="images/footer-img-girl.png" class="img-responsive img-skokov-about" alt="image-color">-->
<!--                    </li>-->
<!--                    <li class="col-xs-6 col-md-4">-->
<!--                        <img src="images/footer-image-face.png" class="img-responsive img-skokov-about" alt="image-face">-->
<!--                    </li>-->
<!--                    <li class="col-xs-6 col-md-4">-->
<!--                        <img src="images/footer-image-horse.png" class="img-responsive img-skokov-about" alt="image-horse">-->
<!--                    </li>-->
<!--                    <li class="col-xs-6 col-md-4">-->
<!--                        <img src="images/footer-image-color.png" class="img-responsive img-skokov-about" alt="image-color">-->
<!--                    </li>-->
<!--                    <li class="col-xs-6 col-md-4">-->
<!--                        <img src="images/footer-image-line.png" class="img-responsive img-skokov-about" alt="image-line">-->
<!--                    </li>-->
<!--                    <li class="col-xs-6 col-md-4">-->
<!--                        <img src="images/footer-image.png" class="img-responsive img-skokov-about" alt="image">-->
<!--                    </li>-->
<!---->
<!--                </ul>-->
<!---->
<!--            </li>-->
<!--            <li class="col-xs-12 col-sm-5 col-md-4 col-lg-4 col-skokov-tweets">-->
<!--                <h3 class="title-footer">Latest tweets</h3>-->
<!--                <ul class="list-tweets">-->
<!--                    <li class="row">-->
<!--                        <i class="col-xs-1 fa fa-twitter fa-3x" aria-hidden="true"></i>-->
<!--                        <p class="col-text-tweets col-xs-10">-->
<!--                            Check Out Dtbaker's <span class="yellow">@Arduino</span> Sales Notification <span class="yellow">#System</span>-->
<!--                            <a href="/">http://t.co/ WBFKIWHJ</a>-->
<!--                            <span class="yellow days">3 days ago</span>-->
<!--                        </p>-->
<!--                    <li class="row">-->
<!--                        <i class="col-xs-1 fa fa-twitter fa-3x" aria-hidden="true"></i>-->
<!--                        <p class="col-text-tweets col-xs-10">-->
<!--                            Community Superstar Winner – <span class="yellow"> #OrganicBeeMedia</span>-->
<!--                            <a href="/">http://t.co/2Fs1nnMj</a>-->
<!--                            <span class="yellow days"> 3 days ago</span>-->
<!--                        </p>-->
<!--                    </li>-->
<!--                    <li class="row">-->
<!--                        <i class="col-xs-1 fa fa-twitter fa-3x" aria-hidden="true"></i>-->
<!--                        <p class="col-text-tweets col-xs-10">-->
<!--                            Clean <span class="yellow">#Websites</span> Designs for Your <span class="yellow">#Inspiration</span>-->
<!--                            <a href="/">http://t.co/ SnRKu3HJ</a>-->
<!--                            <span class="yellow days"> 5 days ago</span>-->
<!--                        </p>-->
<!--                    </li>-->
<!--                    <li class="row">-->
<!--                        <i class="col-xs-1 fa fa-twitter fa-3x" aria-hidden="true"></i>-->
<!--                        <p class="col-text-tweets col-xs-10">-->
<!--                            Cute Online <span class="yellow">#Shops</span>-->
<!--                            <a href="/">http://t.co/ 1PoQN3bJ</a>-->
<!--                            <span class="yellow days"> 6 days ago</span>-->
<!--                        </p>-->
<!--                    </li>-->
<!--                    <li class="row">-->
<!--                        <i class="col-xs-1 fa fa-twitter fa-3x" aria-hidden="true"></i>-->
<!--                        <p class="col-text-tweets col-xs-10">-->
<!--                            Download 40 vector <span class="yellow">#icons</span> package for #FREE-->
<!--                            <a href="/">http://t.co/2Fp5GLqn</a>-->
<!--                            <span class="yellow days"> 6 days ago</span>-->
<!--                        </p>-->
<!--                    </li>-->
<!--                </ul>-->
<!--                <div class="footer-social-connecting">-->
<!--                    <h3 class="title-footer">Social Connecting</h3>-->
<!--                    <ul>-->
<!--                        <li>-->
<!--                            <a href="http://facebook.com" class="fa fa-facebook icon-footer-skokov" aria-hidden="true">-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="https://plus.google.com/">-->
<!--                                <i class="fa fa-google-plus icon-footer-skokov"></i>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="http://twitter.com">-->
<!--                                <i class="fa fa-twitter icon-footer-skokov" aria-hidden="true"></i>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="https://linkedin.com/">-->
<!--                                <i class="fa fa-linkedin icon-footer-skokov" aria-hidden="true"></i>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="http://youtube.com">-->
<!--                                <i class="fa fa-youtube icon-footer-skokov" aria-hidden="true"></i>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="http://twitter.com">-->
<!--                                <i class="fa fa-twitter icon-footer-skokov" aria-hidden="true"></i>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="#">-->
<!--                                <i class="fa fa-rss icon-footer-skokov" aria-hidden="true"></i>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="https://plus.google.com/">-->
<!--                                <i class="fa fa-dribbble icon-footer-skokov"></i>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </li>-->
<!--            <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-skokov-contact">-->
<!--                <h3 class="title-footer">Contact info</h3>-->
<!--                <address class="address-skokov">-->
<!--                    <dl>-->
<!--                        <dt>-->
<!--                            <i class="fa fa-map-marker icon-footer-skokov" aria-hidden="true"></i>-->
<!--                            Address:-->
<!--                        </dt>-->
<!--                        <dd>12569 Saint Patrick des Prés,-->
<!--                            85000 Paris, France-->
<!--                        </dd>-->
<!--                    </dl>-->
<!--                    <dl>-->
<!--                        <dt>-->
<!--                            <i class="fa fa-whatsapp icon-footer-skokov" aria-hidden="true"></i>-->
<!--                            Phone:-->
<!--                        </dt>-->
<!--                        <dd>-->
<!--                            <a href="tel:380458454578">+38 045 845-45-78 </a><!--ссылка на тел-->-->
<!--                            <a href="tel:380458454579">+38 045 845-45-79</a>-->
<!--                        </dd>-->
<!--                    </dl>-->
<!--                    <dl>-->
<!--                        <dt>-->
<!--                            <i class="fa fa-envelope icon-footer-skokov" aria-hidden="true"></i>-->
<!--                            E-mail:-->
<!--                        </dt>-->
<!--                        <dd>-->
<!--                            <a href="mailto:freeforwebdesign@gmail.com">freeforwebdesign@gmail.com</a><!--ссылка на имейл-->-->
<!--                        </dd>-->
<!--                    </dl>-->
<!--                </address>-->
<!--                <h4 class="title-footer">Follow Us</h4>-->
<!--                <p>Lorem Ipsum is simply dummy text of the printing-->
<!--                    and typesetting industry.</p>-->
<!--                <form class="form-skokov">-->
<!--                    <div class="input-group">-->
<!--                        <input type="text" class="form-control input-footer-skokov" placeholder="I">-->
<!--                        <span class="input-group-btn input-group-btn-skokov">-->
<!--                        <button class="btn btn-footer-skokov" type="button">-->
<!--                            <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>-->
<!--                        </button>-->
<!--                    </span>-->
<!--                    </div>-->
<!--                </form>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->
<!---->
<!--    <nav class="navbar navbar-inverse navbar-skokov-bottom">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <span class="col-xs-12 col-sm-4 footer-autor">-->
<!--                Copyright 2013 - FreeForWebDesign.com - All Rights Reserved-->
<!--            </span>-->
<!--                <ul class="col-xs-12 col-sm-8 nav navbar-nav navbar-right navbar-right-fotter">-->
<!--                    <li class="li-nav-skokov"><a href="index.php">HOME</a></li>-->
<!--                    <li class="li-nav-skokov"><a href="portfolio.html">PORTFOLIO</a></li>-->
<!--                    <li class="li-nav-skokov"><a href="blog.html">BLOG</a></li>-->
<!--                    <li class="li-nav-skokov"><a href="about.php">ABOUT US</a></li>-->
<!--                    <li class="li-nav-skokov"><a href="contact.html">CONTACT</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </nav>-->
<!--</footer>-->
<!---->
<!---->
<!--<!--jquery-->-->
<!--<script src="http://code.jquery.com/jquery-latest.min.js"></script>-->
<!--<!--masonry-->-->
<!--<script src="http://masonry.desandro.com/masonry.pkgd.min.js"></script>-->
<!--<!--js/bootstrap-->-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
<!--<!--fansybox-->-->
<!--<script type="text/javascript" src="lib/fancybox/jquery.fancybox.js"></script>-->
<!--<script>-->
<!--    $(document).ready(function() {-->
<!--        $("a.fancybox").fancybox();-->
<!--    });-->
<!--</script>-->
<!--</body>-->
<!--</html>-->
