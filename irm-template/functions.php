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