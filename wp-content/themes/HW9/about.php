<?php
/*
 Template name: about us
 */
?>

<?php get_header(); ?>

<section class="container-fluid section-project-skokov">
    <h1 class="title-project"><?php the_title(); ?></h1>
</section>

<section class="container section-about-welcome">
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php
    endwhile;
else: ?>
<?php endif; ?>
</section>

<section class="container section-team">
    <ul class="list-team row">
    <?php
        $query = new WP_Query( array('post_type' => 'product'  , 'posts_per_page' => 100 ) );
        if ($query->have_posts()):?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <li class="col-xs-12 col-sm-4 col-md-3  col-lg-3 team-item">
            <?php the_post_thumbnail('class= img-team img-circle img-responsive'); ?>
            <?php the_title('<h3 class="title-name">','</h3>'); ?>
        </li>
            <?php endwhile; ?>
        <?php endif; wp_reset_postdata(); ?>
    </ul>

</section>

<?php //echo do_shortcode ('[wp_progress_bar pc="90" text="Photoshop"  background="#403f46" progress_color="#ffeb00" width="30%"]'); ?>

<?php get_footer(); ?>

