<?php get_header(); ?>

<!-- Hero Section -->
<section class="service-hero">
    <div class="container">
        <div class="breadcrumbs animate-fade-up">
            <a href="<?php echo home_url('/'); ?>">Home</a> / 
            <a href="<?php echo home_url('/#services'); ?>">Services</a> /
            <span>Targeted Campaigns</span>
        </div>
        
        <div class="hero-content">
            <div class="hero-text animate-slide-left">
                <div class="service-icon-large">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h1>Precision <span class="highlight">Targeting</span></h1>
                <p class="hero-subtitle">Reach the right people at the right time. We use advanced demographic, behavioral, and psychographic data to ensure your message lands exactly where it counts.</p>
                <a href="#contact" class="btn btn-primary glow-effect">Start Your Campaign</a>
            </div>
            <div class="hero-visual animate-slide-right delay-200">
                <div class="service-visual-circle">
                    <div class="circle-content">
                        <i class="fas fa-users"></i>
                        <span>Audience</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Detail -->
<section class="service-details">
    <div class="container">
        <div class="section-title animate-fade-up">
            <h2>How Is It Done?</h2>
            <p>Our multi-layered approach ensures granular precision.</p>
        </div>

        <div class="details-grid">
            <div class="detail-item animate-fade-up delay-100">
                <i class="fas fa-map-marked-alt"></i>
                <h3>Geographic Precision</h3>
                <p>Target by country, city, or even specific postal codes to dominate your local market or expand globally.</p>
            </div>
            <div class="detail-item animate-fade-up delay-200">
                <i class="fas fa-user-tag"></i>
                <h3>Demographic Profiling</h3>
                <p>Filter audiences by age, gender, income, education, and professional status to find your perfect customer.</p>
            </div>
            <div class="detail-item animate-fade-up delay-300">
                <i class="fas fa-heart"></i>
                <h3>Interest & Behavior</h3>
                <p>Leverage browsing history and purchase behavior to connect with users likely to convert.</p>
            </div>
            <div class="detail-item animate-fade-up delay-400">
                <i class="fas fa-mobile-alt"></i>
                <h3>Device & Platform</h3>
                <p>Optimize for mobile, desktop, or tablet, and choose the right platforms (Social, Search, Display).</p>
            </div>
        </div>
    </div>
</section>

<!-- Impact Section -->
<section class="service-impact">
    <div class="container">
        <div class="impact-content animate-slide-left">
            <h2>Why Targeted Campaigns Matter</h2>
            <p>Stop wasting budget on broad audiences. Precision targeting increases relevance, boosts engagement, and dramatically lowers your Cost Per Acquisition (CPA).</p>
            <ul class="impact-list">
                <li><i class="fas fa-check-circle"></i> Higher Conversion Rates</li>
                <li><i class="fas fa-check-circle"></i> Reduced Ad Spend</li>
                <li><i class="fas fa-check-circle"></i> Improved Brand Loyalty</li>
                <li><i class="fas fa-check-circle"></i> Better ROI Measurements</li>
            </ul>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="services-cta" id="contact">
    <div class="container animate-fade-up">
        <h2>Ready to Pinpoint Your Success?</h2>
        <p>Let's build a custom audience profile for your next campaign.</p>
        <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary btn-large">Get Free Consultation</a>
    </div>
</section>

<?php get_footer(); ?>
