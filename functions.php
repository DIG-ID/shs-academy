<?php

/**
 * Setup theme
 */
function shs_theme_setup() {

	register_nav_menus(
		array(
			'primary'   => __( 'Primary Menu', 'shs-a' ),
			'megamenu'   => __( 'Mega Menu', 'shs-a' ),
			'toparea'   => __( 'Top Area Menu', 'shs-a' ),
			'copyright' => __( 'Copyright Menu', 'shs-a' ),
		)
	);

	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	add_image_size( 'event-gallery-full', 1920, 900, array( 'center', 'center' ) );

	add_image_size( 'event-gallery-thumb', 730, 700, array( 'center', 'center' ) );

	add_image_size( 'media-corner-logos-thumb', 170, 170, array( 'center', 'center' ) );

	add_image_size( 'media-corner-photos-thumb', 276, 276, array( 'center', 'center' ) );

	add_image_size( 'media-corner-banners-thumb', 300, 300, array( 'center', 'center' ) );

	add_image_size( 'testimonials-avatar', 120, 120 );

}

add_action( 'after_setup_theme', 'shs_theme_setup' );

/**
 * Register our sidebars and widgetized areas.
 */
function shs_theme_footer_widgets_init() {

	register_sidebar(
		array(
			'name'          => 'Footer',
			'id'            => 'footer',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		),
	);

}
add_action( 'widgets_init', 'shs_theme_footer_widgets_init' );

/**
 * Enqueue styles and scripts
 */
function shs_theme_enqueue_styles() {

	//Get the theme data
	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );
	//wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', false, $theme_version, 'all' );
	wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/dist/main.css', array(), $theme_version );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/dist/main.js', array( 'jquery' ), $theme_version, false );
	if ( is_page_template( 'page-templates/page-ticket-system.php' ) ) :
		wp_enqueue_script( 'incert-api', 'https://myincert.com/public/api/incertClient.js', array(), $theme_version, true );
		wp_enqueue_script( 'incert-settings', get_stylesheet_directory_uri() . '/dist/incert.js', array( 'jquery' ), $theme_version, true );
	endif;
}

add_action( 'wp_enqueue_scripts', 'shs_theme_enqueue_styles' );

/**
 * Get youtube video title
 */
function shs_get_youtube_title( $video_id ) {
	$api_key     = 'AIzaSyACB4vCwaS_Z3yr3zO3P1vHPYcZgVw9weo';
	$video_title = file_get_contents( "https://youtube.googleapis.com/youtube/v3/videos?part=snippet%2CcontentDetails%2Cstatistics&id={$video_id}&key={$api_key}" );
	if ( $video_title ) {
		$json = json_decode( $video_title, true );
		return $json['items'][0]['snippet']['title'];
	} else {
		return false;
	}
}

/**
 * Remove Protected Text from Password protected page
 */
function remove_protected_text() {
    return '%s';
}
add_filter( 'protected_title_format', 'remove_protected_text' );

/**
 * Password Protected Message
 */

function my_custom_password_form() {
  
    global $post;

    // Custom logic for the message
    $password_form_message = 
    __( '<p id="private-area-message">Log in</p>' );

    // Put together the custom form using the dynamic message
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $form = '<div class="container"><form class="protected-post-form" action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    ' . $password_form_message . '
    <label id="password-label" for="' . $label . '">' . __( "" ) . ' </label><input name="post_password" id="' . $label . '" class="pw-window" type="password" size="20" /><input type="submit" class="btn btn-large" name="Submit" value="' . esc_attr__( "Senden" ) . '" />
    </form></div>
    ';
    return $form;

}
add_filter( 'the_password_form', 'my_custom_password_form' );

/*Placeholder in form*/

function my_theme_password_placeholder($output) {
    $placeholder = 'Password';
    $search = 'type="password"';
    return str_replace($search, $search . " placeholder=\"$placeholder\"", $output);
}
add_filter('the_password_form', 'my_theme_password_placeholder');

