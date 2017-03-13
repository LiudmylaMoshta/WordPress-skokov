<?php
/*
Template Name: our_team
*/
?>


<?php get_header(); ?>


<section class="container-fluid section-project-skokov">
    <h1 class="title-project"><?php single_cat_title() ?></h1>
</section>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8 ">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post(); ?>
                    <article class="content  col-md-12">
                        <div class="row">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="article-content">
                            <h2>
                                <a href="<?php the_permalink(); ?>" title="Read more">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <p class="text-content">
                                <?php the_excerpt(); ?>
                            </p>
                            <div class="article-footer">
                                <a href="#" class="like"> &#10084; 15 </a>
                                <span class="pull-right data-comments">by John Doe  /  4 comments  / <?php the_time( 'M. j, Y' ); ?>
                            </div>
                        </div>
                    </article>
                <?php
                endwhile;
                else: ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>

        </div>
        <?php get_sidebar(); ?>
    </div>

</div>


<?php get_footer(); ?>

