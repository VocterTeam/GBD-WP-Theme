<?php 

/**
* Include theme scripts
*/
function gbd_scripts() {
	//==================================================== CSS ====================================================//
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'fonts-css', get_template_directory_uri() . '/css/fonts.css' );
	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_style( 'media-css', get_template_directory_uri() . '/css/media.css' );
	wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri() . '/libs/OwlCarousel2-2.2.0/assets/owl.carousel.min.css' );
	wp_enqueue_style( 'owl-theme-default-css', get_template_directory_uri() . '/libs/OwlCarousel2-2.2.0/assets/owl.theme.default.min.css' );

	//==================================================== JS ====================================================//
	wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/libs/jquery/jquery-3.1.1.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/libs/OwlCarousel2-2.2.0/owl.carousel.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'parallax-js', get_template_directory_uri() . '/libs/parallax/parallax.js', array(), '1.0.0', true );
	wp_enqueue_script( 'google-maps-js', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBu_QyUKZSUTkXK2-XDf7FKggvI8bObuhA&callback=initMap', array(), '1.0.0', true );
	wp_enqueue_script( 'common-js', get_template_directory_uri() . '/js/common.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'gbd_scripts' );





/**
* Register nav menu
*/
function gbd_register_nav_menu() {
  register_nav_menu( 'header', __('Верхнее меню') );
  register_nav_menu( 'footer', __('Нижнее меню') );
}
add_action( 'after_setup_theme', 'gbd_register_nav_menu' );





/**
* Register thumbnails for any type posts
*/
add_theme_support( 'post-thumbnails', array( 'post' ) ); 





/**
* Remove <span> in cotact form 7
*/
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});




/**
* Add upload SVG type
*/
function gbd_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'gbd_mime_types');





/**
* Register options page ACF
*/
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();	
}





/**
* Add api key for ACF google map
*/
function gbd_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyBu_QyUKZSUTkXK2-XDf7FKggvI8bObuhA';
	return $api;
}
add_filter('acf/fields/google_map/api', 'gbd_acf_google_map_api');




/**
* Hide admin menu item "Custom Fields"
*/
add_filter('acf/settings/show_admin', '__return_false');




/**
* Custom Language Switcher for WPML
*/
function gbd_switcher_languages(){

  $html = '';
  $languages = icl_get_languages('skip_missing=1');

  if( 1 < count($languages) ){

    $html .= '<ul class="header__lang-list">';

    foreach($languages as $l){

    	if( $l['active'] ){
    		$html .= '<li id="current_lang" class="header__lang-item">';
    	} else {
    		$html .= '<li class="header__lang-item">';
    	}
			  $html .= '<a href="'.$l['url'].'">
					        <div class="header__lang-item-title">'.$l['translated_name'].'</div>
					        <div class="header__lang-icon" style="background-image: url('.$l['country_flag_url'].');"></div>
				        </a>
			      </li>';
    }

    $html .= '</ul>';
  }

  return $html;
}