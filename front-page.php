<?php get_header(); ?>

<?php if (have_rows('top_slider_gallery')): ?>
    <div class="container bottom-distance" id="home-top-slider">
        <div class="row">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php $_c = 0;?>
                    <?php while (have_rows('top_slider_gallery')) : the_row(); ?>
                    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $_c; ?>" class="<?php echo ($_c == 0) ? 'active' : ''; ?>"></li>
                        <?php $_c++;?>
                    <?php endwhile; ?>
                </ol>
                <div class="carousel-inner">
                    <?php $_c = 0;?>
                    <?php while (have_rows('top_slider_gallery')) : the_row(); ?>
                        <div class="item <?php echo ($_c == 0) ? 'active' : ''; ?>">
                            <a href="<?php the_sub_field('top_slider_link'); ?>">
                                <img src="<?php the_sub_field('top_slider_image'); ?>" alt="...">
                            </a>
                        </div>
                        <?php $_c++;?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if (have_rows('middle_slider_gallery')): ?>
<div class="container bottom-distance" id="home-tab-set">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <ul class="nav-tabs row">
                <?php $_c = 0;?>
                <?php while (have_rows('middle_slider_gallery')) : the_row(); ?>
                    <li class="text-center col-xs-3 <?php echo ($_c == 0) ? 'active' : ''; ?>">
                        <?php if ($_c == 0) {
                            $_color = 'magenta';
                        } elseif ($_c == 1) {
                            $_color = 'orange';
                        } elseif ($_c == 2) {
                            $_color = 'cyan';
                        } elseif ($_c == 3) {
                            $_color = 'violet';
                        } ?>
                        <a href="#tab-<?php echo $_c; ?>" data-toggle="tab" class="color-<?php echo $_color; ?>" style="background-position: <?php echo rand(0, 300); ?>px <?php echo rand(0, 93); ?>px, center bottom;">
                            <?php the_sub_field('title_of_tab_button'); ?>
                        </a>
                    </li>
                    <?php $_c++;?>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
    <div class="row tab-content">
        <?php $_c = 0;?>
        <?php while (have_rows('middle_slider_gallery')) : the_row(); ?>
            <div class="col-xs-10 col-xs-offset-1 tab-pane fade in <?php echo ($_c == 0) ? 'active' : ''; ?>" id="tab-<?php echo $_c; ?>">
                <div class="row">
                    <div class="col-xs-6">
                        <img src="<?php the_sub_field('image_of_slide'); ?>" alt="" class="img-responsive"/>
                    </div>
                    <div class="col-xs-6">
                        <h2><?php the_sub_field('title_of_slide'); ?></h2>
                        <p><?php the_sub_field('description_of_slide'); ?></p>
                        <a href="<?php echo get_permalink(get_sub_field('link_of_slide')->ID); ?>" class="us-link-1">Читать полностью</a>
                    </div>
                </div>
            </div>
            <?php $_c++;?>
        <?php endwhile; ?>
    </div>
</div>
<?php endif; ?>

