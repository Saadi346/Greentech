<?php get_header(); ?>

<!-- Hero Section -->
<section class="service-hero">
    <div class="container">
        <div class="breadcrumbs animate-fade-up">
            <a href="<?php echo home_url('/'); ?>">Home</a> / 
            <a href="<?php echo home_url('/#services'); ?>">Services</a> /
            <span>AI Optimization</span>
        </div>
        
        <div class="hero-content">
            <div class="hero-text animate-slide-left">
                <div class="service-icon-large">
                    <i class="fas fa-robot"></i>
                </div>
                <h1>AI <span class="highlight">Optimization</span></h1>
                <p class="hero-subtitle">Harness the power of machine learning to automatically adjust bids, placements, and creatives for maximum ROI interaction.</p>
                <a href="#contact" class="btn btn-primary glow-effect">Automate Your Success</a>
            </div>
            <div class="hero-visual animate-slide-right delay-200">
                <div class="service-visual-robot">
                    <div class="robot-container">
                        <div class="robot-antenna"></div>
                        <div class="robot-head">
                            <div class="robot-eyes">
                                <div class="eye left"></div>
                                <div class="eye right"></div>
                            </div>
                        </div>
                        <div class="robot-body">
                            <div class="core-light"></div>
                        </div>
                        <div class="robot-arms">
                            <div class="arm left"></div>
                            <div class="arm right">
                                <div class="hand"></div>
                            </div>
                        </div>
                        <div class="robot-shadow"></div>
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
            <h2>Smarter Advertising</h2>
            <p>Our AI evolves your campaigns in real-time.</p>
        </div>

        <div class="details-grid">
            <div class="detail-item animate-fade-up delay-100">
                <i class="fas fa-brain"></i>
                <h3>Machine Learning</h3>
                <p>Algorithms that learn from every interaction to predict future performance trends.</p>
            </div>
            <div class="detail-item animate-fade-up delay-200">
                <i class="fas fa-magic"></i>
                <h3>Automated Bidding</h3>
                <p>Real-time bid adjustments to ensure you never overpay for a conversion.</p>
            </div>
            <div class="detail-item animate-fade-up delay-300">
                <i class="fas fa-chart-line"></i>
                <h3>Performance Forecasting</h3>
                <p>Predict campaign outcomes before spending budget with high-accuracy modeling.</p>
            </div>
            <div class="detail-item animate-fade-up delay-400">
                <i class="fas fa-cogs"></i>
                <h3>Creative Optimization</h3>
                <p>Automatically rotate and test ad variations to find the winning combination.</p>
            </div>
        </div>
    </div>
</section>

<!-- Impact Section -->
<section class="service-impact">
    <div class="container">
        <div class="impact-content animate-slide-left">
            <h2>The AI Advantage</h2>
            <p>Manual optimization is slow and reactive. AI optimization is instant and proactive.</p>
            <ul class="impact-list">
                <li><i class="fas fa-check-circle"></i> 24/7 Campaign Monitoring</li>
                <li><i class="fas fa-check-circle"></i> Micro-moment Adjustments</li>
                <li><i class="fas fa-check-circle"></i> Eliminates Human Error</li>
                <li><i class="fas fa-check-circle"></i> Scales Effortlessly</li>
            </ul>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="services-cta" id="contact">
    <div class="container animate-fade-up">
        <h2>Ready to Upgrade?</h2>
        <p>Experience the efficiency of AI-driven advertising today.</p>
        <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary btn-large">Get Free Consultation</a>
    </div>
</section>

<?php get_footer(); ?>
