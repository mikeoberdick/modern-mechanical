
<?php

// *** Theme Setup *** \\

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

// Get the theme data
    $the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

// Shortcodes in text widgets
add_filter('widget_text', 'do_shortcode');


// *** Theme Styles *** \\

function d4tw_enqueue_styles () {
    wp_enqueue_style( 'Open Sans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Montserrat:400,600' );
    wp_enqueue_style( 'Owl Slider CSS', get_stylesheet_directory_uri() . '/owlcarousel/owl.carousel.min.css' );
}
add_action('wp_enqueue_scripts', 'd4tw_enqueue_styles');


// *** Theme Scripts *** \\

function d4tw_enqueue_scripts () {
   wp_enqueue_script( 'D4TW Theme JS', get_stylesheet_directory_uri() . '/js/d4tw.js', array('jquery'), '1.0.0', true );
   wp_enqueue_script( 'Owl Slider JS', get_stylesheet_directory_uri() . '/owlcarousel/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'MIU JS', get_stylesheet_directory_uri() . '/miu/mixitup.min.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'd4tw_enqueue_scripts' );


// *** Advanced Custom Fields *** \\

//Add the ACF options page
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Page Content',
		'menu_title'	=> 'Page Content',
		'menu_slug' 	=> 'page-content'
	));
    
}

//Register the Google Maps API for use with ACF
function google_maps_scripts () {
	if (is_page('contact')) {
	   		wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyB_LlgIpFpelPIbA25yjUi_dhCywFKKYco', array(), '3', true );
			wp_enqueue_script( 'google-map-init', get_stylesheet_directory_uri() . '/js/google-maps.js', array('google-map', 'jquery'), '0.1', true );
		}
	}
	
add_action( 'wp_enqueue_scripts', 'google_maps_scripts' );

