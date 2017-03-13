
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

            <section class="section-comments">
                <h3 class="title-social">6 comments</h3>
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




</div>

</div>


<?php get_footer(); ?>

