



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

            <div id="true-side" class="sidebar">
                <?php dynamic_sidebar( 'true_side' ); ?>
            </div>
        <?php endif; ?>


    </div>

    <div class="aside-archive">
        <?php if ( is_active_sidebar( 'true_side_archive' ) ) : ?>
            <div id="true_side_archive" class="sidebar">
                <?php dynamic_sidebar( 'true_side_archive' ); ?>
            </div>
        <?php endif; ?>

    </div>

    <div class="aside-post">
        <?php if ( is_active_sidebar( 'true_side_popular_posts' ) ) : ?>
            <div id="true_side_popular_posts" class="sidebar">
                <?php dynamic_sidebar( 'true_side_popular_posts' ); ?>
            </div>
        <?php endif; ?>

    </div>

    <div class="aside-tags">
        <?php if ( is_active_sidebar( 'true_side_tags' ) ) : ?>
            <div id="true_side_tags" class="sidebar">
                <?php dynamic_sidebar( 'true_side_tags' ); ?>
            </div>
        <?php endif; ?>

    </div>


</aside>


