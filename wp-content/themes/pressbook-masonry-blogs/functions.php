<?php
/**
 * This is the child theme for PressBook theme.
 *
 * (See https://developer.wordpress.org/themes/advanced-topics/child-themes/#how-to-create-a-child-theme)
 *
 * @package PressBook_Masonry_Blogs
 */

defined( 'ABSPATH' ) || die();

define( 'PRESSBOOK_MASONRY_BLOGS_VERSION', '1.0.9' );

/**
 * Load child theme text domain.
 */
function pressbook_masonry_blogs_setup() {
	load_child_theme_textdomain( 'pressbook-masonry-blogs', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'pressbook_masonry_blogs_setup', 11 );

/**
 * Load child theme services.
 *
 * @param  array $services Parent theme services.
 * @return array
 */
function pressbook_masonry_blogs_services( $services ) {
	require get_stylesheet_directory() . '/inc/classes/class-pressbook-masonry-blogs-cssrules.php';
	require get_stylesheet_directory() . '/inc/classes/class-pressbook-masonry-blogs-scripts.php';
	require get_stylesheet_directory() . '/inc/classes/class-pressbook-masonry-blogs-editor.php';
	require get_stylesheet_directory() . '/inc/classes/class-pressbook-masonry-blogs-siteidentity.php';
	require get_stylesheet_directory() . '/inc/classes/class-pressbook-masonry-blogs-primarynavbar.php';
	require get_stylesheet_directory() . '/inc/classes/class-pressbook-masonry-blogs-related-posts.php';
	require get_stylesheet_directory() . '/inc/classes/class-pressbook-masonry-blogs-options.php';
	require get_stylesheet_directory() . '/inc/classes/class-pressbook-masonry-blogs-jetpack.php';

	foreach ( $services as $key => $service ) {
		if ( 'PressBook\Editor' === $service ) {
			$services[ $key ] = PressBook_Masonry_Blogs_Editor::class;
		} elseif ( 'PressBook\Scripts' === $service ) {
			$services[ $key ] = PressBook_Masonry_Blogs_Scripts::class;
		} elseif ( 'PressBook\Options\SiteIdentity' === $service ) {
			$services[ $key ] = PressBook_Masonry_Blogs_SiteIdentity::class;
		} elseif ( 'PressBook\Jetpack' === $service ) {
			$services[ $key ] = PressBook_Masonry_Blogs_Jetpack::class;
		}
	}

	array_push( $services, PressBook_Masonry_Blogs_PrimaryNavbar::class );
	array_push( $services, PressBook_Masonry_Blogs_Related_Posts::class );
	array_push( $services, PressBook_Masonry_Blogs_Options::class );

	return $services;
}
add_filter( 'pressbook_services', 'pressbook_masonry_blogs_services' );

/**
 * Change default styles.
 *
 * @param  array $styles Default sttyles.
 * @return array
 */
function pressbook_masonry_blogs_default_styles( $styles ) {
	$styles['top_navbar_bg_color_1']         = '#074eba';
	$styles['top_navbar_bg_color_2']         = '#177fe8';
	$styles['primary_navbar_bg_color']       = '#232323';
	$styles['primary_navbar_hover_bg_color'] = '#f70073';
	$styles['button_bg_color_1']             = '#187df2';
	$styles['button_bg_color_2']             = '#0968e5';
	$styles['footer_bg_color']               = '#0f0f0f';
	$styles['footer_credit_link_color']      = '#1974fc';

	return $styles;
}
add_filter( 'pressbook_default_styles', 'pressbook_masonry_blogs_default_styles' );

/**
 * Change welcome page title.
 *
 * @param  string $page_title Welcome page title.
 * @return string
 */
function pressbook_masonry_blogs_welcome_page_title( $page_title ) {
	return esc_html_x( 'PressBook Masonry Blogs', 'page title', 'pressbook-masonry-blogs' );
}
add_filter( 'pressbook_welcome_page_title', 'pressbook_masonry_blogs_welcome_page_title' );

/**
 * Change welcome menu title.
 *
 * @param  string $menu_title Welcome menu title.
 * @return string
 */
function pressbook_masonry_blogs_welcome_menu_title( $menu_title ) {
	return esc_html_x( 'PressBook Masonry', 'menu title', 'pressbook-masonry-blogs' );
}
add_filter( 'pressbook_welcome_menu_title', 'pressbook_masonry_blogs_welcome_menu_title' );

/**
 * Recommended plugins.
 */
require get_stylesheet_directory() . '/inc/recommended-plugins.php';
