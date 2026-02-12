<?php get_header(); ?>

<!-- Hero Section -->
<section class="service-hero">
    <div class="container">
        <div class="breadcrumbs animate-fade-up">
            <a href="<?php echo home_url('/'); ?>">Home</a> / 
            <a href="<?php echo home_url('/#services'); ?>">Services</a> /
            <span>Analytics & Reporting</span>
        </div>
        
        <div class="hero-content">
            <div class="hero-text animate-slide-left">
                <div class="service-icon-large">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <h1>Analytics & <span class="highlight">Reporting</span></h1>
                <p class="hero-subtitle">Get complete transparency into your advertising performance. Real-time dashboards, custom reports, and actionable insights.</p>
                <a href="#contact" class="btn btn-primary glow-effect">See Your Data</a>
            </div>
            <div class="hero-visual animate-slide-right delay-200">
            <div class="hero-visual animate-slide-right delay-200">
                <div class="service-visual-dashboard">
                    <div class="dashboard-container">
                        <div class="glass-panel">
                            <div class="panel-header">
                                <div class="dot red"></div>
                                <div class="dot yellow"></div>
                                <div class="dot green"></div>
                            </div>
                            <div class="panel-body">
                                <div class="chart-area">
                                    <div class="bar-chart">
                                        <div class="d-bar b1"></div>
                                        <div class="d-bar b2"></div>
                                        <div class="d-bar b3"></div>
                                        <div class="d-bar b4"></div>
                                    </div>
                                    <div class="donut-chart">
                                        <svg viewBox="0 0 36 36" class="circular-chart type-1">
                                            <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                            <path class="circle" stroke-dasharray="75, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" />
                                        </svg>
                                        <div class="percentage">75%</div>
                                    </div>
                                </div>
                                <div class="data-lines">
                                    <div class="d-line w-70"></div>
                                    <div class="d-line w-50"></div>
                                    <div class="d-line w-90"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Floating Elements -->
                        <div class="float-stat stat-1">
                            <span>ROI</span>
                            <strong>+120%</strong>
                        </div>
                        <div class="float-stat stat-2">
                            <span>CTR</span>
                            <strong>4.5%</strong>
                        </div>
                        <div class="dashboard-glow"></div>
                    </div>
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
            <h2>Data You Can Trust</h2>
            <p>We turn raw numbers into valuable business intelligence.</p>
        </div>

        <div class="details-grid">
            <div class="detail-item animate-fade-up delay-100">
                <i class="fas fa-tv"></i>
                <h3>Real-Time Dashboard</h3>
                <p>Access your campaign stats 24/7 with our secure client portal.</p>
            </div>
            <div class="detail-item animate-fade-up delay-200">
                <i class="fas fa-file-alt"></i>
                <h3>Custom Reporting</h3>
                <p>Weekly or monthly PDF reports tailored to your specific KPIs and goals.</p>
            </div>
            <div class="detail-item animate-fade-up delay-300">
                <i class="fas fa-search-dollar"></i>
                <h3>ROI Analysis</h3>
                <p>Track every dollar spent back to actual revenue and closed deals.</p>
            </div>
            <div class="detail-item animate-fade-up delay-400">
                <i class="fas fa-chess-knight"></i>
                <h3>Competitor Benchmarking</h3>
                <p>See how you stack up against industry leaders and direct competitors.</p>
            </div>
        </div>
    </div>
</section>

<!-- Impact Section -->
<section class="service-impact">
    <div class="container">
        <div class="impact-content animate-slide-left">
            <h2>Insight Driven Decisions</h2>
            <p>Stop guessing and start knowing. Our improved reporting gives you the confidence to scale.</p>
            <ul class="impact-list">
                <li><i class="fas fa-check-circle"></i> Transparent Pricing</li>
                <li><i class="fas fa-check-circle"></i> Attribution Modeling</li>
                <li><i class="fas fa-check-circle"></i> Cross-Channel Insights</li>
                <li><i class="fas fa-check-circle"></i> Data Visualization</li>
            </ul>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="services-cta" id="contact">
    <div class="container animate-fade-up">
        <h2>Ready for Clarity?</h2>
        <p>Understand your advertising performance like never before.</p>
        <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary btn-large">Get Free Consultation</a>
    </div>
</section>

<?php get_footer(); ?>
