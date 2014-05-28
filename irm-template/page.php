<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php endwhile; ?>

<div class="container" id="tools">
    <div class="row">
        <div class="col-md-6">
            <a href="#">Home</a> > <a href="#">Services</a> > About Us
        </div>
        <div class="col-md-3 col-md-offset-3">
            <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Type search query">
            </div>
        </div>
    </div>
</div>

<div class="container gray text-center" id="title">
    <h1>
        <?php the_title(); ?>
    </h1>
</div>
<div class="container gray bottom-distance" id="info">
    <div class="row">
        <div class="col-md-2 col-md-offset-3 text-right">
            Created by 24.04.12
        </div>
        <div class="col-md-2 text-center">
            <span class="glyphicon glyphicon-refresh"></span> Без рубрики
        </div>
        <div class="col-md-2 text-left">
            <?php if ( comments_open() && ! is_single() ) : ?>
                <?php comments_popup_link( 'Нет комментариев', '1 комментарий', '% комментариев', 'comments-link', 'Комментарии отключены'); ?>
            <?php endif ?>
        </div>
    </div>
</div>

<div class="container top-distance bottom-distance" id="page">
    <div class="row">
        <div class="col-md-8">
            <?php the_content(); ?>
            <hr/>
            <div class="row">
                <div class="col-md-8">
                    <h3>Добавить комментарий</h3>
                    <p>
                        Ваш email не будет опубликован. обязательные поля отмечены звездочкой.
                    </p>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ваше имя</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ваш email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ваш комментарий</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Добавить комментарий</button>
                    <?php comments_template(); ?>
                </div>
            </div>
            <hr/>
            <h3>Комментарии <span class="badge">42</span></h3>
            <div class="row us-comment-wrapper">
                <div class="col-md-1">
                    <img src="http://marieclaire.media.ipcdigital.co.uk/11116/00007dae0/5ece/scarlett-johansson-pregnant.jpg" alt="" class="img-responsive img-circle"/>
                </div>
                <div class="col-md-11">
                    <div class="us-comment-name">
                        Scarlett Johansson
                    </div>
                    <div class="us-comment-date">
                        21 may 2014 on 4:45 PM
                    </div>
                    <div class="us-comment-text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </div>
                    <hr/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <img src="http://4.bp.blogspot.com/-ZenS7qZcK5U/UGl62sHTVEI/AAAAAAAACug/4s383AA64ik/s1600/Leonardo+DiCaprio.jpg" alt="" class="img-responsive img-circle"/>
                </div>
                <div class="col-md-11">
                    <h4>
                        Leonardo Di Caprio
                    </h4>
                    <h5>
                        21 may 2014 on 4:45 PM
                    </h5>
                    <div>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </div>
                    <hr/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <img src="https://pbs.twimg.com/profile_images/3098569208/85deb5c3e67fe6e7e21e641c29910553.jpeg" alt="" class="img-responsive img-circle"/>
                </div>
                <div class="col-md-11">
                    <h4>
                        Silvia Alonso
                    </h4>
                    <h5>
                        21 may 2014 on 4:45 PM
                    </h5>
                    <div>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <h3>Новости</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3>Новости</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3>Новости</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>