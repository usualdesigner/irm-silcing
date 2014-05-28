<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sergey.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        @font-face {
            font-family: "wf_SegoeUILight";
            src: url('<?php echo get_template_directory_uri(); ?>/./assets/fonts/SegoeUI/latest.eot') format('embedded-opentype'), url('<?php echo get_template_directory_uri(); ?>/./assets/fonts/SegoeUI/latest.svg') format('svg'), url('<?php echo get_template_directory_uri(); ?>/./assets/fonts/SegoeUI/latest.ttf') format('truetype'), url('<?php echo get_template_directory_uri(); ?>/./assets/fonts/SegoeUI/latest.woff') format('woff');
        }
        body {
            font-family: "wf_SegoeUILight";
        }
        .us-home-subtitle{
            border-bottom: 1px solid #DDCFD2;
            margin-bottom: 33px;
        }
        .us-home-subtitle > .text{
            padding: 0 1em;
            background-color: #fff;
            display: table;
            margin: 0 auto -15px;
        }
    </style>
</head>
<body>
<div class="container navbar-fixed-top" id="us-top-video">
    <div class="row">
        <div class="col-md-12 text-center">
            show video
        </div>
    </div>
</div>
<div class="container navbar-fixed-top" id="us-top-nav">
    <div class="row">
        <div class="col-md-3" id="us-top-nav-logo">
            <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""/>
            </a>
        </div>
        <div class="col-md-7" id="us-top-nav-menu">
            <div class="row">
                <div class="col-md-2">
                    <a href="#" class="text-center">Menu Item</a>
                </div>
                <div class="col-md-2">
                    <a href="#" class="text-center">Menu Item</a>
                </div>
                <div class="col-md-2">
                    <a href="#" class="text-center">Menu Item</a>
                </div>
                <div class="col-md-2">
                    <a href="#" class="text-center">Menu Item</a>
                </div>
                <div class="col-md-2">
                    <a href="#" class="text-center">Menu Item</a>
                </div>
                <div class="col-md-2">
                    <a href="#" class="text-center" data-toggle="modal" data-target="#contactsModal">Contacts</a>
                </div>
            </div>
        </div>
        <div class="col-md-2" id="us-top-nav-lang">
            <div class="row">
                <div class="col-md-3 text-center">
                    <a href="#">Rus</a>
                </div>
                <div class="col-md-3 text-center">
                    <a href="#">Kaz</a>
                </div>
                <div class="col-md-3 text-center">
                    <a href="#">Eng</a>
                </div>
            </div>
        </div>
    </div>
</div>

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
                            <img src="<?php the_sub_field('top_slider_image'); ?>" alt="...">
                        </div>
                        <?php $_c++;?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="modal fade" id="contactsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="h2">Контакты</div>
                        <p>
                            Спонсорство индуцирует экспериментальный стиль менеджмента, используя опыт предыдущих кампаний. До недавнего времени считалось, что коммуникация отталкивает анализ зарубежного опыта, опираясь на опыт западных коллег. Косвенная реклама экономит связанный медиамикс, отвоевывая рыночный сегмент. Рекламный макет, конечно, детерминирует связанный PR, признавая определенные рыночные тенденции.
                        </p>
                        <div class="h3">
                            Режим работы
                        </div>
                        <h5>
                            Пн-Пт | 08:00 - 18:00<br/>
                            Сб | 08:00 - 14:00<br/>
                            Вс | Выходной
                        </h5>
                    </div>
                    <div class="col-md-6">
                        <div class="h2">Карта проезда</div>
                        <p>
                            <img src="http://maps.googleapis.com/maps/api/staticmap?center=Brooklyn+Bridge,New+York,NY&zoom=13&size=427x200&maptype=roadmap
