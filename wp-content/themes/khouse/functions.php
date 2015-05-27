<?php

function khouse_resources(){
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'khouse_resources');

//Navigation menus
register_nav_menus(array(
                'primary' => __( 'Primary Menu' ),
                'footer' => __( 'Footer Menu' ),
));

function get_parent_page_id(){
    global $post;
    if($post->post_parent){
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        
        return $ancestors[0];
    }
    return $post->ID;
}