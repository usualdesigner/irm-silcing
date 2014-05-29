<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
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
<body <?php body_class(); ?>>
<div class="container navbar-fixed-top" id="us-top-video">
    <div class="row">
        <div class="col-md-12 text-center">
            <a href="#"></a>
        </div>
    </div>
</div>
<div class="container navbar-fixed-top" id="us-top-nav">
    <div class="row">
        <div class="col-md-3" id="us-top-nav-logo">
            <a href=" <?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""/>
            </a>
        </div>
        <?php wp_nav_menu(array('menu' => 'Primary Menu', 'container' => 'div', 'container_class' => 'col-md-7', 'container_id' => 'us-top-nav-menu')); ?>
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