&markers=color:blue%7Clabel:S%7C40.702147,-74.015794&markers=color:green%7Clabel:G%7C40.711614,-74.012318
&markers=color:red%7Ccolor:red%7Clabel:C%7C40.718217,-73.998284&sensor=false" alt=""/>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="h4">Телефоны</div>
                        <div class="h5">
                            +7 (727) 234-34-34<br/>
                            +7 (727) 234-34-34
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="h4">Факсы</div>
                        <div class="h5">
                            +7 (727) 234-34-34<br/>
                            +7 (727) 234-34-34
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="h4">Телефон доверия</div>
                        <div class="h5">
                            +7 (727) 234-34-34<br/>
                            +7 (727) 234-34-34
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="h4">Мобильные телефоны</div>
                        <div class="h5">
                            +7 (727) 234-34-34<br/>
                            +7 (727) 234-34-34
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if (have_rows('middle_slider_gallery')): ?>
<div class="container bottom-distance" id="home-tab-set">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <ul class="nav-tabs row">
                <?php $_c = 0;?>
                <?php while (have_rows('middle_slider_gallery')) : the_row(); ?>
                    <li class="text-center col-md-3 <?php echo ($_c == 0) ? 'active' : ''; ?>">
                        <?php if ($_c == 0) {
                            $_color = 'magenta';
                        } elseif ($_c == 1) {
                            $_color = 'orange';
                        } elseif ($_c == 2) {
                            $_color = 'cyan';
                        } elseif ($_c == 3) {
                            $_color = 'violet';
                        } ?>
                        <a href="#tab-<?php echo $_c; ?>" data-toggle="tab" class="color-<?php echo $_color; ?>">
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
            <div class="col-md-10 col-md-offset-1 tab-pane fade in <?php echo ($_c == 0) ? 'active' : ''; ?>" id="tab-<?php echo $_c; ?>">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php the_sub_field('image_of_slide'); ?>" alt="" class="img-responsive"/>
                    </div>
                    <div class="col-md-6">
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

<?php $faq_posts = query_posts(array('post_type' => 'faq','posts_per_page' => -1,)); ?>
<?php if($faq_posts): ?>
    <div class="container bottom-distance" id="home-faq-slider">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-center us-home-subtitle">
                    <div class="text">
                        <div class="text">Frequently Asked Question</div>
                    </div>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="row">
                    <div class="us-faq-bx-slider-enable">
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="col-md-3 text-center">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1 text-center">
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php echo get_field('faq_icon') ?>" alt="" class="img-responsive img-rounded"/>
                                        </a>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </div>
                                </div>
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
        <div class="col-md-10 col-md-offset-1">
            <h2 class="text-center us-home-subtitle">
                <div class="text">Our Team</div>
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 us-tabs-wrapper">
            <ul class="nav-tabs row">
                <?php $_d = 0; ?>
                <?php foreach ($departaments as $_departament): ?>
                    <li class="col-md-3 text-center no-gap <?php echo ($_d == 0) ? 'active' : '';?>">
                        <a href="#doctors-tab-<?php echo $_d; ?>" class="text-center home-doctors-control-item" data-toggle="tab">
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
        <div class="col-md-8 col-md-offset-2 tab-pane fade in <?php echo ($_d == 1) ? 'active' : '';?>" id="doctors-tab-<?php echo $_d; ?>">
            <div class="row">
                <div class="us-dep<?php echo $_d; ?>-bx-slider-enable">
                    <?php query_posts(array('posts_per_page' => -1, 'post_type' => 'doctor', 'tax_query' => array('taxonomy' => 'departament', 'field' => 'term_id', 'terms' => $_departament->term_id))); ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="col-md-3 text-center">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 text-center">
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
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel"><?php the_title(); ?></h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="<?php echo get_field('big_doctor_photo'); ?>" alt="" class="img-responsive"/>
                                </div>
                                <div class="col-md-6">
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
            <div class="col-md-10 col-md-offset-1">
                <h2 class="text-center us-home-subtitle">
                    <div class="text">Latest News</div>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-3 us-home-latest-news-date">
                                    <div class="h1 text-center">
                                        <?php echo get_the_date('d'); ?>
                                    </div>
                                    <div class="h5 text-center">
                                        <?php echo get_the_date('M'); ?>
                                    </div>
                                </div>
                                <h4 class="col-md-9 us-home-latest-news-title"><?php the_title(); ?></h4>
                            </div>
                            <div class="row">
                                <div class="col-md-12"><?php get_the_content(); ?></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-4 text-center bottom-distance top-distance">
                <a href="#" class="us-link-1">Все новости</a>
            </div>
        </div>
    <?php endif; ?>
</div>
<div class="container top-distance gray" id="social">
    <div class="row">
        <div class="col-md-2 col-md-offset-5 text-center">
            <div class="row">
                <div class="col-md-6 text-center">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/yt.png" alt="" class="img-responsive"/>
                    </a>
                </div>
                <div class="col-md-6 text-center">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb.png" alt="" class="img-responsive"/>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container gray bottom-distance" id="menu">
    <div class="row">
        <ul class="nav navbar-nav us-footer-navbar">
            <li class="active"><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
        </ul>
    </div>
</div>
<div class="container gray" id="us-footer-copyright">
    <div class="text-center" id="us-footer-copyright-owner">
        <p>
            © ИРМ, 2014. Все права защищены.
        </p>
    </div>
    <div class="text-center" id="us-footer-copyright-license">
        <p>
            Государственная лицензия АА-4 №0105404 от 14.04.2011<br/>бессрочно выдана бла бла...
        </p>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.bxslider/jquery.bxslider.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
</body>
</html>