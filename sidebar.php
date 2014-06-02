<?php wp_reset_postdata(); ?>
<?php $news_posts = query_posts(array('posts_per_page' => 5, 'post_type' => 'news', 'orderby' => 'date DESC')); ?>
<?php if($news_posts): ?>
    <div class="row us-sidebar-widget" id="us-sidebar-latest-news">
        <div class="col-xs-12">
            <h3>Новости</h3>
            <?php while (have_posts()) : the_post(); ?>
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
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h4>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>