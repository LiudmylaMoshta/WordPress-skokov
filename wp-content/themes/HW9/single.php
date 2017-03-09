
<?php get_header(); ?>


<section class="container-fluid section-project-skokov">
    <h1 class="title-project">BLOG</h1>
</section>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8 ">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post(); ?>
                    <article class="section-content">
                        <div class="post-header">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="text-content">
                            <h2 class="title-post">
                                <a href="<?php the_permalink(); ?>" title="Read more">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <span class="data-comments">
                                <span class="like"> &#10084; 15 </span>
                                by John Doe  /  4 comments  / <?php the_time( 'M. j, Y' ); ?>
                            </span>
                        </div>
                            <p class="text-post">
                                <?php the_content(); ?>
                            </p>
                    </article>
                    <?php
                endwhile;
            else: ?>

            <?php endif; ?>
            <section class="section-related">
                <h3 class="title-social">Related posts</h3>
                <?php
                $categories = get_the_category($post->ID);
                if ($categories) {
                    $category_ids = array();
                    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                    $args=array(
                        'tag__in' => $tag_ids,  //сортировка по тегам (меткам)
                        'post__not_in' => array($post->ID),
                        'showposts'=>3,  //количество выводимых ячеек
                        'orderby'=>'rand', // в случайном порядке
                        'ignore_sticky_posts'=>1); //исключаем одинаковые записи
                    $my_query = new wp_query($args);
                    if( $my_query->have_posts() ) {
                        echo '<ul class="row list-related">';
                        while ($my_query->have_posts()) {
                            $my_query->the_post();
                            ?>
                            <li class="hover-trial col-sm-4">
                                <a href="<?php the_permalink() ?>">
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                </a>
                                <h4 class="title-related">
                                    <a onclick="return !window.open(this.href)"  href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h4>
                            </li>
                            <?php
                        }
                        echo '</ul>';
                    }
                    wp_reset_query();
                }
                ?>
            </section>
<!--            <section class="text-wrapper">-->
<!--                --><?php
//                // If comments are open or we have at least one comment, load up the comment template.
//                if ( comments_open() || get_comments_number() ) :
//                    comments_template();
//                endif;
//
//                endwhile; // End of the loop.
//                else :
//                get_template_part( 'template-parts/content', 'none' );
//                endif;
//                ?>
<!--            </section>-->
            <section class="section-comments">-->
<!--                <h3 class="title-social">6 comments</h3>-->
                <ul>
                    <li class="row">
                        <p class="text-comment">
                            <?php comments_template();?>
                        </p>
                    </li>
                </ul>
            </section>
        </div>

        <?php get_sidebar(); ?>
    </div>


