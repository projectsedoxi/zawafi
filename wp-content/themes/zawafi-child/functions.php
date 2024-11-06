<?php

/* ----------------------------- Carbon fields: Start ----------------------------- */
use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Admin Global Fields: Start 

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {


    Container::make( 'theme_options', __( 'Brand Logo', 'headercms' ) )
   ->add_fields( array(
        Field::make( 'image', 'brandlogo', 'Brand Logo' )->set_value_type( 'url' )
   ));

   Container::make( 'theme_options', __( 'Address', 'address' ) )
   ->add_fields( array(
        Field::make( 'textarea', 'address', 'Address' ),
   )); 
   
   Container::make( 'theme_options', __( 'Contact Number', 'crb' ) )
    ->add_fields( array(
        // Field::make( 'text', 'telephone', 'Telephone Number' ),
        Field::make( 'text', 'mobile', 'Mobile Number' ),
    ));

    Container::make( 'theme_options', __( 'Email', 'email' ) )
        ->add_fields( array(
        Field::make( 'text', 'email', 'E-mail' ),
            // Field::make( 'text', 'website', 'Webite' ),
    ));

    Container::make( 'theme_options', __( 'Footer Menus', 'footermenus' ) )
        ->add_fields( array(
        Field::make( 'rich_text', 'footermenus', 'Footer Menus' ),
            // Field::make( 'text', 'website', 'Webite' ),
    ));

}
// Admin Global Fields: End 


/* ---------------------------------------- Home Page: CMS Start -------------------------------------- */

add_action( 'carbon_fields_register_fields', 'crb_attach_post_meta' );