<?php $faq_posts = query_posts(array('post_type' => 'faq','posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'date')); ?>
<?php if($faq_posts): ?>
    <div class="container bottom-distance" id="home-faq-slider">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <h2 class="text-center us-home-subtitle">
                    <div class="text">
<!--                        --><?php //$faqPostType = get_post_type_object( 'faq' ); ?>
<!--                        <div class="text">--><?php //echo $faqPostType->labels->name; ?><!--</div>-->
                        <div class="text">Часто задаваемые вопросы</div>
                    </div>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="row">
                    <div class="us-faq-bx-slider-enable">
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="col-xs-3 text-center">
                                <div class="row">
                                    <div class="col-xs-10 col-xs-offset-1 text-center">
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php echo get_field('faq_icon') ?>" alt="" class="img-responsive img-rounded"/>
                                        </a>
                                    </div>
                                </div>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php $departaments = get_terms(array('departaments'), array('orderby' => 'id','order' => 'ASC','hide_empty' => false,)); ?>
<?php if($departaments): ?>
    <div class="container bottom-distance" id="home-doctors-slider">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <h2 class="text-center us-home-subtitle">
<!--                --><?php //$doctorsPostType = get_post_type_object( 'doctor' ); ?>
<!--                <div class="text">--><?php //echo $doctorsPostType->labels->name; ?><!--</div>-->
                <div class="text">Наша команда</div>
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2 us-tabs-wrapper">
            <ul class="nav-tabs row">
                <?php $_d = 0; ?>
                <?php foreach ($departaments as $_departament): ?>
                    <li class="col-xs-3 text-center no-gap <?php echo ($_d == 0) ? 'active' : '';?>">
                        <a href="#doctors-tab-<?php echo $_departament->term_id; ?>" class="text-center home-doctors-control-item" data-toggle="tab">
                            <?php echo $_departament->name; ?>
                        </a>
                    </li>
                    <?php $_d++; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="row tab-content">

    <?php $_d = 0; ?>
    <?php foreach ($departaments as $_departament): ?>
        <?php $_d++; ?>
        <div class="col-xs-8 col-xs-offset-2 tab-pane fade in <?php echo ($_d == 1) ? 'active' : '';?>" id="doctors-tab-<?php echo $_departament->term_id; ?>">
            <div class="row">
                <div class="us-dep<?php echo $_d; ?>-bx-slider-enable">
                    <?php wp_reset_postdata(); ?>
                    <?php query_posts(array('order' => 'ASC', 'orderby' => 'id', 'posts_per_page' => -1, 'post_type' => 'doctor','tax_query' => array(array('taxonomy' => 'departaments','field' => 'term_id','terms' => $_departament->term_id)))); ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="col-xs-3 text-center">
                            <div class="row">
                                <div class="col-xs-10 col-xs-offset-1 text-center">
                                    <a href="#" data-toggle="modal" data-target="#doctor-<?php the_ID() ?>-modals">
                                        <img src="<?php echo get_field('small_doctor_photo'); ?>" alt="" class="img-responsive img-rounded"/>
                                        <?php the_title(); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

        <?php query_posts(array('posts_per_page' => -1, 'post_type' => 'doctor')); ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="modal fade" id="doctor-<?php the_ID() ?>-modals" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel"><?php the_title(); ?></h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xs-6">
                                    <img src="<?php echo get_field('big_doctor_photo'); ?>" alt="" class="img-responsive"/>
                                </div>
                                <div class="col-xs-6">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>

    </div>
    </div>
<?php endif; ?>

<?php wp_reset_postdata(); ?>
<?php $news_posts = query_posts(array('posts_per_page' => 3, 'post_type' => 'news', 'orderby' => 'date DESC')); ?>
<div class="container bottom-distance" id="us-home-latest-news">
    <?php if($news_posts): ?>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <h2 class="text-center us-home-subtitle">
<!--                    --><?php //$newsPostType = get_post_type_object( 'news' ); ?>
<!--                    <div class="text">--><?php //echo $newsPostType->labels->name; ?><!--</div>-->
                    <div class="text">Новости</div>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <div class="row">
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="col-xs-4">
                            <div class="row">
                                <div class="col-xs-3 us-home-latest-news-date">
                                    <div class="h1 text-center">
                                        <?php echo get_the_date('d'); ?>
                                    </div>
                                    <div class="h5 text-center">
                                        <?php echo get_the_date('M'); ?>
                                    </div>
                                </div>
                                <h4 class="col-xs-9 us-home-latest-news-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h4>
                            </div>
                            <div class="row">
                                <div class="col-xs-12"><?php get_the_content(); ?></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="col-xs-4 col-xs-offset-4 text-center bottom-distance top-distance">
                <a href="#" class="us-link-1">Все новости</a>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>