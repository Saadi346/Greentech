<?php
/**
 * Template Name: Services
 * Template Post Type: page
 *
 * @package GreenTech Ads
 */

get_header();
?>

<!-- Services Hero -->
<section class="services-hero">
    <div class="container">
        <div class="breadcrumbs">
            <a href="<?php echo home_url('/'); ?>">Home</a> / 
            <span>Services</span>
        </div>
        <h1>Our Advertising Services</h1>
        <p class="hero-subtitle">Comprehensive solutions for all your advertising needs</p>
    </div>
</section>

<!-- All Services -->
<section class="all-services">
    <div class="container">
        <div class="services-grid">
            <div class="service-card-large">
                <div class="service-icon">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h3>Targeted Campaigns</h3>
                <p>Reach your ideal audience with precision targeting across all platforms.</p>
                <ul class="service-features">
                    <li>Demographic & Geographic Targeting</li>
                    <li>Interest & Behavior Analysis</li>
                    <li>Multi-Platform Campaign Management</li>
                    <li>Real-Time Optimization</li>
                </ul>
                <a href="<?php echo get_permalink(13); ?>" class="btn btn-primary">Learn More</a>
            </div>
            
            <div class="service-card-large">
                <div class="service-icon">
                    <i class="fas fa-robot"></i>
                </div>
                <h3>AI Optimization</h3>
                <p>Our AI continuously optimizes your campaigns for maximum performance.</p>
                <ul class="service-features">
                    <li>Machine Learning Algorithms</li>
                    <li>Predictive Analytics</li>
                    <li>Automated Bid Management</li>
                    <li>Performance Forecasting</li>
                </ul>
                <a href="<?php echo get_permalink(8); ?>" class="btn btn-primary">Learn More</a>
            </div>
            
            <div class="service-card-large">
                <div class="service-icon">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <h3>Analytics & Reporting</h3>
                <p>Comprehensive insights and real-time reporting on all campaigns.</p>
                <ul class="service-features">
                    <li>Real-Time Dashboard</li>
                    <li>Custom Reporting</li>
                    <li>ROI Analysis</li>
                    <li>Competitor Benchmarking</li>
                </ul>
                <a href="<?php echo get_permalink(10); ?>" class="btn btn-primary">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="services-cta">
    <div class="container">
        <h2>Ready to Transform Your Advertising?</h2>
        <p>Contact us for a free consultation and campaign analysis</p>
        <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary btn-large">Get Free Consultation</a>
    </div>
</section>

<?php get_footer(); ?>