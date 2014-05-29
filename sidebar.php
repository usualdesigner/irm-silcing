<?php wp_reset_postdata(); ?>
<?php $news_posts = query_posts(array('posts_per_page' => 5, 'post_type' => 'news', 'orderby' => 'date DESC')); ?>
<?php if($news_posts): ?>
    <div class="row">
        <div class="col-md-12">
            <h3>Новости</h3>
            <ul>
                <?php while (have_posts()) : the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>