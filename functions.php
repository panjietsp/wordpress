<?php

/*
 *自定义内容类型: movie
 */
 
 function movie_type_define(){
	 $labels=array(
		'name'	=>'电影',
		'singular_name'	=>'电影',
		'add_new'	=>'添加电影',
		'add_new_item'	=>'添加电影资料',
		'edit_item'	=>'编辑电影资料',
		'new_item'	=>'新电影',
		'all_items'	=>'所有电影',
		'view_item'	=>'查看电影',
		'search_items'	=>'搜索电影',
		'memu_name'	=>'电影'
	 );
	 $args=array(
		'public'	=>true,
		'labels'	=>$labels,
		'memu_position'	=>5,
		'supports'	=>array('title','custom-fields'),
	 );
	 register_post_type('movie',$args);
 }
 add_action('init','movie_type_define');
 
// Show posts of 'post', 'page' and 'movie' post types on home page
function add_my_post_types_to_query( $query ) {
  if ( is_home() && $query->is_main_query() )
    $query->set( 'post_type', array('movie') );
  return $query;
}
add_action( 'pre_get_posts', 'add_my_post_types_to_query' );