<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  

// Enable automatic updates for Core
//add_filter( 'auto_update_core', '__return_true' );
// Enable automatic updates for plugins
//add_filter('auto_update_plugin', '__return_true');
// Enable automatic updates for themes
//add_filter('auto_update_theme', '__return_true');

require_once get_stylesheet_directory() . '/includes/plugin-list.php';

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function cc_mime_types($mimes) {
$mimes['svg'] = 'image/svg+xml';
return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function et_builder_get_google_fonts() {
	$google_fonts = array(
		'Abel' => array(
			'styles' 		=> '400',
			'character_set' => 'latin',
			'type'			=> 'sans-serif',
		),
		'Amatic SC' => array(
			'styles' 		=> '400,700',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Arimo' => array(
			'styles' 		=> '400,400italic,700italic,700',
			'character_set' => 'latin,cyrillic-ext,latin-ext,greek-ext,cyrillic,greek,vietnamese',
			'type'			=> 'sans-serif',
		),
		'Arvo' => array(
			'styles' 		=> '400,400italic,700,700italic',
			'character_set' => 'latin',
			'type'			=> 'serif',
		),
		'Bevan' => array(
			'styles' 		=> '400',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Bitter' => array(
			'styles' 		=> '400,400italic,700',
			'character_set' => 'latin,latin-ext',
			'type'			=> 'serif',
		),
		'Black Ops One' => array(
			'styles' 		=> '400',
			'character_set' => 'latin,latin-ext',
			'type'			=> 'cursive',
		),
		'Boogaloo' => array(
			'styles' 		=> '400',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Bree Serif' => array(
			'styles' 		=> '400',
			'character_set' => 'latin,latin-ext',
			'type'			=> 'serif',
		),
		'Calligraffitti' => array(
			'styles' 		=> '400',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Cantata One' => array(
			'styles' 		=> '400',
			'character_set' => 'latin,latin-ext',
			'type'			=> 'serif',
		),
		'Cardo' => array(
			'styles' 		=> '400,400italic,700',
			'character_set' => 'latin,greek-ext,greek,latin-ext',
			'type'			=> 'serif',
		),
		'Changa One' => array(
			'styles' 		=> '400,400italic',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Cherry Cream Soda' => array(
			'styles' 		=> '400',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Chewy' => array(
			'styles' 		=> '400',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Comfortaa' => array(
			'styles' 		=> '400,300,700',
			'character_set' => 'latin,cyrillic-ext,greek,latin-ext,cyrillic',
			'type'			=> 'cursive',
		),
		'Coming Soon' => array(
			'styles' 		=> '400',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Covered By Your Grace' => array(
			'styles' 		=> '400',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Crafty Girls' => array(
			'styles' 		=> '400',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Crete Round' => array(
			'styles' 		=> '400,400italic',
			'character_set' => 'latin,latin-ext',
			'type'			=> 'serif',
		),
		'Crimson Text' => array(
			'styles' 		=> '400,400italic,600,600italic,700,700italic',
			'character_set' => 'latin',
			'type'			=> 'serif',
		),
		'Cuprum' => array(
			'styles' 		=> '400,400italic,700italic,700',
			'character_set' => 'latin,latin-ext,cyrillic',
			'type'			=> 'sans-serif',
		),
		'Dancing Script' => array(
			'styles' 		=> '400,700',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Dosis' => array(
			'styles' 		=> '400,200,300,500,600,700,800',
			'character_set' => 'latin,latin-ext',
			'type'			=> 'sans-serif',
		),
		'Droid Sans' => array(
			'styles' 		=> '400,700',
			'character_set' => 'latin',
			'type'			=> 'sans-serif',
		),
		'Droid Serif' => array(
			'styles' 		=> '400,400italic,700,700italic',
			'character_set' => 'latin',
			'type'			=> 'serif',
		),
		'Francois One' => array(
			'styles' 		=> '400',
			'character_set' => 'latin,latin-ext',
			'type'			=> 'sans-serif',
		),
		'Fredoka One' => array(
			'styles' 		=> '400',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'The Girl Next Door' => array(
			'styles' 		=> '400',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Gloria Hallelujah' => array(
			'styles' 		=> '400',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Happy Monkey' => array(
			'styles' 		=> '400',
			'character_set' => 'latin,latin-ext',
			'type'			=> 'cursive',
		),
		'Indie Flower' => array(
			'styles' 		=> '400',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Josefin Slab' => array(
			'styles' 		=> '400,100,100italic,300,300italic,400italic,600,700,700italic,600italic',
			'character_set' => 'latin',
			'type'			=> 'serif',
		),
		'Judson' => array(
			'styles' 		=> '400,400italic,700',
			'character_set' => 'latin',
			'type'			=> 'serif',
		),
		'Kreon' => array(
			'styles' 		=> '400,300,700',
			'character_set' => 'latin',
			'type'			=> 'serif',
		),
		'Lato' => array(
			'styles' 		=> '400,100,100italic,300,300italic,400italic,700,700italic,900,900italic',
			'character_set' => 'latin',
			'type'			=> 'sans-serif',
		),
		'Lato Light' => array(
			'parent_font' => 'Lato',
			'styles'      => '300',
		),
		'Leckerli One' => array(
			'styles' 		=> '400',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Lobster' => array(
			'styles' 		=> '400',
			'character_set' => 'latin,cyrillic-ext,latin-ext,cyrillic',
			'type'			=> 'cursive',
		),
		'Lobster Two' => array(
			'styles' 		=> '400,400italic,700,700italic',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Lora' => array(
			'styles' 		=> '400,400italic,700,700italic',
			'character_set' => 'latin',
			'type'			=> 'serif',
		),
		'Luckiest Guy' => array(
			'styles' 		=> '400',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Merriweather' => array(
			'styles' 		=> '400,300,900,700',
			'character_set' => 'latin',
			'type'			=> 'serif',
		),
		'Metamorphous' => array(
			'styles' 		=> '400',
			'character_set' => 'latin,latin-ext',
			'type'			=> 'cursive',
		),
		'Montserrat' => array(
			'styles' 		=> '400,700',
			'character_set' => 'latin',
			'type'			=> 'sans-serif',
		),
		'Noticia Text' => array(
			'styles' 		=> '400,400italic,700,700italic',
			'character_set' => 'latin,vietnamese,latin-ext',
			'type'			=> 'serif',
		),
		'Nova Square' => array(
			'styles' 		=> '400',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Nunito' => array(
			'styles' 		=> '400,300,700',
			'character_set' => 'latin',
			'type'			=> 'sans-serif',
		),
		'Old Standard TT' => array(
			'styles' 		=> '400,400italic,700',
			'character_set' => 'latin',
			'type'			=> 'serif',
		),
		'Open Sans' => array(
			'styles' 		=> '300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
			'character_set' => 'latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic',
			'type'			=> 'sans-serif',
		),
		'Open Sans Condensed' => array(
			'styles' 		=> '300,300italic,700',
			'character_set' => 'latin,cyrillic-ext,latin-ext,greek-ext,greek,vietnamese,cyrillic',
			'type'			=> 'sans-serif',
		),
		'Open Sans Light' => array(
			'parent_font' => 'Open Sans',
			'styles'      => '300',
		),
		'Oswald' => array(
			'styles' 		=> '400,300,700',
			'character_set' => 'latin,latin-ext',
			'type'			=> 'sans-serif',
		),
		'Pacifico' => array(
			'styles' 		=> '400',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Passion One' => array(
			'styles' 		=> '400,700,900',
			'character_set' => 'latin,latin-ext',
			'type'			=> 'cursive',
		),
		'Patrick Hand' => array(
			'styles' 		=> '400',
			'character_set' => 'latin,vietnamese,latin-ext',
			'type'			=> 'cursive',
		),
		'Permanent Marker' => array(
			'styles' 		=> '400',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Play' => array(
			'styles' 		=> '400,700',
			'character_set' => 'latin,cyrillic-ext,cyrillic,greek-ext,greek,latin-ext',
			'type'			=> 'sans-serif',
		),
		'Playfair Display' => array(
			'styles' 		=> '400,400italic,700,700italic,900italic,900',
			'character_set' => 'latin,latin-ext,cyrillic',
			'type'			=> 'serif',
		),
		'Poiret One' => array(
			'styles' 		=> '400',
			'character_set' => 'latin,latin-ext,cyrillic',
			'type'			=> 'cursive',
		),
		'Poppins' => array(
			'styles' 		=> '300,400,500,600,700',
			'character_set' => 'latin',
			'type'			=> 'sans-serif',
		),
		'PT Sans' => array(
			'styles' 		=> '400,400italic,700,700italic',
			'character_set' => 'latin,latin-ext,cyrillic',
			'type'			=> 'sans-serif',
		),
		'PT Sans Narrow' => array(
			'styles' 		=> '400,700',
			'character_set' => 'latin,latin-ext,cyrillic',
			'type'			=> 'sans-serif',
		),
		'PT Serif' => array(
			'styles' 		=> '400,400italic,700,700italic',
			'character_set' => 'latin,cyrillic',
			'type'			=> 'serif',
		),
		'Raleway' => array(
			'styles' 		=> '400,100,200,300,600,500,700,800,900',
			'character_set' => 'latin',
			'type'			=> 'sans-serif',
		),
		'Raleway Light' => array(
			'parent_font' => 'Raleway',
			'styles'      => '300',
		),
		'Reenie Beanie' => array(
			'styles' 		=> '400',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Righteous' => array(
			'styles' 		=> '400',
			'character_set' => 'latin,latin-ext',
			'type'			=> 'cursive',
		),
		'Roboto' => array(
			'styles' 		=> '400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic',
			'character_set' => 'latin,cyrillic-ext,latin-ext,cyrillic,greek-ext,greek,vietnamese',
			'type'			=> 'sans-serif',
		),
		'Roboto Condensed' => array(
			'styles' 		=> '400,300,300italic,400italic,700,700italic',
			'character_set' => 'latin,cyrillic-ext,latin-ext,greek-ext,cyrillic,greek,vietnamese',
			'type'			=> 'sans-serif',
		),
		'Roboto Light' => array(
			'parent_font' => 'Roboto',
			'styles'      => '100',
		),
		'Rock Salt' => array(
			'styles' 		=> '400',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Rokkitt' => array(
			'styles' 		=> '400,700',
			'character_set' => 'latin',
			'type'			=> 'serif',
		),
		'Sanchez' => array(
			'styles' 		=> '400,400italic',
			'character_set' => 'latin,latin-ext',
			'type'			=> 'serif',
		),
		'Satisfy' => array(
			'styles' 		=> '400',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Schoolbell' => array(
			'styles' 		=> '400',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Shadows Into Light' => array(
			'styles' 		=> '400',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Source Sans Pro' => array(
			'styles' 		=> '400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic',
			'character_set' => 'latin,latin-ext',
			'type'			=> 'sans-serif',
		),
		'Source Sans Pro Light' => array(
			'parent_font' => 'Source Sans Pro',
			'styles'      => '300',
		),
		'Special Elite' => array(
			'styles' 		=> '400',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Squada One' => array(
			'styles' 		=> '400',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Tangerine' => array(
			'styles' 		=> '400,700',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Ubuntu' => array(
			'styles' 		=> '400,300,300italic,400italic,500,500italic,700,700italic',
			'character_set' => 'latin,cyrillic-ext,cyrillic,greek-ext,greek,latin-ext',
			'type'			=> 'sans-serif',
		),
		'Unkempt' => array(
			'styles' 		=> '400,700',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Vollkorn' => array(
			'styles' 		=> '400,400italic,700italic,700',
			'character_set' => 'latin',
			'type'			=> 'serif',
		),
		'Walter Turncoat' => array(
			'styles' 		=> '400',
			'character_set' => 'latin',
			'type'			=> 'cursive',
		),
		'Yanone Kaffeesatz' => array(
			'styles' 		=> '400,200,300,700',
			'character_set' => 'latin,latin-ext',
			'type'			=> 'sans-serif',
		),
	);

	return apply_filters( 'et_builder_google_fonts', $google_fonts );
}

//
// Your code goes below
//
