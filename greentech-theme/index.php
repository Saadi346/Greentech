<?php get_header(); ?>

<!-- Hero Section with Particle Network -->
<section class="hero homepage-hero" id="home-hero">
    <canvas id="hero-particles"></canvas>
    <div class="container hero-content-wrapper">
        <div class="hero-text animate-fade-up">
            <h1>Maximize Your<br>ROI<br>with
                <div class="fade-text-container">
                    <span class="fade-text active">Smart<br>Advertising</span>
                    <span class="fade-text">Precision<br>Targeting</span>
                    <span class="fade-text">AI<br>Optimization</span>
                </div>
            </h1>
            <p class="hero-subtitle">Advanced AI-powered solutions. Increase conversions by up to <span class="highlight-green">300%</span>.</p>
            
            <div class="hero-buttons">
                <a href="<?php echo home_url('/free-trial'); ?>" class="btn btn-primary glow-effect">Start Free Trial</a>
                
            </div>
            <div class="explore-btnn">
                <a href="<?php echo home_url('/features'); ?>" class="btn btn-secondary glass-btn">Explore Features</a>
            </div>
        </div>

        <div class="hero-visual animate-slide-left">
            <!-- Robot Removed as requested -->
        </div>
        
        <div class="hero-stats-bar glass-panel animate-fade-up delay-200">
            <div class="stat-item">
                <h3 class="counter" data-target="15000">0</h3>
                <p>Global Clients</p>
            </div>
            <div class="stat-item">
                <h3 class="counter" data-target="89">0</h3><span class="percent">%</span>
                <p>ROI Increase</p>
            </div>
            <div class="stat-item">
                <h3>24/7</h3>
                <p>AI Optimization</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section (Glassmorphism + Scanning Effect) -->
<section class="services" id="services">
    <div class="container">
        <div class="section-title animate-on-scroll">
            <h2>Our Advertising Services</h2>
            <p class="section-subtitle">Comprehensive solutions for all your advertising needs</p>
        </div>
        
        <div class="services-grid">
            <!-- Service 1 -->
            <div class="service-card glass-card animate-on-scroll">
                <div class="scanning-line"></div>
                <div class="service-icon-wrapper">
                    <i class="fas fa-bullseye pulse-icon"></i>
                </div>
                <h3>Targeted Campaigns</h3>
                <p>Reach your ideal audience with precision targeting across all platforms.</p>
                <a href="<?php echo home_url('/targeted-campaigns'); ?>" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            
            <!-- Service 2 -->
            <div class="service-card glass-card animate-on-scroll delay-100">
                <div class="scanning-line"></div>
                <div class="service-icon-wrapper">
                    <i class="fas fa-robot spin-hover"></i>
                </div>
                <h3>AI Optimization</h3>
                <p>Our AI continuously optimizes your campaigns for maximum performance.</p>
                <a href="<?php echo home_url('/ai-optimization'); ?>" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            
            <!-- Service 3 -->
            <div class="service-card glass-card animate-on-scroll delay-200">
                <div class="scanning-line"></div>
                <div class="service-icon-wrapper">
                    <i class="fas fa-chart-bar rise-icon"></i>
                </div>
                <h3>Analytics & Reporting</h3>
                <p>Comprehensive insights and real-time reporting on all campaigns.</p>
                <a href="<?php echo home_url('/analytics-reporting'); ?>" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Features Section (Interactive Preview) -->
<section class="features-preview" id="features">
    <div class="container">
        <div class="section-title animate-on-scroll">
            <h2>Powerful Features</h2>
            <p class="section-subtitle">Everything you need to succeed in digital advertising</p>
        </div>
        
        <div class="features-grid-modern">
            <div class="feature-box animate-on-scroll">
                <div class="f-icon"><i class="fas fa-network-wired"></i></div>
                <h3>Multi-Platform</h3>
                <p>Facebook, Google, LinkedIn - One Dashboard.</p>
            </div>
            
            <div class="feature-box animate-on-scroll delay-100">
                <div class="f-icon"><i class="fas fa-gavel"></i></div>
                <h3>Real-Time Bidding</h3>
                <p>Advanced algorithms for optimal pricing.</p>
            </div>
            
            <div class="feature-box animate-on-scroll delay-200">
                <div class="f-icon"><i class="fas fa-vial"></i></div>
                <h3>A/B Testing</h3>
                <p>Auto-test variations to find winners.</p>
            </div>
            
            <div class="feature-box animate-on-scroll delay-300">
                <div class="f-icon"><i class="fas fa-spy"></i></div>
                <h3>Competitor Intel</h3>
                <p>Spy on competitor strategies Instantly.</p>
            </div>
        </div>
        
        <div class="center-btn animate-on-scroll">
            <a href="<?php echo home_url('/features'); ?>" class="btn btn-outline glow-border">View All Features</a>
        </div>
    </div>
</section>



<script>
document.addEventListener('DOMContentLoaded', () => {
    
    // 1. Fade Text Animation (Fade Out -> Fade In)
    const fadeTexts = document.querySelectorAll('.fade-text');
    let fadeIndex = 0;
    const displayTime = 3000; // Time to show text
    const transitionTime = 1000; // Match CSS transition time

    function cycleText() {
        if (fadeTexts.length === 0) return;

        // 1. Fade OUT current
        fadeTexts[fadeIndex].classList.remove('active');

        // 2. Wait for fade out to complete
        setTimeout(() => {
            // 3. Increment index
            fadeIndex = (fadeIndex + 1) % fadeTexts.length;

            // 4. Fade IN next
            fadeTexts[fadeIndex].classList.add('active');

            // 5. Schedule next cycle
            setTimeout(cycleText, displayTime);
        }, transitionTime);
    }

    // Start loop
    if (fadeTexts.length > 0) {
        // Initial delay before first change
        setTimeout(cycleText, displayTime);
    }


    // 2. Intersection Observer for Scroll Animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                
                // Trigger Count Up if it's stats
                if (entry.target.querySelector('.counter')) {
                   startCounters(entry.target);
                }
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.animate-on-scroll, .hero-stats-bar').forEach(el => observer.observe(el));

    function startCounters(container) {
        const counters = container.querySelectorAll('.counter');
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const inc = target / 100;
            let count = 0;
            const updateCount = () => {
                count += inc;
                if (count < target) {
                    counter.innerText = Math.ceil(count);
                    requestAnimationFrame(updateCount);
                } else {
                    counter.innerText = target;
                    if(target > 1000) counter.innerText = (target / 1000) + 'K+'; // Format K
                }
            };
            updateCount();
        });
    }

    // 3. Particle Network Background is in main.js
});
</script>



<?php get_footer(); ?>