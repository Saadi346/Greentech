<?php
/*
Template Name: Pricing Page
*/
get_header(); ?>

<section class="service-hero pricing-hero">
    <!-- Background Particles -->
    <canvas id="hero-particles" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0; opacity: 0.3;"></canvas>
    
    <div class="container" style="position: relative; z-index: 2;">
        <div class="pricing-header animate-fade-up">
            <h1>Simple, Transparent <span class="highlight">Pricing</span></h1>
            <p class="hero-subtitle">Choose the plan that powers your growth.</p>
        </div>
        
        <div class="pricing-grid">
            <!-- STARTER PLAN -->
            <div class="pricing-card glass-card animate-fade-up delay-100">
                <div class="plan-header">
                    <h3>Starter</h3>
                    <div class="price">
                        <span class="currency">$</span>
                        <span class="amount">49</span>
                        <span class="period">/mo</span>
                    </div>
                    <p>Perfect for small businesses starting with AI ads.</p>
                </div>
                <ul class="features-list">
                    <li><i class="fas fa-check"></i> AI Ad Optimization</li>
                    <li><i class="fas fa-check"></i> 5 Active Campaigns</li>
                    <li><i class="fas fa-check"></i> Basic Analytics</li>
                    <li><i class="fas fa-check"></i> Email Support</li>
                </ul>
                <a href="<?php echo home_url('/free-trial?plan=starter'); ?>" class="btn btn-outline btn-block">Start Free Trial</a>
            </div>
            
            <!-- PRO PLAN (Featured) -->
            <div class="pricing-card glass-card featured animate-fade-up delay-200">
                <div class="best-value-badge">Best Value</div>
                <div class="plan-header">
                    <h3>Pro Growth</h3>
                    <div class="price">
                        <span class="currency">$</span>
                        <span class="amount">199</span>
                        <span class="period">/mo</span>
                    </div>
                    <p>For scaling agencies and power users.</p>
                </div>
                <ul class="features-list">
                    <li><i class="fas fa-check"></i> Advanced AI & ML Models</li>
                    <li><i class="fas fa-check"></i> Unlimited Campaigns</li>
                    <li><i class="fas fa-check"></i> Competitor Intelligence</li>
                    <li><i class="fas fa-check"></i> Priority Support</li>
                    <li><i class="fas fa-check"></i> A/B Testing Suite</li>
                </ul>
                <a href="<?php echo home_url('/free-trial?plan=pro'); ?>" class="btn btn-primary glow-effect btn-block">Start Free Trial</a>
            </div>
            
            <!-- ENTERPRISE PLAN -->
            <div class="pricing-card glass-card animate-fade-up delay-300">
                <div class="plan-header">
                    <h3>Enterprise</h3>
                    <div class="price">
                        <span class="amount">Custom</span>
                    </div>
                    <p>Tailored solutions for large organizations.</p>
                </div>
                <ul class="features-list">
                    <li><i class="fas fa-check"></i> Dedicated Account Manager</li>
                    <li><i class="fas fa-check"></i> Custom API Access</li>
                    <li><i class="fas fa-check"></i> White-label Reporting</li>
                    <li><i class="fas fa-check"></i> SLA Guarantee</li>
                    <li><i class="fas fa-check"></i> On-premise Deployment</li>
                </ul>
                <a href="<?php echo home_url('/contact?subject=enterprise'); ?>" class="btn btn-outline btn-block">Contact Sales</a>
            </div>
        </div>
        
        <div class="faq-section animate-fade-up delay-400">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-grid">
                <div class="faq-item">
                    <h4>Can I cancel anytime?</h4>
                    <p>Yes, all plans are month-to-month with no long-term contracts.</p>
                </div>
                <div class="faq-item">
                    <h4>Do you offer refunds?</h4>
                    <p>We offer a 14-day money-back guarantee if you're not satisfied.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- INLINE CSS FOR PRICING -->
<style>
.pricing-hero {
    padding: 120px 0 80px;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.pricing-header {
    text-align: center;
    margin-bottom: 60px;
}

.pricing-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
    align-items: start;
}

.pricing-card {
    padding: 40px;
    border-radius: 20px;
    position: relative;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.pricing-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0, 255, 136, 0.2);
}

.pricing-card.featured {
    border: 2px solid #00ff88;
    background: rgba(20, 20, 20, 0.8);
    transform: scale(1.05);
    z-index: 2;
}
.pricing-card.featured:hover {
    transform: scale(1.05) translateY(-10px);
}

.best-value-badge {
    position: absolute;
    top: -15px;
    left: 50%;
    transform: translateX(-50%);
    background: #00ff88;
    color: #000;
    padding: 5px 20px;
    border-radius: 20px;
    font-weight: 700;
    font-size: 14px;
    text-transform: uppercase;
    box-shadow: 0 5px 15px rgba(0, 255, 136, 0.4);
}

.plan-header {
    text-align: center;
    margin-bottom: 30px;
    border-bottom: 1px solid rgba(255,255,255,0.1);
    padding-bottom: 20px;
}

.plan-header h3 {
    font-size: 24px;
    margin-bottom: 15px;
    color: #fff;
}

.price {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 10px;
    color: #00ff88;
}

.currency { font-size: 24px; margin-top: -15px; }
.amount { font-size: 48px; font-weight: 700; }
.period { font-size: 16px; color: #aaa; align-self: flex-end; margin-bottom: 10px; margin-left: 5px; }

.features-list {
    list-style: none;
    padding: 0;
    margin-bottom: 30px;
}

.features-list li {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    color: #ccc;
    font-size: 15px;
}

.features-list li i {
    color: #00ff88;
    margin-right: 10px;
    width: 20px;
}

.faq-section {
    margin-top: 80px;
    text-align: center;
}
.faq-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 40px;
    text-align: left;
}
.faq-item h4 { color: #00ff88; margin-bottom: 10px; }

@media (max-width: 900px) {
    .pricing-card.featured { transform: scale(1); }
    .pricing-card.featured:hover { transform: translateY(-10px); }
}
</style>

<?php get_footer(); ?>
