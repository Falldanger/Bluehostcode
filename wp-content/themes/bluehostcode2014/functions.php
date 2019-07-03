<?php 

/*Миниатюра*/

add_theme_support('post-thumbnails');


$args = array(
	'name'          => 'Recent Posts',
	'id'            => 'sidebar',
	'description'   => 'Добавляем виджеты',
	'before_widget' => '<div class="sidebar widget widget_categories">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
);

register_sidebar( $args );


 ?>