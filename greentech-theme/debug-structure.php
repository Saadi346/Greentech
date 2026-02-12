<?php
define('WP_USE_THEMES', false);
require_once __DIR__ . '/../../../../wp-load.php';

echo "Checking Page Structure...\n";
$pages = get_pages();
foreach ($pages as $page) {
    $parent_title = $page->post_parent ? get_the_title($page->post_parent) : 'None';
    $permalink = get_permalink($page->ID);
    echo "ID: " . $page->ID . "\n";
    echo "  Title: " . $page->post_title . "\n";
    echo "  Slug: " . $page->post_name . "\n";
    echo "  Parent: " . $parent_title . " (ID: " . $page->post_parent . ")\n";
    echo "  Template: " . get_post_meta($page->ID, '_wp_page_template', true) . "\n";
    echo "  Permalink: " . $permalink . "\n";
    echo "-----------------------------------\n";
}
