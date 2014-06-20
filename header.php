<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sergey.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body <?php body_class(); ?>>
<div class="container navbar-fixed-top" id="us-top-video" data-toggle="modal" data-target="#videoModal">
    <div class="row">
        <div class="col-xs-12 text-center">
            <a href="#"></a>
        </div>
    </div>
</div>
<div class="container navbar-fixed-top" id="us-top-nav">
    <div class="row">
        <div class="col-xs-3" id="us-top-nav-logo">
            <a href=" <?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""/>
            </a>
        </div>
        <?php wp_nav_menu(array('menu' => 'Primary Menu', 'container' => 'div', 'container_class' => 'col-xs-7', 'container_id' => 'us-top-nav-menu')); ?>
        <div class="col-xs-2 hidden-sm hidden-xs" id="us-top-nav-lang">
            <div class="row">
                <?php language_selector_flags(); ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade<?php echo is_front_page() ? ' is-frontpage' : ''?>" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xlg">
        <div class="close" data-dismiss="modal">X</div>
        <div class="modal-content">
            <div class="modal-body">
                <iframe width="1170" height="658" src="//www.youtube.com/embed/KFobVa_hR-s" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<div class="modal fade contactsModal" id="contactsModal-ru" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xlg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="h2">Контакты (ru)</div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="h3">
                                    Режим работы
                                </div>
                                <h4>
                                    Пн-Пт 08:00 - 18:00<br/>
                                    Сб 08:00 - 14:00<br/>
                                    Вс Выходной
                                </h4>
                            </div>
                            <div class="col-xs-6">
                                <div class="h3">
                                    Мы находимся
                                </div>
                                <h4>
                                    Республика Казахстан,<br/>
                                    050012, г.Алматы,<br/>
                                    ул.Толе би, 99 угол ул.А.Байтурсынова
                                </h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="h3">
                                    Телефоны
                                </div>
                                <h4>
                                    +7 (727) 234-34-34<br/>
                                    +7 (727) 234-37-37
                                </h4>
                            </div>
                            <div class="col-xs-6">
                                <div class="h3">
                                    Факсы
                                </div>
                                <h4>
                                    +7 (727) 260-12-80<br/>
                                    +7 (727) 382-83-13
                                </h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="h3">
                                    Мобильные телефоны
                                </div>
                                <h4>
                                    +7​ (701​) 206-25-02 - регистратура отделения"ЭКО"<br/>
                                    +7 ​(​777​) ​578-00​-​88 - регистратура поликлиники
                                </h4>
                            </div>
                            <div class="col-xs-6">
                                <div class="h3">
                                    Телефон доверия
                                </div>
                                <h4>
                                    +7​ ​(707) 424-99-09<br/>
                                    +7 (701) 712-04-54
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="h2">Карта проезда</div>
                        <p>
                            <iframe width="553" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?t=m&amp;hl=ru-RU&amp;gl=US&amp;mapclient=embed&amp;q=%D0%A2%D3%A9%D0%BB%D0%B5+%D0%B1%D0%B8+%D0%BA%D3%A9%D1%88%D0%B5%D1%81%D1%96+99+%D0%90%D0%BB%D0%BC%D0%B0%D1%82%D1%8B+050012+%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D1%82%D0%B0%D0%BD&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%A2%D3%A9%D0%BB%D0%B5+%D0%B1%D0%B8+%D0%BA%D3%A9%D1%88%D0%B5%D1%81%D1%96+99,+%D0%90%D0%BB%D0%BC%D0%B0%D0%BB%D1%8B+%D0%B0%D1%83%D0%B4%D0%B0%D0%BD%D1%8B,+%D0%90%D0%BB%D0%BC%D0%B0%D1%82%D1%8B,+Almaty+City+050012,+%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D1%82%D0%B0%D0%BD&amp;z=14&amp;ll=43.255265,76.926368&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?t=m&amp;hl=ru-RU&amp;gl=US&amp;mapclient=embed&amp;q=%D0%A2%D3%A9%D0%BB%D0%B5+%D0%B1%D0%B8+%D0%BA%D3%A9%D1%88%D0%B5%D1%81%D1%96+99+%D0%90%D0%BB%D0%BC%D0%B0%D1%82%D1%8B+050012+%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D1%82%D0%B0%D0%BD&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%A2%D3%A9%D0%BB%D0%B5+%D0%B1%D0%B8+%D0%BA%D3%A9%D1%88%D0%B5%D1%81%D1%96+99,+%D0%90%D0%BB%D0%BC%D0%B0%D0%BB%D1%8B+%D0%B0%D1%83%D0%B4%D0%B0%D0%BD%D1%8B,+%D0%90%D0%BB%D0%BC%D0%B0%D1%82%D1%8B,+Almaty+City+050012,+%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D1%82%D0%B0%D0%BD&amp;z=14&amp;ll=43.255265,76.926368&amp;source=embed" style="color:#0000FF;text-align:left">Просмотреть увеличенную карту</a></small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade contactsModal" id="contactsModal-en" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xlg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="h2">Контакты (en)</div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="h3">
                                    Режим работы
                                </div>
                                <h4>
                                    Пн-Пт 08:00 - 18:00<br/>
                                    Сб 08:00 - 14:00<br/>
                                    Вс Выходной
                                </h4>
                            </div>
                            <div class="col-xs-6">
                                <div class="h3">
                                    Мы находимся
                                </div>
                                <h4>
                                    Республика Казахстан,<br/>
                                    050012, г.Алматы,<br/>
                                    ул.Толе би, 99 угол ул.А.Байтурсынова
                                </h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="h3">
                                    Телефоны
                                </div>
                                <h4>
                                    +7 (727) 234-34-34<br/>
                                    +7 (727) 234-37-37
                                </h4>
                            </div>
                            <div class="col-xs-6">
                                <div class="h3">
                                    Факсы
                                </div>
                                <h4>
                                    +7 (727) 260-12-80<br/>
                                    +7 (727) 382-83-13
                                </h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="h3">
                                    Мобильные телефоны
                                </div>
                                <h4>
                                    +7​ (701​) 206-25-02 - регистратура отделения"ЭКО"<br/>
                                    +7 ​(​777​) ​578-00​-​88 - регистратура поликлиники
                                </h4>
                            </div>
                            <div class="col-xs-6">
                                <div class="h3">
                                    Телефон доверия
                                </div>
                                <h4>
                                    +7​ ​(707) 424-99-09<br/>
                                    +7 (701) 712-04-54
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="h2">Карта проезда</div>
                        <p>
                            <iframe width="553" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?t=m&amp;hl=ru-RU&amp;gl=US&amp;mapclient=embed&amp;q=%D0%A2%D3%A9%D0%BB%D0%B5+%D0%B1%D0%B8+%D0%BA%D3%A9%D1%88%D0%B5%D1%81%D1%96+99+%D0%90%D0%BB%D0%BC%D0%B0%D1%82%D1%8B+050012+%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D1%82%D0%B0%D0%BD&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%A2%D3%A9%D0%BB%D0%B5+%D0%B1%D0%B8+%D0%BA%D3%A9%D1%88%D0%B5%D1%81%D1%96+99,+%D0%90%D0%BB%D0%BC%D0%B0%D0%BB%D1%8B+%D0%B0%D1%83%D0%B4%D0%B0%D0%BD%D1%8B,+%D0%90%D0%BB%D0%BC%D0%B0%D1%82%D1%8B,+Almaty+City+050012,+%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D1%82%D0%B0%D0%BD&amp;z=14&amp;ll=43.255265,76.926368&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?t=m&amp;hl=ru-RU&amp;gl=US&amp;mapclient=embed&amp;q=%D0%A2%D3%A9%D0%BB%D0%B5+%D0%B1%D0%B8+%D0%BA%D3%A9%D1%88%D0%B5%D1%81%D1%96+99+%D0%90%D0%BB%D0%BC%D0%B0%D1%82%D1%8B+050012+%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D1%82%D0%B0%D0%BD&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%A2%D3%A9%D0%BB%D0%B5+%D0%B1%D0%B8+%D0%BA%D3%A9%D1%88%D0%B5%D1%81%D1%96+99,+%D0%90%D0%BB%D0%BC%D0%B0%D0%BB%D1%8B+%D0%B0%D1%83%D0%B4%D0%B0%D0%BD%D1%8B,+%D0%90%D0%BB%D0%BC%D0%B0%D1%82%D1%8B,+Almaty+City+050012,+%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D1%82%D0%B0%D0%BD&amp;z=14&amp;ll=43.255265,76.926368&amp;source=embed" style="color:#0000FF;text-align:left">Просмотреть увеличенную карту</a></small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade contactsModal" id="contactsModal-kz" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xlg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="h2">Контакты (kz)</div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="h3">
                                    Режим работы
                                </div>
                                <h4>
                                    Пн-Пт 08:00 - 18:00<br/>
                                    Сб 08:00 - 14:00<br/>
                                    Вс Выходной
                                </h4>
                            </div>
                            <div class="col-xs-6">
                                <div class="h3">
                                    Мы находимся
                                </div>
                                <h4>
                                    Республика Казахстан,<br/>
                                    050012, г.Алматы,<br/>
                                    ул.Толе би, 99 угол ул.А.Байтурсынова
                                </h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="h3">
                                    Телефоны
                                </div>
                                <h4>
                                    +7 (727) 234-34-34<br/>
                                    +7 (727) 234-37-37
                                </h4>
                            </div>
                            <div class="col-xs-6">
                                <div class="h3">
                                    Факсы
                                </div>
                                <h4>
                                    +7 (727) 260-12-80<br/>
                                    +7 (727) 382-83-13
                                </h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="h3">
                                    Мобильные телефоны
                                </div>
                                <h4>
                                    +7​ (701​) 206-25-02 - регистратура отделения"ЭКО"<br/>
                                    +7 ​(​777​) ​578-00​-​88 - регистратура поликлиники
                                </h4>
                            </div>
                            <div class="col-xs-6">
                                <div class="h3">
                                    Телефон доверия
                                </div>
                                <h4>
                                    +7​ ​(707) 424-99-09<br/>
                                    +7 (701) 712-04-54
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="h2">Карта проезда</div>
                        <p>
                            <iframe width="553" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?t=m&amp;hl=ru-RU&amp;gl=US&amp;mapclient=embed&amp;q=%D0%A2%D3%A9%D0%BB%D0%B5+%D0%B1%D0%B8+%D0%BA%D3%A9%D1%88%D0%B5%D1%81%D1%96+99+%D0%90%D0%BB%D0%BC%D0%B0%D1%82%D1%8B+050012+%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D1%82%D0%B0%D0%BD&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%A2%D3%A9%D0%BB%D0%B5+%D0%B1%D0%B8+%D0%BA%D3%A9%D1%88%D0%B5%D1%81%D1%96+99,+%D0%90%D0%BB%D0%BC%D0%B0%D0%BB%D1%8B+%D0%B0%D1%83%D0%B4%D0%B0%D0%BD%D1%8B,+%D0%90%D0%BB%D0%BC%D0%B0%D1%82%D1%8B,+Almaty+City+050012,+%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D1%82%D0%B0%D0%BD&amp;z=14&amp;ll=43.255265,76.926368&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?t=m&amp;hl=ru-RU&amp;gl=US&amp;mapclient=embed&amp;q=%D0%A2%D3%A9%D0%BB%D0%B5+%D0%B1%D0%B8+%D0%BA%D3%A9%D1%88%D0%B5%D1%81%D1%96+99+%D0%90%D0%BB%D0%BC%D0%B0%D1%82%D1%8B+050012+%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D1%82%D0%B0%D0%BD&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%A2%D3%A9%D0%BB%D0%B5+%D0%B1%D0%B8+%D0%BA%D3%A9%D1%88%D0%B5%D1%81%D1%96+99,+%D0%90%D0%BB%D0%BC%D0%B0%D0%BB%D1%8B+%D0%B0%D1%83%D0%B4%D0%B0%D0%BD%D1%8B,+%D0%90%D0%BB%D0%BC%D0%B0%D1%82%D1%8B,+Almaty+City+050012,+%D0%9A%D0%B0%D0%B7%D0%B0%D1%85%D1%81%D1%82%D0%B0%D0%BD&amp;z=14&amp;ll=43.255265,76.926368&amp;source=embed" style="color:#0000FF;text-align:left">Просмотреть увеличенную карту</a></small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
