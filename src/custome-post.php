<?php 
// //////////////////////////////////////////////////////////////CTP Zajęcia
function cr_cpt_zajecia() {

	$labels = array(
		'name'               => 'Zajęcia',
		'singular_name'      => 'Zajęcia',
		'menu_name'          => 'Zajęcia',
		'name_admin_bar'     => 'Zajęcia',
		'add_new'            => 'Dodaj',
		'add_new_item'       => 'Dodaj ',
		'new_item'           => 'Nowe zajęcie',
		'edit_item'          => 'Edytuj zajęcie ',
		'view_item'          => 'Zobacz zajęcie ',
		'all_items'          => 'Zajęcia',
		'search_items'       => 'Szukaj zajęć',
		'parent_item_colon'  => 'Parent :',
		'not_found'          => 'Nie znaleziono zajęcia',
		'not_found_in_trash' => 'Nie znaleziono zajęcia',
		
	);
	$args = array( 
	    'public' => true,
		'has_archive' => true,
		'show_in_rest' => true,
		'hierarchical'      => true,
		'menu_icon'     => get_template_directory_uri() . '/src/img/cpt-edu.png',
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'publicly_queryable' => true,
		'show_in_rest' => true,
		'supports'      => array( 'title', 'page-attributes', 'thumbnail', 'editor' ),
	);
    	register_post_type( 'zajecia', $args );

}
add_action( 'init', 'cr_cpt_zajecia' );

function cr_taxonomy_miasto() {
	$labels = array(
	  'name'              => __( 'Miasto' ),
	  'singular_name'     => __( 'Miasto' ),
	  'search_items'      => __( 'Szukaj' ),
	  'all_items'         => __( 'Wszystkie' ),
	  'parent_item'       => __( 'Rodzic' ),
	  'parent_item_colon' => __( 'Rodzic:' ),
	  'edit_item'         => __( 'Edytuj' ), 
	  'update_item'       => __( 'Zaktualizuj' ),
	  'add_new_item'      => __( 'Dodaj nową' ),
	  'new_item_name'     => __( 'Nowa ' ),
	  'menu_name'         => __( 'Miasto' ),
	);
	$args = array(
	  'labels' => $labels,
	  'hierarchical' => true,
	  'show_in_rest' => true,
	  'show_ui' => true,
	  
	  'rewrite' => array('slug' => 'miasto',  'with_front' => false,),
	);
	register_taxonomy( 'miasto', 'zajecia', $args );
  }
  add_action( 'init', 'cr_taxonomy_miasto', 0 );

  function cr_taxonomy_szkola() {
	$labels = array(
	  'name'              => __( 'Szkoła' ),
	  'singular_name'     => __( 'Szkoła' ),
	  'search_items'      => __( 'Szukaj' ),
	  'all_items'         => __( 'Wszystkie' ),
	  'parent_item'       => __( 'Rodzic' ),
	  'parent_item_colon' => __( 'Rodzic:' ),
	  'edit_item'         => __( 'Edytuj' ), 
	  'update_item'       => __( 'Zaktualizuj' ),
	  'add_new_item'      => __( 'Dodaj nową' ),
	  'new_item_name'     => __( 'Nowa ' ),
	  'menu_name'         => __( 'Szkoła' ),
	);
	$args = array(
	  'labels' => $labels,
	  'hierarchical' => true,
	  'show_in_rest' => true,
	  'show_ui' => true,
	  
	  'rewrite' => array('slug' => 'szkola',  'with_front' => false,),
	);
	register_taxonomy( 'szkola', 'zajecia', $args );
  }
  add_action( 'init', 'cr_taxonomy_szkola', 0 );


// //////////////////////////////////////////////////////////////CTP Eventy
function cr_cpt_events() {

	$labels = array(
		'name'               => 'Events',
		'singular_name'      => 'Event',
		'menu_name'          => 'Events',
		'name_admin_bar'     => 'Events',
		'add_new'            => 'Dodaj',
		'add_new_item'       => 'Dodaj ',
		'new_item'           => 'Nowe event',
		'edit_item'          => 'Edytuj event ',
		'view_item'          => 'Zobacz event ',
		'all_items'          => 'Eventy',
		'search_items'       => 'Szukaj event',
		'parent_item_colon'  => 'Parent :',
		'not_found'          => 'Nie znaleziono event',
		'not_found_in_trash' => 'Nie znaleziono event',
		
	);
	$args = array( 
	    'public' => true,
		'has_archive' => true,
		'show_in_rest' => true,
		'hierarchical'      => true,
		'menu_icon'     => get_template_directory_uri() . '/src/img/cpt-edu.png',
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'publicly_queryable' => true,
		'show_in_rest' => true,
		'supports'      => array( 'title', 'page-attributes', 'thumbnail', 'editor' ),
	);
    	register_post_type( 'events', $args );

}
add_action( 'init', 'cr_cpt_events' );