</div>

    <!--            <section class="section-comments">-->
    <!--                <h3 class="title-social">6 comments</h3>-->
    <!--                <ul>-->
    <!--                    <li class="row">-->
    <!--                        <img src="images/comment-img1.png" class="avatars col-xs-1"><!--картинки не отображаются на мобильных девайсах, а на таблетке не выровнены-->-->
    <!--                        <div class="comments col-xs-11">-->
    <!--                            <span class="title-comment">-->
    <!--                                Skokov   /   2 hours ago   /   <a href="#">reply</a><!--этот элемент REPLY должне быть ссылкой, который предоставляет возможность ответить на комментарий-->-->
    <!--                            </span>-->
    <!--                            <p class="text-comment">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet-->
    <!--                            dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper-->
    <!--                            suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate-->
    <!--                            velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio-->
    <!--                            dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.-->
    <!--                            </p>-->
    <!--                        </div>-->
    <!--                    </li>-->
    <!--                    <li class="row">-->
    <!--                        <img src="images/comment-img2.png" class="avatars col-xs-1">-->
    <!--                        <div class="comments col-xs-11">-->
    <!--                            <span class="title-comment">wernay   /   3 hours ago   / <a href="#">reply</a> </span>-->
    <!--                            <p class="text-comment">-->
    <!--                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet-->
    <!--                                dolore magna aliquam erat volutpat.-->
    <!--                            </p>-->
    <!--                        </div>-->
    <!--                    </li>-->
    <!--                    <li class="row">-->
    <!--                        <img src="images/comment-img3.png" class="avatars col-xs-1">-->
    <!--                        <div class="comments col-xs-11">-->
    <!--                            <span class="title-comment">wernay   /   3 hours ago   /  <a href="#"> reply </a></span>-->
    <!--                            <p class="text-comment">-->
    <!--                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet-->
    <!--                                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper-->
    <!--                                suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate-->
    <!--                                velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio-->
    <!--                                dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.  Lorem ipsum dolor-->
    <!--                                sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna-->
    <!--                                aliquam erat volutpat.-->
    <!--                                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea-->
    <!--                                commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,-->
    <!--                                vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent-->
    <!--                                luptatum zzril delenit augue duis dolore te feugait nulla facilisi.-->
    <!--                            </p>-->
    <!--                        </div>-->
    <!---->
    <!--                        <ul >-->
    <!--                            <li>-->
    <!--                                <img src="images/comment-img2.png" class="avatars col-xs-offset-1 col-xs-1">-->
    <!--                                <div class="comments col-xs-10">-->
    <!--                                    <span class="title-comment">-->
    <!--                                        wernay   /   3 hours ago   /   <a href="#">reply</a>-->
    <!--                                    </span>-->
    <!--                                    <p class="text-comment">-->
    <!--                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.-->
    <!--                                    </p>-->
    <!--                                </div>-->
    <!--                            </li>-->
    <!--                            <li>-->
    <!--                                <img src="images/comment-img3.png" class="avatars col-xs-offset-2 col-xs-1">-->
    <!--                                <div class="comments col-xs-9">-->
    <!--                                    <span class="title-comment">mr. dev   /   5 hours ago   /  <a href="#"> reply </a></span>-->
    <!--                                    <p class="text-comment">-->
    <!--                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod-->
    <!--                                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis-->
    <!--                                        nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.-->
    <!--                                    </p>-->
    <!--                                </div>-->
    <!--                            </li>-->
    <!--                        </ul>-->
    <!--                    </li>-->
    <!--                    <li class="row">-->
    <!--                        <img src="images/comment-img4.png" class="avatars col-xs-1">-->
    <!--                        <div class="comments col-xs-11">-->
    <!--                            <span class="title-comment">-->
    <!--                                denpro   /   2 hours ago   / <a href="#"> reply </a>-->
    <!--                            </span>-->
    <!--                            <p class="text-comment">-->
    <!--                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet-->
    <!--                                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper-->
    <!--                                suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate-->
    <!--                                velit esse molestie consequat.-->
    <!--                            </p>-->
    <!--                        </div>-->
    <!--                    </li>-->
    <!--                </ul>-->
    <!--            </section>-->
    <!--            <section class="section-leave-comments">-->
    <!--                <h3 class="title-social">Leave a comment</h3>-->
    <!--                <form class="form-inline form-inline-blog"><!--это можно оформить списком-->-->
    <!--                    <ul class="post-form row">-->
    <!--                        <li class="form-group col-xs-6 form-group-comments">-->
    <!--                            <input type="text" class="form-control" id="exampleInputName2" placeholder="name ...">-->
    <!--                        </li>-->
    <!--                        <li class="form-group col-xs-6 form-group-comments">-->
    <!--                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="email ...">-->
    <!---->
    <!--                        </li>-->
    <!--                        <li class="col-xs-12">-->
    <!--                            <textarea class="textarea-blog form-control " placeholder="comment ..." rows="3"></textarea>-->
    <!--                        </li>-->
    <!--                    </ul>-->
    <!--                    <button type="submit" class="btn btn-default btn-comments">Add a comment</button>-->
    <!--                </form>-->
    <!--            </section>-->


</div>

</div>


<?php get_footer(); ?>