/**
 * Add a message to the password form.
 *
 * @wp-hook the_password_form
 * @param   string $form
 * @return  string
 */
function wpse_71284_custom_post_password_msg( $form )
{
	// No cookie, the user has not sent anything until now.
	if ( ! isset ( $_COOKIE[ 'wp-postpass_' . COOKIEHASH ] ) )
		return $form;

	// The refresh came from a different page, the user has not sent anything until now.
	if ( ! wp_get_raw_referer() == get_permalink() )
		return $form;

	// Translate and escape.
	$msg = esc_html__( 'Das angegebene Passwort ist falsch. Bitte überprüfen Sie Ihre Angaben.', 'SHS' );

	// We have a cookie, but it doesn’t match the password.
	$msg = "<p class='custom-password-message'>$msg</p>";

	return $msg . $form;
}
add_filter( 'the_password_form', 'wpse_71284_custom_post_password_msg' );

/**
 * ACF bidirectional acf.
 */
/*
function bidirectional_acf_update_value( $value, $post_id, $field  ) {

	// vars
	$field_name  = $field['name'];
	$field_key   = $field['key'];
	$global_name = 'is_updating_' . $field_name;

	// bail early if this filter was triggered from the update_field() function called within the loop below
	// - this prevents an inifinte loop
	if ( !empty( $GLOBALS[ $global_name ] ) ) return $value;

	// set global variable to avoid inifite loop
	// - could also remove_filter() then add_filter() again, but this is simpler
	$GLOBALS[ $global_name ] = 1;

	// loop over selected posts and add this $post_id
	if ( is_array( $value ) ) {

		foreach( $value as $post_id2 ) {

			// load existing related posts
			$value2 = get_field( $field_name, $post_id2, false );

			// allow for selected posts to not contain a value
			if ( empty( $value2 ) ) {
				$value2 = array();
			}

			// bail early if the current $post_id is already found in selected post's $value2
			if( in_array($post_id, $value2) ) continue;

			// append the current $post_id to the selected post's 'related_posts' value
			$value2[] = $post_id;

			// update the selected post's value (use field's key for performance)
			update_field( $field_key, $value2, $post_id2 );

		}

	}

	// find posts which have been removed
	$old_value = get_field( $field_name, $post_id, false );

	if ( is_array( $old_value ) ) {
		foreach( $old_value as $post_id2 ) {

			// bail early if this value has not been removed
			if ( is_array( $value ) && in_array( $post_id2, $value ) ) continue;

			// load existing related posts
			$value2 = get_field($field_name, $post_id2, false);

			// bail early if no value
			if ( empty( $value2 ) ) continue;

			// find the position of $post_id within $value2 so we can remove it
			$pos = array_search( $post_id, $value2 );

			// remove
			unset( $value2[ $pos] );

			// update the un-selected post's value (use field's key for performance)
			update_field( $field_key, $value2, $post_id2 );

		}
	}

	// reset global varibale to allow this filter to function as per normal
	$GLOBALS[ $global_name ] = 0;

	// return
	return $value;

}

add_filter( 'acf/update_value/name=event_partners', 'bidirectional_acf_update_value', 10, 3 );
*/
// Theme otimizations.
require get_template_directory() . '/inc/theme-optimizations.php';

// Theme custom template tags.
require get_template_directory() . '/inc/theme-template-tags.php';

// Theme customizer options.
require get_template_directory() . '/inc/customizer.php';

// Custom navigation walker.
require get_template_directory() . '/inc/custom-nav-walker.php';

// Create .zip files funcytion.
require get_template_directory() . '/inc/download-zip-gallery.php';



function console_log( $output, $with_script_tags = true ) {
	$js_code = 'console.log(' . wp_json_encode( $output, JSON_HEX_TAG ) . ');';
	if ( $with_script_tags ) :
		$js_code = '<script>' . $js_code . '</script>';
	endif;
	echo $js_code;
}