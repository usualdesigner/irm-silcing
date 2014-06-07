<?php if (post_password_required()) {
    return;
}
$comments = array_reverse($comments,true);
?>
<?php if (have_comments()) : ?>
    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
        <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text"><?php _e('Comment navigation', 'twentyfourteen'); ?></h1>

            <div
                class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'twentyfourteen')); ?></div>
            <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'twentyfourteen')); ?></div>
        </nav>
    <?php endif; ?>
    <?php
    wp_list_comments(array(
        'style' => 'div',
        'short_ping' => true,
        'avatar_size' => 34,
        'callback' => 'usCustomCommentCallback'
    ));
    ?>
    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
        <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text"><?php _e('Comment navigation', 'twentyfourteen'); ?></h1>
            <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'twentyfourteen')); ?></div>
            <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'twentyfourteen')); ?></div>
        </nav>
    <?php endif; ?>
    <?php if (!comments_open()) : ?>
        <p class="no-comments"><?php _e('Comments are closed.', 'twentyfourteen'); ?></p>
    <?php endif; ?>
<?php endif; ?>

<?php comment_form(array(
    'comment_field' => '<textarea id="comment" name="comment" class="form-control" rows="3" placeholder="'. _x( 'Comment', 'noun' ) .'"></textarea><br/>',
    'fields' => array(
        'author' =>
            '<div class="form-group">
                <label for="author">' . __( 'Name' ) . '</label>
                <input id="author" name="author" type="text" placeholder="' . __( 'Name' ) . '" class="form-control" value="' . esc_attr( $commenter['comment_author'] ) .
            '">
            </div>',
        'email' =>
            '<div class="form-group">
        <label for="email">' . __( 'Email' ) . '</label>
                <input id="email" name="email" type="email" placeholder="' . __( 'Email' ) . '" class="form-control" value="' . esc_attr( $commenter['comment_author_email'] ) .
            '">
            </div>',
//        'url' =>
//            '<div class="form-group">
//        <label for="url">' . __( 'Website' ) . '</label>
//                <input id="url" name="url" type="text" placeholder="' . __( 'Website' ) . '" class="form-control" value="' . esc_attr( $commenter['comment_author_url'] ) .
//            '">
//            </div>',
    ),
        'label_submit' => 'Отправить Отзыв',
    'title_reply' => 'Оставьте Ваш отзыв'
)); ?>