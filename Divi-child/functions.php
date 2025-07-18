<?php
function divi__child_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'divi__child_theme_enqueue_styles' );

/* enqueue java if needed */

function my_scripts_method() {
    wp_enqueue_script(
        'custom-script',
        get_stylesheet_directory_uri() . '/custom/rmm-blog.js',
        array( 'jquery' )
    );
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' ); 


//you can add custom functions below this line:
//require_once(get_stylesheet_directory().'/custom/reach-CTAs.php');
require_once(get_stylesheet_directory().'/custom/language.php');
require_once(get_stylesheet_directory().'/custom/divi.php');

	/* add notes before comment form */
	add_action('comment_form_top' , 'abcd_consolences_before');
	function abcd_consolences_before() {
		echo '<div class="abcd-condol-wrap"><p><span class="abcd-condol-NB">PLEASE NOTE: </span>All condolences will be reviewed before being published. Your condolence may not appear for 24 -48 hours after you write it.</p></div>';
	}
?>