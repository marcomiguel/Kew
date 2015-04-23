<?php

	// Remove Admin Menu Links
	add_action( 'admin_menu', 'my_remove_menu_pages' );
	function my_remove_menu_pages() {
		remove_menu_page('link-manager.php');
		//remove_menu_page('upload.php');
		remove_menu_page('edit.php');
		//remove_menu_page('edit.php?post_type=page');
		remove_menu_page('edit-comments.php');
	}
	
	// Remove Admin Bar Links
	function remove_admin_bar_links() {
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu('comments');
		$wp_admin_bar->remove_menu('my-account-with-avatar');
		$wp_admin_bar->remove_menu('edit-profile');
		$wp_admin_bar->remove_menu('wp-logo');
		$wp_admin_bar->remove_menu('new-user');
		$wp_admin_bar->remove_menu('new-post');
		$wp_admin_bar->remove_menu('new-page');
		$wp_admin_bar->remove_menu('new-media');
		$wp_admin_bar->remove_menu('new-link');
		$wp_admin_bar->remove_menu('themes');
		//$wp_admin_bar->remove_menu('menus');
		$wp_admin_bar->remove_menu('background');
		$wp_admin_bar->remove_menu('customize');
		$wp_admin_bar->add_menu( array(
	        'id' => 'logout',
	        'title' => __('Cerrar Sesión'),
	        'href' => wp_logout_url()
	    ) );
	}
	add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );

	// get the the role object
	$role_object = get_role( 'editor' );

	// add $cap capability to this role object
	$role_object->add_cap( 'edit_theme_options' );

	// Remove dashboard widgets
	function disable_default_dashboard_widgets() {
		remove_meta_box('dashboard_recent_comments', 'dashboard', 'core');
		remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');
		remove_meta_box('dashboard_plugins', 'dashboard', 'core');
		remove_meta_box('dashboard_quick_press', 'dashboard', 'core');
		remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');
		remove_meta_box('dashboard_primary', 'dashboard', 'core');
		remove_meta_box('dashboard_secondary', 'dashboard', 'core');
	}
	add_action('admin_menu', 'disable_default_dashboard_widgets');
	
	// Admin footer modification
	function remove_footer_admin ()
	{
	    echo '<span id="footer-thankyou">Desarrollado por <a href="mailto:dreydc@gmail.com">Diego Rey de Castro</a></span>';
	}
	add_filter('admin_footer_text', 'remove_footer_admin');
	
	// CUSTOM ADMIN LOGIN HEADER LOGO
	function my_custom_login_logo()
	{
	    echo '<style  type="text/css">';
	    echo 'h1 a {  background-image:url(' . get_bloginfo('template_directory') . '/images/admin-logo.png) !important;}';
	    echo 'body.login { background: #FFF !important;}';
	    echo '.login #nav, .login #backtoblog { text-shadow: white 0 0px 0; }';
	    echo '.login #nav a, .login #backtoblog a { color: #000 !important; }';
	    echo '.login form { border: 0px solid #E5E5E5; -moz-box-shadow: rgba(200,200,200,0.7) 0 0px 0px -1px; -webkit-box-shadow: rgba(200, 200, 200, 0.7) 0 0px 0px -1px; box-shadow: rgba(200, 200, 200, 0.7) 0 0px 0px -1px;}';
	    echo '</style>';
	}
	add_action('login_head',  'my_custom_login_logo');
	
	// CUSTOM ADMIN LOGIN LOGO LINK
	function change_wp_login_url()
	{
	    //echo bloginfo('url');  // OR ECHO YOUR OWN URL
	}
	add_filter('login_headerurl', 'change_wp_login_url');
	
	// CUSTOM ADMIN LOGIN LOGO & ALT TEXT
	function change_wp_login_title()
	{
	    //echo get_option('blogname'); // OR ECHO YOUR OWN ALT TEXT
	}
	add_filter('login_headertitle', 'change_wp_login_title');

?>
<?php // HIDE VERSION WP ?>
<?php
	
	function my_admin_head() {
	$screen = get_current_screen();
	  if(is_admin() && ($screen->id == 'dashboard')){
	    echo '<style>.versions p, span#wp-version-message { display: none; } </style>';
	  }
	}
	add_action('admin_head', 'my_admin_head');
	
	function wpbeginner_remove_version() {
	return '';
	}
	add_filter('the_generator', 'wpbeginner_remove_version');
	
	/**
	 * Hide WP version on dashboard's footer unless your User can update WP
	 * Taken from http://www.computertechtips.net/85/hide-wordpress-version-from-dashboard-footer/
	 */
	if ( !function_exists('ctt_hideversionfooter') ) {
	  function ctt_hideversionfooter($upgrade) {
	    if ( !current_user_can('update_core')) {
	      echo '';
	    }
	    else {
	      return $upgrade;
	    }
	  }
	  add_filter('update_footer', 'ctt_hideversionfooter', 100);
	}
	//add_filter( 'pre_site_transient_update_core', create_function( '$a', "return null;" ) );  		
	
	// Cleaning up the Wordpress Head
	function bones_head_cleanup() {
		// remove header links
		//remove_action( 'wp_head', 'feed_links_extra', 3 );                    // Category Feeds
		//remove_action( 'wp_head', 'feed_links', 2 );                          // Post and Comment Feeds
		remove_action( 'wp_head', 'rsd_link' );                               // EditURI link
		remove_action( 'wp_head', 'wlwmanifest_link' );                       // Windows Live Writer
		remove_action( 'wp_head', 'index_rel_link' );                         // index link
		remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );            // previous link
		remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );             // start link
		remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); // Links for Adjacent Posts
		remove_action( 'wp_head', 'wp_generator' );                           // WP version	
	}
	// launching operation cleanup
	add_action('init', 'bones_head_cleanup');
	// remove WP version from RSS
	function bones_rss_version() { return ''; }
	//add_filter('the_generator', 'bones_rss_version');

	remove_action( 'begin_fetch_post_thumbnail_html', '_wp_post_thumbnail_class_filter_add' );
	
	
	// Adding WP 3+ Functions & Theme Support
	function bones_theme_support() {
		add_theme_support( 'post-thumbnails' );      // wp thumbnails (sizes handled in functions.php)
		//set_post_thumbnail_size( 125, 125, true );   // default thumb size
		//add_theme_support( 'custom-background' );   // wp custom background
		add_theme_support( 'automatic-feed-links' ); // rss thingy
		// to add header image support go here: http://themble.com/support/adding-header-background-image-support/
		// adding post format support
		/*
	add_theme_support( 'post-formats',      // post formats
			array( 
				'aside',   // title less blurb
				'gallery', // gallery of images
				'link',    // quick link to other site
				'image',   // an image
				'quote',   // a quick quote
				'status',  // a Facebook like status update
				'video',   // video 
				'audio',   // audio
				'chat'     // chat transcript 
			)
		);	
	*/
		add_theme_support( 'menus' );            // wp menus
		register_nav_menus(                      // wp3+ menus
			array( 
				'main_nav' => 'Menu General',   // main nav in header
			)
		);	
	}
	
	// launching this stuff after theme setup
	add_action('after_setup_theme','bones_theme_support');	
	
?>