function crb_attach_post_meta() {

/* Hero Slider: Start */

Container::make( 'post_meta', __( 'Hero Slider' ) )
->where( 'post_type', '=', 'page' ) // only show our new fields on pages
->where( 'post_template', '=', 'website-home.php' )

->add_fields( array(
    Field::make( 'text', 'text1', 'Heading' ),
	Field::make( 'complex', 'heroslider', 'Hero Slider' )
    ->set_layout( 'tabbed-horizontal' )
	->add_fields( array(
	Field::make( 'image', 'product-image', 'Image' )->set_value_type( 'url' )->set_width(30)->help_text('Image Size: 1366px x 625px'),
)),
Field::make( 'text', 'herosliderlink', 'Link' ),
));

/* Home Introdution: Start */

Container::make( 'post_meta', __( 'Introduction' ) )
	->where( 'post_type', '=', 'page' )   // -----------------------> this helps show fields on 'Pages', not on 'Posts'
	->where( 'post_template', '=', 'website-home.php' )     // -----> only show in specific templates				
	->add_fields( array(
	Field::make( 'text', 'introduction-title', 'Heading' ),
	Field::make( 'textarea', 'introduction-description', 'Description' ),
    Field::make( 'text', 'introduction-link', 'Links' ),
));


Container::make( 'post_meta', __( 'Home Services' ) )
->where( 'post_type', '=', 'page' ) // only show our new fields on pages
->where( 'post_template', '=', 'website-home.php' )
->add_fields( array(
	Field::make( 'complex', 'servicecategories', 'Projects' )
	->add_fields( array(
	Field::make( 'text', 'servicecategory-title', 'Title' )->set_width(25),
	Field::make( 'image', 'servicecategory-image', 'Image' )->set_value_type( 'url' )->set_width(25),
    Field::make( 'text', 'servicecategory-link', 'Link' )->set_width(50),
)),
));



/* Home Loop Section: Start */

Container::make( 'post_meta', __( 'Sections' ) )
->where( 'post_type', '=', 'page' ) // only show our new fields on pages
->where( 'post_template', '=', 'website-home.php' )
->add_fields( array(
	Field::make( 'complex', 'sectionloop', 'Projects' )
    // ->set_layout( 'tabbed-horizontal' ) 
	->add_fields( array(
    Field::make( 'image', 'sectionloop-image', 'Image' )->set_value_type( 'url' )->set_width(10),
	Field::make( 'text', 'sectionloop-title', 'Title' )->set_width(30),
	Field::make( 'textarea', 'sectionloop-description', 'Description' )->set_width(30),
    Field::make( 'text', 'sectionloop-link', 'link' )->set_width(100),
)),
));

/* Home Profile: Start */

Container::make( 'post_meta', __( 'Home Profile Section' ) )
	->where( 'post_type', '=', 'page' )   // -----------------------> this helps show fields on 'Pages', not on 'Posts'
	->where( 'post_template', '=', 'website-home.php' )     // -----> only show in specific templates				
	->add_fields( array(
	Field::make( 'image', 'home-profile-image', 'Background Image' )->set_value_type( 'url' ),
	Field::make( 'text', 'home-profile-title', 'Heading' ),
	Field::make( 'textarea', 'home-profile-description', 'Description' ),
    Field::make( 'text', 'home-profile-link', 'Links' ),
));

/* Home Custom: Start */

Container::make( 'post_meta', __( 'Home Custom Section' ) )
	->where( 'post_type', '=', 'page' )   // -----------------------> this helps show fields on 'Pages', not on 'Posts'
	->where( 'post_template', '=', 'website-home.php' )     // -----> only show in specific templates				
	->add_fields( array(
	Field::make( 'image', 'home-custom-image', 'Image' )->set_value_type( 'url' ),
	Field::make( 'text', 'home-custom-title', 'Heading' ),
	Field::make( 'textarea', 'home-custom-description', 'Description' ),
	Field::make( 'rich_text', 'home-custom-points', 'Points' ),
    Field::make( 'text', 'home-custom-link', 'Links' ),
));

/* Home Custom: End */

Container::make( 'post_meta', __( 'Clients' ) )
->where( 'post_type', '=', 'page' ) // only show our new fields on pages
->where( 'post_template', '=', 'website-home.php' )
->add_fields( array(
    Field::make( 'text', 'clients-title', 'Heading' ),
	Field::make( 'complex', 'clients', 'Clients List' )
	->add_fields( array(
	Field::make( 'image', 'clients-logos', 'Image' )->set_value_type( 'url' )->set_width(25),
    Field::make( 'text', 'clients-link', 'Links' )->set_width(75),
)),
));
/* Home Clients: End */


/* ---------------------------------------- About Page: CMS Ends -------------------------------------- */


Container::make( 'post_meta', __( 'Introduction' ) )
	->where( 'post_type', '=', 'page' )   // -----------------------> this helps show fields on 'Pages', not on 'Posts'
	->where( 'post_template', '=', 'about-us.php' )     // -----> only show in specific templates				
	->add_fields( array(
    Field::make( 'image', 'aboutus-bannerimage', 'Banner Image' )->set_value_type( 'url' )->set_width(90)->help_text('Image Size: 1366px x 300px'),	    
	Field::make( 'textarea', 'aboutus-content', 'About Content' ),
));

Container::make( 'post_meta', __( 'Sections' ) )
->where( 'post_type', '=', 'page' ) // only show our new fields on pages
->where( 'post_template', '=', 'about-us.php' )
->add_fields( array(
	Field::make( 'complex', 'aboutsectionloop', 'Products' ) 
    // ->set_layout( 'tabbed-horizontal' ) 
	->add_fields( array(
    Field::make( 'image', 'aboutsectionloop-image', 'Image' )->set_value_type( 'url' )->set_width(10),
	Field::make( 'text', 'aboutsectionloop-title', 'Title' )->set_width(30),
	Field::make( 'textarea', 'aboutsectionloop-description', 'Description' )->set_width(30),
    // Field::make( 'text', 'aboutsectionloop-link', 'link' )->set_width(100),
)),
));

/* ---------------------------------------- Services Page: CMS Ends -------------------------------------- */


Container::make( 'post_meta', __( 'Services Introduction' ) )
	->where( 'post_type', '=', 'page' )   // -----------------------> this helps show fields on 'Pages', not on 'Posts'
	->where( 'post_template', '=', 'services.php' )     // -----> only show in specific templates				
	->add_fields( array(
    Field::make( 'image', 'services-bannerimage', 'Services Banner Image' )->set_value_type( 'url' ),	    
	Field::make( 'textarea', 'services-content', 'Services Content' ),
));

Container::make( 'post_meta', __( 'Services' ) )
->where( 'post_type', '=', 'page' ) // only show our new fields on pages
->where( 'post_template', '=', 'services.php' )
->add_fields( array(
	Field::make( 'complex', 'servicesitems', 'Services' )
	->add_fields( array(
    Field::make( 'image', 'servicesitems-image', 'Image' )->set_value_type( 'url' )->set_width(30),
	Field::make( 'text', 'servicesitems-title', 'Title' )->set_width(70),
	Field::make( 'textarea', 'servicesitems-description', 'Description' )->set_width(90),
)),
));

/* ---------------------------------------- Projects Page: CMS Ends -------------------------------------- */


Container::make( 'post_meta', __( 'Projects' ) )
	->where( 'post_type', '=', 'page' )   // -----------------------> this helps show fields on 'Pages', not on 'Posts'
	->where( 'post_template', '=', 'projects.php' )     // -----> only show in specific templates				
	->add_fields( array(
    Field::make( 'image', 'projects-bannerimage', 'Services Banner Image' )->set_value_type( 'url' ),	    
	Field::make( 'textarea', 'projects-content', 'Services Content' ),
));


/* Gallery: Start */
Container::make( 'post_meta', __( 'Gallery' ) )
->where( 'post_type', '=', 'page' ) // only show our new fields on pages
->where( 'post_template', '=', 'projects.php' )
->add_fields( array(
	Field::make( 'complex', 'galleryitem', 'Gallery' )
	->add_fields( array(
        Field::make( 'text', 'galleryitemtitle', 'Title' )->set_width(70),
        Field::make( 'complex', 'galleryimage' )
        ->add_fields( array(
            Field::make( 'image', 'galleryimg', 'Image' )->set_value_type( 'url' )->set_width(30)->help_text('Image Size: 800px x 600px'),
        ))
    )
),
));


/* -------------------------------------- Serviced Detail Page: CMS Ends ----------------------------------- */

Container::make( 'post_meta', __( 'Services' ) )
	->where( 'post_type', '=', 'page' )   // -----------------------> this helps show fields on 'Pages', not on 'Posts'
	->where( 'post_template', '=', 'service-detail-page.php' )     // -----> only show in specific templates				
	->add_fields( array(
    Field::make( 'image', 'service-detail-page-bannerimage', 'Banner Image' )->set_value_type( 'url' )->help_text('Image Size: 1366px x 300px'),	    
	Field::make( 'rich_text', 'service-detail-page-content', 'Content' ),
	Field::make( 'image', 'service-detail-page-image', 'Image' )->set_value_type( 'url' ),
	Field::make( 'rich_text', 'service-detail-page-lists', 'Points' ),
    Field::make( 'rich_text', 'faq', 'FAQ' ),
));


/* ------------------------------------- Contact Us Page: CMS Start ------------------------------------- */

/* Contact Us: Start */
Container::make( 'post_meta', __( 'Products' ) )
	->where( 'post_type', '=', 'page' )   // -----------------------> this helps show fields on 'Pages', not on 'Posts'
	->where( 'post_template', '=', 'contact-us.php' )     // -----> only show in specific templates				
	->add_fields( array(
    Field::make( 'image', 'contact-us-bannerimage', 'Banner Image' )->set_value_type( 'url' ),	    
	Field::make( 'rich_text', 'contact-us-content', 'Contact Us Content' ),
));
/* Contact Us: End */

}


