<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php endwhile; ?>

<div class="container" id="tools">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <div class="row">
                <div class="col-xs-8 us-page-breadcrumbs">
                    <?php if(function_exists('bcn_display')) :?>
                        <?php bcn_display(); ?>
                    <?php endif; ?>
                </div>
                <div class="col-xs-4 us-page-search">
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
<!--<div class="container bottom-distance" id="info">-->
<!--    <div class="row">-->
<!--        <div class="col-xs-2 col-xs-offset-3 text-right">-->
<!--            Created by 24.04.12-->
<!--        </div>-->
<!--        <div class="col-xs-2 text-center">-->
<!--            <span class="glyphicon glyphicon-refresh"></span> Без рубрики-->
<!--        </div>-->
<!--        <div class="col-xs-2 text-left">-->
<!--            --><?php //if ( comments_open() && ! is_single() ) : ?>
<!--                --><?php //comments_popup_link( 'Нет комментариев', '1 комментарий', '% комментариев', 'comments-link', 'Комментарии отключены'); ?>
<!--            --><?php //endif ?>
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="container top-distance bottom-distance" id="page">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <div class="row">
                <div class="col-xs-8">
                    <?php the_content(); ?>
                </div>
                <div class="col-xs-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>