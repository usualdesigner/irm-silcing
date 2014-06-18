<div class="container top-distance bottom-distance gray" id="social">
    <div class="row">
        <div class="col-xs-2 col-xs-offset-5 text-center">
            <div class="row">
                <div class="col-xs-6 text-center">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-icon-yt.png" alt="" class="img-responsive"/>
                    </a>
                </div>
                <div class="col-xs-6 text-center">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-icon-fb.png" alt="" class="img-responsive"/>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div class="container gray bottom-distance" id="menu">-->
<!--    <div class="row">-->
<!--        --><?php //wp_nav_menu(array('menu' => 'Footer Menu', 'menu_class' => 'nav navbar-nav us-footer-navbar', 'container' => '')); ?>
<!--    </div>-->
<!--</div>-->
<div class="container gray" id="us-footer-copyright">
    <div class="text-center" id="us-footer-copyright-owner">
        <p>
            © <?php echo get_bloginfo('name'); ?>, (<?php echo date('Y'); ?>) <?php _e('All rights reserved','irm-template'); ?>.
        </p>
    </div>
    <div class="text-center" id="us-footer-copyright-license">
        <p>
            <?php _e('State license number 4 AA-​​0105404 from 14.04.2010','irm-template'); ?><br/>
            <?php _e('State license number 13006107 from 22.04.2013','irm-template'); ?><br/>
        </p>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.bxslider/jquery.bxslider.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
</body>
</html>