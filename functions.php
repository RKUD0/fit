<?php
 
function sample_scripts(){
  wp_enqueue_style('style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'sample_scripts');
  
 
//カスタムメニュー
add_theme_support('menus');

function prefix_nav_description( $item_output, $item, $depth, $args ) {
 if ( !empty( $item->description ) ) {
 $item_output = str_replace( '">' . $args->link_before . $item->title, '">' . $args->link_before . '<strong>' . $item->title . '</strong>' . '<span class="menu-item-description">' . $item->description . '</span>' , $item_output );
 }
 return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 4 );

function post_has_archive( $args,$post_type) {
    if('post' == $post_type){
        $args['rewrite'] =true ;
        $args['has_archive'] = 'topic';
        $args['label']='TOPIC';
    }
    return $args;
}
add_filter('register_post_type_args','post_has_archive',10,2);

function column_posts($query) {
    /*管理画面、メインクエリに干渉させないため */
  if(is_admin() ||!$query ->is_main_query()) {
      return ;
  }  

  /* TOPIC一覧にて表示件数を１０件にする*/
  if ($query -> is_archive('topoi')) {
      $query -> set('posts_per_page','10');
      return;
  }
}
add_action('pre_get_posts','column_posts');

function staff_register() {
    $labels = [
        "edit_item" => "Edit",
    ];
    $args = [
        "label" => "スタッフ紹介" ,
        "labels" => $labels ,
        "description" => "" ,
        "public" => true ,
        "show_in_rest" => true ,
        "rest_base" => "" ,
        "rest_controller_class" => "WP_REST_Posts_Controller" ,
        "has_archive" => false ,
        "delete_with_user" => false ,
        "exclude_from_search" => false ,
        "map_meta_cap" => true ,
        "hierarchical" => true ,
        "rewrite" => ["slugs" => "スタッフ紹介","with_front" =>true],
        "query_var" => true ,
        "menu_position" => 3,
        "supports" => ["title","editor","thumbnail",]

    ];
    register_post_type("staff",$args);
}
add_action('init','staff_register');

function time_register() {
    $labels = [
        "edit_item" => "Edit",
    ];
    $args = [
        "label" => "時間割" ,
        "labels" => $labels ,
        "description" => "" ,
        "public" => true ,
        "show_in_rest" => true ,
        "rest_base" => "" ,
        "rest_controller_class" => "WP_REST_Posts_Controller" ,
        "has_archive" => false ,
        "delete_with_user" => false ,
        "exclude_from_search" => false ,
        "map_meta_cap" => true ,
        "hierarchical" => true ,
        "rewrite" => ["slugs" => "時間割","with_front" =>true],
        "query_var" => true ,
        "menu_position" => 4,
        "supports" => ["title","editor","thumbnail",]

    ];
    register_post_type("time",$args);
}
add_action('init','time_register');