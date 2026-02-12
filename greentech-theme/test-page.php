<?php
// Test if Targeted Campaigns page exists
$page = get_page_by_path('targeted-campaigns');
if ($page) {
    echo "<h1 style='color: green;'>Page Found!</h1>";
    echo "<p>Page ID: " . $page->ID . "</p>";
    echo "<p>Page Title: " . $page->post_title . "</p>";
    echo "<p>Page Status: " . $page->post_status . "</p>";
    echo "<p>Permalink: <a href='" . get_permalink($page->ID) . "'>" . get_permalink($page->ID) . "</a></p>";
} else {
    echo "<h1 style='color: red;'>Page NOT Found!</h1>";
    echo "<p>WordPress cannot find a page with slug 'targeted-campaigns'</p>";
}

// List all pages
$all_pages = get_pages();
echo "<h2>All Pages:</h2>";
echo "<ul>";
foreach ($all_pages as $p) {
    echo "<li><strong>" . $p->post_title . "</strong> (Slug: " . $p->post_name . ") - <a href='" . get_permalink($p->ID) . "'>View</a></li>";
}
echo "</ul>";
?>