<!--<section class="container-fluid section-project-skokov">-->
<!--    <h1 class="title-project">blog</h1>-->
<!--</section>-->
<!---->
<!--<div class="container-fluid">-->
<!--    <div class="row">-->
<!--        <div class="col-xs-12 col-sm-8 col-md-8 ">-->
<!--            <section class="section-content">-->
<!--                <div class="post-header">-->
<!--                    <img src="images/header-img-post.png" alt="girl" class="img-blog img-responsive">-->
<!--                    <div class="text-content">-->
<!--                        <h2 class="title-post">-->
<!--                            17 Inspiring Examples of Parallax Scrolling Sites-->
<!--                        </h2>-->
<!--                        <span class="data-comments">-->
<!--                        <span class="like"> &#10084; 15 </span>-->
<!--                        by John Doe  /  4 comments  /  Oct. 12, 2013-->
<!--                    </span>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <p class="text-post">-->
<!--                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore-->
<!--                    magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut-->
<!--                    aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,-->
<!--                    vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril-->
<!--                    delenit augue duis dolore te feugait nulla facilisi.-->
<!--                    Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim-->
<!--                    assum.-->
<!--                    Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt-->
<!--                    lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem-->
<!--                    consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit-->
<!--                    litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur-->
<!--                    parum clari, fiant sollemnes in futurum.-->
<!--                </p>-->
<!--                <img src="images/img-post.png" alt="girl" class="img-responsive">-->
<!--                <p class="text-post">-->
<!--                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore-->
<!--                    magna aliquam erat volutpat.-->
<!--                </p>-->
<!--                <img src="images/img-post2.png" alt="girl" class="img-responsive">-->
<!--                <p class="text-post">-->
<!--                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore-->
<!--                    magna aliquam erat volutpat.-->
<!--                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo-->
<!--                    consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu-->
<!--                    feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril-->
<!--                    delenit augue duis dolore te feugait nulla facilisi.-->
<!--                </p>-->
<!--                <div class="post-footer">-->
<!--                    <h3 class="title-social">share this post</h3>-->
<!--                    <dl class="social-like">-->
<!--                        <dt>-->
<!--                            <a href="http://facebook.com" class="fa fa-facebook icon-footer-skokov" aria-hidden="true"></a>-->
<!--                        </dt>-->
<!--                        <dd>-->
<!--                            15-->
<!--                        </dd>-->
<!--                        <dt>-->
<!--                            <a href="https://plus.google.com/" class="fa fa-google-plus icon-footer-skokov"></a>-->
<!--                        </dt>-->
<!--                        <dd>-->
<!--                            34-->
<!--                        </dd>-->
<!--                        <dt>-->
<!--                            <a href="https://twitter.com/" class="fa fa-twitter icon-footer-skokov" aria-hidden="true" ></a>-->
<!--                        </dt>-->
<!--                        <dd>-->
<!--                            162-->
<!--                        </dd>-->
<!--                        <dt>-->
<!--                            <a href="https://linkedin.com/" class="fa fa-linkedin icon-footer-skokov"></a>-->
<!--                        </dt>-->
<!--                        <dd>-->
<!--                            7-->
<!--                        </dd>-->
<!--                    </dl>-->
<!--                </div>-->
<!--            </section>-->
<!--            <section class="section-related">-->
<!--                <h3 class="title-social">Related posts</h3>-->
<!--                <ul class="row list-related">-->
<!--                    <li class="hover-trial col-xs-12 col-sm-4">-->
<!--                        <img src="images/related-1.png" alt="boy" class="img-related img-responsive">-->
<!--                        <h4 class="title-related"><a href="#">18 Minimalistic Home Offices to Inspire You</a> <!--это так же должно быть и ссылкой, что бы можно было перейти на эти статьи-->-->
<!--                        </h4>-->
<!--                    </li>-->
<!--                    <li class="hover-trial col-xs-12 col-sm-4">-->
<!--                        <img src="images/related2.png" alt="dog" class="img-related img-responsive">-->
<!--                        <h4 class="title-related"> <a href="#">20 Resources for Beginner Designers &#38; Developers</a>-->
<!--                        </h4>-->
<!--                    </li>-->
<!--                    <li class="hover-trial col-xs-12 col-sm-4">-->
<!--                        <img src="images/related3.png" alt="tree" class="img-related img-responsive">-->
<!--                        <h4 class="title-related">-->
<!--                            <a href="#">Multipurpose Agency WordPress Theme</a>-->
<!--                        </h4>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </section>-->
<!--            <section class="section-comments">-->
<!--                <h3 class="title-social">6 comments</h3>-->
<!--                <ul>-->
<!--                    <li class="row">-->
<!--                        <img src="images/comment-img1.png" class="avatars col-xs-1"><!--картинки не отображаются на мобильных девайсах, а на таблетке не выровнены-->-->
<!--                        <div class="comments col-xs-11">-->
<!--                            <span class="title-comment">-->
<!--                                Skokov   /   2 hours ago   /   <a href="#">reply</a><!--этот элемент REPLY должне быть ссылкой, который предоставляет возможность ответить на комментарий-->-->
<!--                            </span>-->
<!--                            <p class="text-comment">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet-->
<!--                            dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper-->
<!--                            suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate-->
<!--                            velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio-->
<!--                            dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li class="row">-->
<!--                        <img src="images/comment-img2.png" class="avatars col-xs-1">-->
<!--                        <div class="comments col-xs-11">-->
<!--                            <span class="title-comment">wernay   /   3 hours ago   / <a href="#">reply</a> </span>-->
<!--                            <p class="text-comment">-->
<!--                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet-->
<!--                                dolore magna aliquam erat volutpat.-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li class="row">-->
<!--                        <img src="images/comment-img3.png" class="avatars col-xs-1">-->
<!--                        <div class="comments col-xs-11">-->
<!--                            <span class="title-comment">wernay   /   3 hours ago   /  <a href="#"> reply </a></span>-->
<!--                            <p class="text-comment">-->
<!--                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet-->
<!--                                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper-->
<!--                                suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate-->
<!--                                velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio-->
<!--                                dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.  Lorem ipsum dolor-->
<!--                                sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna-->
<!--                                aliquam erat volutpat.-->
<!--                                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea-->
<!--                                commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,-->
<!--                                vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent-->
<!--                                luptatum zzril delenit augue duis dolore te feugait nulla facilisi.-->
<!--                            </p>-->
<!--                        </div>-->
<!---->
<!--                        <ul >-->
<!--                            <li>-->
<!--                                <img src="images/comment-img2.png" class="avatars col-xs-offset-1 col-xs-1">-->
<!--                                <div class="comments col-xs-10">-->
<!--                                    <span class="title-comment">-->
<!--                                        wernay   /   3 hours ago   /   <a href="#">reply</a>-->
<!--                                    </span>-->
<!--                                    <p class="text-comment">-->
<!--                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.-->
<!--                                    </p>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <img src="images/comment-img3.png" class="avatars col-xs-offset-2 col-xs-1">-->
<!--                                <div class="comments col-xs-9">-->
<!--                                    <span class="title-comment">mr. dev   /   5 hours ago   /  <a href="#"> reply </a></span>-->
<!--                                    <p class="text-comment">-->
<!--                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod-->
<!--                                        tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis-->
<!--                                        nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.-->
<!--                                    </p>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li class="row">-->
<!--                        <img src="images/comment-img4.png" class="avatars col-xs-1">-->
<!--                        <div class="comments col-xs-11">-->
<!--                            <span class="title-comment">-->
<!--                                denpro   /   2 hours ago   / <a href="#"> reply </a>-->
<!--                            </span>-->
<!--                            <p class="text-comment">-->
<!--                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet-->
<!--                                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper-->
<!--                                suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate-->
<!--                                velit esse molestie consequat.-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </section>-->
<!--            <section class="section-leave-comments">-->
<!--                <h3 class="title-social">Leave a comment</h3>-->
<!--                <form class="form-inline form-inline-blog"><!--это можно оформить списком-->-->
<!--                    <ul class="post-form row">-->
<!--                        <li class="form-group col-xs-6 form-group-comments">-->
<!--                            <input type="text" class="form-control" id="exampleInputName2" placeholder="name ...">-->
<!--                        </li>-->
<!--                        <li class="form-group col-xs-6 form-group-comments">-->
<!--                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="email ...">-->
<!---->
<!--                        </li>-->
<!--                        <li class="col-xs-12">-->
<!--                            <textarea class="textarea-blog form-control " placeholder="comment ..." rows="3"></textarea>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                    <button type="submit" class="btn btn-default btn-comments">Add a comment</button>-->
<!--                </form>-->
<!--            </section>-->
<!--        </div>-->