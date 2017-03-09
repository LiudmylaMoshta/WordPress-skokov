<?php
/*
 Template name: Blog
 */
?>


<?php get_header(); ?>

<section class="container-fluid section-project-skokov">
    <h1 class="title-project"><?php the_title(); ?></h1>
</section>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8 ">
            <div class="row">
                <blockquote class="col-md-6">
                    <?php if ( is_active_sidebar( 'postin-widget-area' ) ) : ?>
                        <div id="postin-widget-area" class="sidebar">
                            <?php dynamic_sidebar( 'postin-widget-area' ); ?>
                        </div>
                    <?php endif; ?>
                    <span class="text-right"></span>
                </blockquote>
                <?php
                $temp     = $wp_query;
                $wp_query = null;
                $wp_query = new WP_Query();
                $wp_query->query( 'showposts=7' . '&paged=' . $paged );
                while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

                    <article class="content  col-md-6">
                            <?php the_post_thumbnail(); ?>
                        <div class="article-content">
                            <h2><a href="<?php the_permalink(); ?>" title="Read more">
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


                <?php endwhile; ?>
                <nav aria-label="Page navigation" class="row text-center page-navigation">
                    <ul class="col-xs-12 col-sm-8 pagination">
                        <?php
                        $big = 999999999;
                        echo paginate_links( array(
                                'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format'    => '?paged=%#%',
                                'and_size'    => 5,
                                'current'   => max( 1, get_query_var( 'paged' ) ),
                                'total'     => $wp_query->max_num_pages,
                                'prev_text' => __( 'PREV' ),
                                'next_text' => __( 'NEXT' ),
                            ) );
                        ?>
                    </ul>
                </nav>

                <?php if ( $paged > 1 ) { ?>

                <?php } else { ?>

                <?php } ?>

                <?php wp_reset_postdata(); ?>
            </div>

        </div>
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>

