<?php
/*
 * Debug CSS loading issue
 * Access: /wp-content/themes/greentech-theme/debug-css.php
 */

// Check if we're in WordPress
if (!defined('ABSPATH')) {
    echo "<h1>Run this from WordPress context</h1>";
    exit;
}

// Get theme directory info
$theme_dir = get_template_directory();
$theme_url = get_template_directory_uri();

echo "<h2>CSS Loading Debug</h2>";
echo "<h3>Theme Info:</h3>";
echo "<ul>";
echo "<li>Theme Directory: " . $theme_dir . "</li>";
echo "<li>Theme URL: " . $theme_url . "</li>";
echo "<li>Stylesheet URI: " . get_stylesheet_uri() . "</li>";
echo "</ul>";

echo "<h3>CSS Files Check:</h3>";
echo "<ul>";

// Check if files exist
$css_files = [
    $theme_dir . '/style.css' => 'style.css',
    $theme_dir . '/css/main.css' => 'css/main.css',
    $theme_dir . '/css/responsive.css' => 'css/responsive.css'
];

foreach ($css_files as $path => $file) {
    if (file_exists($path)) {
        echo "<li style='color: green;'>✓ $file exists</li>";
    } else {
        echo "<li style='color: red;'>✗ $file NOT FOUND at $path</li>";
    }
}

echo "</ul>";

echo "<h3>Test Links:</h3>";
echo "<ul>";
echo "<li><a href='" . $theme_url . "/style.css' target='_blank'>style.css</a></li>";
echo "<li><a href='" . $theme_url . "/css/main.css' target='_blank'>main.css</a></li>";
echo "<li><a href='" . $theme_url . "/css/responsive.css' target='_blank'>responsive.css</a></li>";
echo "</ul>";
?>