/* ---------------------------------------- Carbon fields: End ------------------------------------------ */

/* register style and script  */
function css_and_js() {
    
    /* CSS & Script  */	
    wp_enqueue_style( 'home', get_stylesheet_directory_uri() . '/assets/css/styles.css' );
    wp_enqueue_script('css_and_js', get_stylesheet_directory_uri().'/assets/js/scripts.js','','1.1', true);	
        
    }
    
    add_action( 'wp_enqueue_scripts', 'css_and_js' ); 



// Remove dns-prefetch Link from WordPress Head (Frontend)
remove_action( 'wp_head', 'wp_resource_hints', 2 );

/* Remove Parent theme Style in Child theme */
add_action( 'wp_print_styles', 'child_overwrite_styles', 100 );
function child_overwrite_styles() {
wp_deregister_style( 'twenty-twenty-one-style' );
}
/* Gutenberg  */
function remove_gutenberg_styles() {
     wp_dequeue_style( 'wp-block-library' );
     wp_dequeue_style( 'wp-block-library-theme' );
}

add_action( 'wp_enqueue_scripts', 'remove_gutenberg_styles', 100 );


function remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}
add_action('widgets_init', 'remove_recent_comments_style');

/* required : remove junk file loading in child theme*/
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

remove_action('wp_head', 'rsd_link');
remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 ); 
remove_action('wp_head', 'wp_generator'); //removes WP Version # for security
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action('wp_head', 'rel_canonical');


