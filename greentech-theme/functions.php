<?php
/**
 * GreenTech Ads Theme functions and definitions
 */

// Theme version
define('GREENTECH_VERSION', '1.1.0');

// Theme setup
function greentech_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height' => 60,
        'width' => 200,
        'flex-height' => true,
        'flex-width' => true,
    ));
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'greentech-ads'),
        'footer' => __('Footer Menu', 'greentech-ads'),
    ));
}
add_action('after_setup_theme', 'greentech_setup');

// Enqueue styles and scripts
function greentech_scripts() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap', array(), null);
    
    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
    
    // Main stylesheet (style.css from root)
    wp_enqueue_style('greentech-style', get_stylesheet_uri(), array('google-fonts', 'font-awesome'), GREENTECH_VERSION);
    
    // Custom main.css from css folder
    wp_enqueue_style('greentech-main', get_template_directory_uri() . '/css/main.css', array('greentech-style'), GREENTECH_VERSION);
    
    // Responsive CSS from css folder
    wp_enqueue_style('greentech-responsive', get_template_directory_uri() . '/css/responsive.css', array('greentech-main'), GREENTECH_VERSION);
    
    // Custom JavaScript
    wp_enqueue_script('greentech-script', get_template_directory_uri() . '/js/main.js', array('jquery'), GREENTECH_VERSION, true);
}
add_action('wp_enqueue_scripts', 'greentech_scripts');

// Default menu fallback
function greentech_default_menu() {
    ?>
    <ul class="nav-menu">
        <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
        <li><a href="<?php echo home_url('/#services'); ?>">Services</a></li>
        <li><a href="<?php echo home_url('/features'); ?>">Features</a></li>
        <li><a href="<?php echo home_url('/#pricing'); ?>">Pricing</a></li>
        <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
        <li><a href="<?php echo home_url('/pricing'); ?>" class="btn-nav">Get Started</a></li>
    </ul>
    <?php
}

// Create Targeted Campaigns page if it doesn't exist
function create_targeted_campaigns_page() {
    $page_title = 'Targeted Campaigns';
    $page_slug = 'targeted-campaigns';
    
    // Check if page exists
    $page = get_page_by_path($page_slug);
    
    if (!$page) {
        // Create page
        $page_data = array(
            'post_title'    => $page_title,
            'post_name'     => $page_slug,
            'post_content'  => '', // Empty - template will handle
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_author'   => 1,
        );
        
        $page_id = wp_insert_post($page_data);
        
        // Assign template
        update_post_meta($page_id, '_wp_page_template', 'targeted-campaigns.php');
        
        echo "Page created! ID: " . $page_id;
    } else {
        echo "Page already exists! ID: " . $page->ID;
    }
}

// Run once - then remove this function
// create_targeted_campaigns_page();



