<?php

register_nav_menu( 'primary', 'Primary Menu' );
register_nav_menu( 'footer', 'Footer Menu' );

add_action( 'admin_menu', 'mf_remove_menu_pages' );
function mf_remove_menu_pages() {
    remove_menu_page('edit.php');
}

function str_word($text, $counttext = 10, $sep = ' ') {
    $words = explode($sep, $text);
    if ( count($words) > $counttext )
        $text = join($sep, array_slice($words, 0, $counttext));
    return $text;
}

register_sidebar( array(
    'name' => __( 'Main Sidebar' ),
    'id' => 'sidebar',
    'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'twentytwelve' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

function us_search_form() {
    $form = '
    <form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
        <div class="form-group">
            <input type="text" class="form-control" value="' . get_search_query() . '" name="s" id="s" placeholder="' . __( 'Search' ) . '">
        </div>
    </form>';

    return $form;
}

add_filter( 'get_search_form', 'us_search_form' );

add_theme_support( 'html5', array( 'search-form' ) );

function usCustomCommentCallback($comment, $args, $depth){

    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);
    ?>

    <div class="row us-comment-wrapper" id="comment-<?php comment_ID() ?>">
        <div class="col-xs-1">
            <?php echo get_avatar( $comment, 40 ); ?>
        </div>
        <div class="col-xs-11">
            <div class="us-comment-name">
                <?php printf( __( '<cite class="fn">%s</cite> <span class="says">says:</span>' ), get_comment_author_link() ); ?>
            </div>
            <div class="us-comment-date text-muted">
                <?php printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
            </div>
            <div class="us-comment-text">
                <?php comment_text(); ?>
                <?php if ( $comment->comment_approved == '0' ) : ?>
                    <div class="alert alert-warning">
                        <?php _e( 'Your comment is awaiting moderation.' ); ?>
                    </div>
                <?php endif; ?>
            </div>
            <hr>
        </div>
<?php
}

add_filter('get_avatar','change_avatar_css');

function change_avatar_css($class) {
    $class = str_replace("class='avatar", "class='img-responsive img-circle ", $class) ;
    return $class;
}

function mytheme_init() {
    add_filter('comment_form_defaults','mytheme_comments_form_defaults');
}
add_action('after_setup_theme','mytheme_init');

function mytheme_comments_form_defaults($default) {
    unset($default['comment_notes_after']);
    return $default;
}

function language_selector_flags(){
    return false;
    $languages = icl_get_languages('skip_missing=0&orderby=key');
    if(!empty($languages)){
        foreach($languages as $l){
            echo '<div class="col-xs-3 text-center"><a href="'.$l['url'].'">';
            echo mb_substr($l['native_name'], 0, 3);
            echo '</a></div>';
        }
    }
}