/* Removing 'wp-embed.min.js' and other embed files in footer  */
function disable_embeds_init() {

    // Remove the REST API endpoint.
    remove_action('rest_api_init', 'wp_oembed_register_route');

    // Turn off oEmbed auto discovery.
    // Don't filter oEmbed results.
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

    // Remove oEmbed discovery links.
    remove_action('wp_head', 'wp_oembed_add_discovery_links');

    // Remove oEmbed-specific JavaScript from the front-end and back-end.
    remove_action('wp_head', 'wp_oembed_add_host_js');
}
add_action('init', 'disable_embeds_init', 9999);


//Dequeue Print.css Styles
function printcss() {
    wp_dequeue_style( 'twenty-twenty-one-print-style' );
        wp_deregister_style( 'twenty-twenty-one-print-style' );
}
add_action( 'wp_print_styles', 'printcss' );

// Remove 'global-styles-inline-css' from head
function wps_deregister_styles() {
    wp_dequeue_style( 'global-styles' );
}
add_action( 'wp_enqueue_scripts', 'wps_deregister_styles', 100 );


// svg multiple rendering removal
remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );

// remove all classes from body 
add_filter('body_class','remove_all_class_names');
function remove_all_class_names($classes) {
    return array();
}


//Page Slug Body Class
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
    $classes[] = $post->post_name;
    }
    return $classes;
    }
    add_filter( 'body_class', 'add_slug_body_class' );


// Remove a specific class from body tag

/* Add custom classes to nav li tag */
function _namespace_menu_item_class( $classes, $item ) {       
    $classes[] = "main-nav__item"; // you can add multiple classes here
    return $classes;
} 
add_filter( 'nav_menu_css_class' , '_namespace_menu_item_class' , 10, 2 );


/* Add active class to current menu */
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-page-ancestor', $classes) || in_array('current-menu-item', $classes) ){
        $classes[] = 'main-nav__item--active ';
    }
    return $classes;
}


function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);




/* Disable Wysiwyg Completely */
add_action('init', 'my_remove_editor_from_post_type');
function my_remove_editor_from_post_type() {
    remove_post_type_support( 'page', 'editor' );
}


/* Register and enqueue a custom stylesheet in the WordPress admin */

function wpdocs_enqueue_custom_admin_style() {
    wp_register_style( 'custom_wp_admin_css', get_stylesheet_directory_uri() . '/assets/css/admin-styles.css', false, '1.0.0' );
    wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'wpdocs_enqueue_custom_admin_style' );

add_action( 'enqueue_block_editor_assets', function() {
    $css = 'body .block-editor__container .editor-styles-wrapper{background-color: #ff0000;}';
    wp_add_inline_style( 'generate-block-editor-styles', $css );
}, 100 );

    
?>