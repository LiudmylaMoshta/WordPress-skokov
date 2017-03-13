



<aside class="col-xs-12 col-sm-4 col-md-4 aside-project">
    <div class="aside-search">
        <div class="input-group">
            <input type="text" name="s" class="form-control form-control-blog" placeholder="Search...">
            <div class="input-group-btn ">
                <button class="btn btn-default btn-blog" type="button">
                    <a href="#" class="fa fa-search" aria-hidden="true"></a>
                </button>
            </div>
        </div>
    </div>
    <div class="aside-categories">
        <?php if ( is_active_sidebar( 'true_side' ) ) : ?>
                <?php dynamic_sidebar( 'true_side' ); ?>
        <?php endif; ?>


    </div>

    <div class="aside-archive">
        <?php if ( is_active_sidebar( 'true_side_archive' ) ) : ?>
                <?php dynamic_sidebar( 'true_side_archive' ); ?>
        <?php endif; ?>

    </div>

    <div class="aside-post">
        <?php if ( is_active_sidebar( 'true_side_popular_posts' ) ) : ?>
                <?php dynamic_sidebar( 'true_side_popular_posts' ); ?>
        <?php endif; ?>

    </div>

    <div class="aside-tags">
        <?php if ( is_active_sidebar( 'true_side_tags' ) ) : ?>
                <?php dynamic_sidebar( 'true_side_tags' ); ?>
        <?php endif; ?>

    </div>


</aside>


