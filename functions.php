<?php



if ( ! function_exists( 'oliva_meni' ) ) :

function oliva_meni() {
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'oliva' ),
		'social'  => esc_html__( 'social', 'oliva' ),
	) );
}
 

endif;

add_action( 'after_setup_theme', 'oliva_meni' );

function oliva_scripts() {
	
	wp_enqueue_style( 'oliva-style', get_stylesheet_uri() );
	wp_enqueue_style( 'oliva-fonts', get_template_directory_uri() .'/css-fonts/fonts.css' );
	wp_enqueue_style( 'oliva-fonts-awesome', get_template_directory_uri() .'/css-fonts/font-awesome.min.css' );
	wp_enqueue_style( 'oliva-fotorama', get_template_directory_uri() .'/fotorama/fotorama.css' );
	wp_enqueue_script( 'oliva-fotorama', get_template_directory_uri() .'/fotorama/fotorama.js');
	wp_enqueue_script( 'oliva-jquery', get_template_directory_uri() .'/js/jquery-1.12.1.min.js');
	wp_enqueue_script( 'oliva-mini-menu', get_template_directory_uri() .'/js/mini-menu.js');
	wp_enqueue_script( 'oliva-top-button', get_template_directory_uri() .'/js/top-button.js');
	wp_enqueue_script( 'oliva-google-map', get_template_directory_uri() .'/js/google-map.js');
	wp_enqueue_script( 'oliva-contact-form-validator', get_template_directory_uri() .'/js/gen_validatorv31.js');
	wp_enqueue_style( 'oliva-lightbox', get_template_directory_uri() .'/css/lightbox.css' );
	wp_enqueue_script( 'oliva-lightbox', get_template_directory_uri() .'/js/lightbox.min.js');
	
}
add_action( 'wp_enqueue_scripts', 'oliva_scripts' );

function oliva_widgets_init() {
        register_sidebar( array(
                'name'          => esc_html__( 'footer', 'oliva' ),
                'id'            => 'sidebar-1',
                'description'   => '',
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
        ) );
		
		function my_search_form($text) {
			 $text = str_replace('value="Search"', 'value=""', $text);
			 return $text;
		}
		add_filter('get_search_form', 'my_search_form');
}
add_action( 'widgets_init', 'oliva_widgets_init' );


add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}

function oliva_social_menu() {
if ( has_nav_menu( 'social' ) ) {

	wp_nav_menu(
		array(
			'theme_location'  => 'social',
			'container'       => 'div',
			'container_id'    => 'menu-social',
			'container_class' => 'menu-social widget',
			'menu_id'         => 'menu-social-items',
			'menu_class'      => 'menu-items',
			'depth'           => 1,
			'link_before'     => '<span class="screen-reader-text">',
			'link_after'      => '</span>',
			'fallback_cb'     => '',
		)
	);

	}
}

?>