<?php 

add_theme_support('post-thumbnails');

add_image_size('brxlsblog-feactured-image', 2000, 1200, true );

add_image_size('brxlsblog-ideal', 560, 350, true );

add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif; 

require_once ('wp-bootstrap-navwalker.php');

/*Creamos el carusel animado dentro del wp*/

function brxlsblog_post_type() {
	register_post_type('brxlsblog_slider',
		array(
			'labels' => array(
				'name' => __( 'Carusel' ),
				'singular_name' => __( 'Item' ),
				'add_new' => __( 'Nuevo item' ),
				'add_new_item' => ( 'Anadir nuevo item' ),
				'edit_item' => ( 'editar item' ),
				'featured_image' => ( 'Imagen del slider' )
			),
		'public' => true,
		'exclude_from_search' => true,
		'has_archive' => false,
		'show_in_nav_menus' => false,
		'menu_icon' => 'dashicons-slides',
		//'rewrite'=>array('slug'=>'carusel'),
		'supports' => array('title','editor','thumbnail')
		)
	);
}
add_action( 'init', 'brxlsblog_post_type' );

/*codigos cortos shrotcode*/
/*add_shortcode("responsiveTitle","responsiveBrxlsblog");

function responsiveBrxlsblog ($atts, $content = null) {
	$row = "row";
	$colxs = "col-xs-6";
	$colmd = "col-md-6";
	return "<div class=". $row ."><div class=" . $colxs . $colmd . ">" . $content ."</div></div>";
}*/

//sidebar y wigets

add_action ('widgets_init', 'brxlsblogWidgetsInit');

function brxlsblogWidgetsInit() {
	register_sidebar( array(
		'name' => __('Mi Sidebar', 'brxlsblog'),
		'id' => 'sidebar-1',
		'description'=>__('area para colocar los widgets', 'brxlsblog'),
		'class'=>'sidebar',
		'before_widget' => '<div class="row">
								<div class="col-md-12">',
		'after_widget' => '</div>
								</div>',
		'before_title'=> '<div class="row plusVu followUs">
							<div class="col-md-12 titleVu">
								<h1>',
		'after_title'=>'</h1>
							</div>
								</div>', 
	));
}

// Función para contar visualizaciones de un post.
function set_post_views() {
    if (is_single()) {
        $post_ID = get_the_ID();
        $count = get_post_meta( $post_ID, 'post_views', true );
 
        if ( $count == '' ) {
            delete_post_meta( $post_ID, 'post_views' );
            add_post_meta( $post_ID, 'post_views', 1 );
        } else {
            update_post_meta( $post_ID, 'post_views', ++$count );
        }
    }
}
add_action( 'wp', 'set_post_views' );
 
// Función para obtener el número de visualizaciones de un post
function get_post_views($post_ID){
    $count = get_post_meta($post_ID, 'post_views', true);
 
    if ($count == ''){
        delete_post_meta($post_ID, 'post_views');
        add_post_meta($post_ID, 'post_views', 0);
        return 0;
    }
    return $count;
}