function my_acf_google_map_api( $api ){
	$api['key'] = 'AIzaSyB_LlgIpFpelPIbA25yjUi_dhCywFKKYco';
	return $api;	
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


// *** D4TW Custom Dashboard *** \\

function d4tw_add_dashboard_widget() {
	add_meta_box('wp_dashboard_widget_1', 'Theme Details', 'd4tw_theme_info', 'dashboard', 'side', 'high');
  //wp_add_dashboard_widget('wp_dashboard_widget', 'Theme Details', 'd4tw_theme_info');
}
add_action('wp_dashboard_setup', 'd4tw_add_dashboard_widget' );
 
function d4tw_theme_info() {
  echo "<ul>
  <li><strong>Developed By:</strong> Designs 4 The Web</li>
  <li><strong>Website:</strong> <a href='http://www.designs4theweb.com'>www.designs4theweb.com</a></li>
  <li><strong>Contact:</strong> <a href='mailto:mike@designs4theweb.com'>mike@designs4theweb.com</a></li>
  </ul>";
}

//Remove the tools menu option for editors
function d4tw_remove_menus(){
if ( current_user_can( 'editor' ) ) {
remove_menu_page( 'tools.php' );
	}
}
add_action( 'admin_menu', 'd4tw_remove_menus' );

//Remove widgets from dashboard
function d4tw_remove_dash_meta() {
        remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');//since 3.8
}
add_action( 'admin_init', 'd4tw_remove_dash_meta' );

//Filter the WordPress branding in the dashboard footer
function d4tw_filter_admin_footer () {
    echo '<span id="dashFooter">Website developed by <a style = "color: #ff0000; text-decoration: none;" href="http://www.designs4theweb.com" target="_blank">Designs 4 The Web</a></span>';
}
add_filter('admin_footer_text', 'd4tw_filter_admin_footer');

//Add custom logo to wp-login
function d4tw_custom_logo_css () {
    wp_enqueue_style('login-styles', get_stylesheet_directory_uri() . '/login/login_styles.css');
}
add_action('login_enqueue_scripts', 'd4tw_custom_logo_css');

//Change the wp-login logo url
function d4tw_login_url(){
    return get_bloginfo( 'wpurl' );
}
add_filter('login_headerurl', 'd4tw_login_url');

//Replace the WordPress dashboard logo
function d4tw_admin_css() {
	wp_enqueue_style('dashboard-styles', get_stylesheet_directory_uri() . '/dashboard/dashboard.css');
}

add_action('admin_head', 'd4tw_admin_css');


// *** Custom Menus *** \\


// *** Template Tags *** \\


// *** User Tweaks & Permissions *** \\

// Hide the admin toolbar for non-admins
add_action('admin_init', 'd4tw_disable_admin_bar');

function d4tw_disable_admin_bar() {
    if ( !current_user_can ( 'administrator' ) ) {
        show_admin_bar(false);
    }
}


// *** Widgets *** \\

// Deregister Sidebars
function d4tw_remove_sidebars () {
	unregister_sidebar( 'statichero' );
	unregister_sidebar( 'hero' );
	unregister_sidebar( 'footerfull' );
	unregister_sidebar( 'left-sidebar' );

}

add_action( 'widgets_init', 'd4tw_remove_sidebars', 11 );

// Register Theme Sidebars
function d4tw_sidebars() {

    $args = array(
        'id'            => 'footer_1',
        'class'         => 'footer_1',
        'name'          => 'Footer 1',
        'description'   => 'This widget area will appear in the first position of the footer.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widgettitle">',
        'after_title'   => '</h5>',
    );
    register_sidebar( $args );

    $args = array(
        'id'            => 'footer_2',
        'class'         => 'footer_2',
        'name'          => 'Footer 2',
        'description'   => 'This widget area will appear in the second position of the footer.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widgettitle">',
        'after_title'   => '</h5>',
    );
    register_sidebar( $args );
}
add_action( 'widgets_init', 'd4tw_sidebars' );


// *** CUSTOM POST TYPES *** \\

//Projects CPT
add_action( 'init', 'project_post_type', 0 );
function project_post_type() {
// Set UI labels for CPT
  $labels = array(
    'name'                => 'Projects',
    'singular_name'       => 'Project',
    'menu_name'           => 'Projects',
    'parent_item_colon'   => 'Parent Project',
    'all_items'           => 'All Projects',
    'view_item'           => 'View Project',
    'add_new_item'        => 'Add New Project',
    'add_new'             => 'Add New',
    'edit_item'           => 'Edit Project',
    'update_item'         => 'Update Project',
    'search_items'        => 'Search Projects',
    'not_found'           => 'No Project Found',
    'not_found_in_trash'  => 'No Project Found in Trash',
  );
  
// Set other options for Custom Post Type
  $args = array(
    'label'               => 'Project',
    'description'         => 'Project',
    'labels'              => $labels,
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'editor', 'page-attributes', 'thumbnail' ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );
  
  // Registering your Custom Post Type
  register_post_type( 'Projects', $args );
}

//Create the Project Category Taxonomy
add_action( 'init', 'create_project_cat_taxonomy' );
function create_project_cat_taxonomy() {
  $labels = array(
    'add_new_item' => 'Add New Project Category',
    'view_item' => 'View Project Category',
    'edit_item' => 'Edit Project Category',
    'update_item' => 'Update Project Category',
  );
  $args = array(
    'label' => 'Project Category',
    'rewrite' => array( 'slug' => 'project-category' ),
    'labels'            => $labels,
  );
  register_taxonomy( 'project-category', array( 'projects' ), $args );
}

//Add the project thumbnail size for slider
add_image_size( 'slider-thumb', 260, 260, array( 'center', 'center' ) );

//Add the project thumbnail size for project gallery page
add_image_size( 'project-thumb', 375, 375, array( 'center', 'center' ) );

//Project Gallery page custom excerpt
function project_excerpt() {
  global $post;
  $text = get_field('description');
  if ( '' != $text ) {
    $text = strip_shortcodes( $text );
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]>>', $text);
    $excerpt_length = 30;  // 50 words
    $excerpt_more = ' ...';
    $text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
  }
  return apply_filters('the_excerpt', $text);
}