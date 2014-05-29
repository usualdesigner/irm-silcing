<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php endwhile; ?>

<div class="container" id="tools">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-md-6 us-page-breadcrumbs">
                    <?php if(function_exists('bcn_display')) :?>
                        <?php bcn_display(); ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-3 col-md-offset-3 us-page-search">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container text-center" id="title">
    <h1>
        <?php the_title(); ?>
    </h1>
    <hr/>
</div>

<div class="container top-distance bottom-distance" id="page">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-md-8">
                    <?php the_content(); ?>
                    <hr/>
                    <?php comments_template(); ?>
                </div>
                <div class="col-md-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>