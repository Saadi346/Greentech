<?php
/**
 * Template Name: Features
 * Template Post Type: page
 *
 * @package GreenTech Ads
 */

get_header();
?>

<!-- Hero Section: Network Visualization -->
<section class="features-hero adtech-hero">
    <canvas id="network-canvas"></canvas>
    <div class="container">
        <div class="hero-content text-center">
            <h1 class="fade-in-up">Global Ad <span class="highlight">Intelligence</span></h1>
            <p class="hero-subtitle fade-in-up delay-200">Connect with 4.5 billion users instantly. Visualizing real-time reach.</p>
            <div class="live-stats fade-in-up delay-400">
                <div class="live-stat">
                    <span class="stat-value" id="active-users">0</span>
                    <span class="stat-label">Active Users</span>
                </div>
                <div class="live-stat">
                    <span class="stat-value" id="ad-impressions">0</span>
                    <span class="stat-label">Impressions/sec</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 1: Targeting Radar -->
<section class="feature-section radar-section">
    <div class="container">
        <div class="feature-layout left-align">
            <div class="feature-text animate-slide-right">
                <h2>Precision <span class="highlight">Radar</span> Targeting</h2>
                <p>Our algorithms scan millions of data points to lock onto your ideal customer profile with millimetric precision.</p>
                <ul class="feature-list">
                    <li><i class="fas fa-crosshairs"></i> Behavioral Locking</li>
                    <li><i class="fas fa-map-marker-alt"></i> Geo-Fencing</li>
                    <li><i class="fas fa-fingerprint"></i> Device Fingerprinting</li>
                </ul>
            </div>
            <div class="feature-visual animate-slide-left">
                <div class="radar-container">
                    <div class="radar-scan"></div>
                    <div class="radar-grid"></div>
                    <!-- Targets will be added via JS -->
                    <div class="target t1" style="top: 20%; left: 30%;"></div>
                    <div class="target t2" style="top: 60%; left: 70%;"></div>
                    <div class="target t3" style="top: 80%; left: 20%;"></div>
                    <div class="target t4" style="top: 30%; left: 80%;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 2: Real-Time Bidding Engine -->
<section class="feature-section bidding-section">
    <div class="container">
        <div class="feature-layout right-align">
            <div class="feature-visual animate-slide-right">
                <div class="bidding-engine-ui">
                    <div class="bidding-header">
                        <span>LIVE BID STREAM</span>
                        <span class="status-indicator">● LIVE</span>
                    </div>
                    <div class="bidding-feed" id="bidding-feed">
                        <!-- Feed items injected via JS -->
                    </div>
                    <div class="bidding-footer">
                        <span>Win Rate: <span class="highlight">94.2%</span></span>
                        <span>Avg CPM: <span class="highlight">$2.15</span></span>
                    </div>
                </div>
            </div>
            <div class="feature-text animate-slide-left">
                <h2>Real-Time <span class="highlight">Bidding</span></h2>
                <p>Don't just buy ads. Compete and win in the microseconds before a page loads. Our smart bidder saves you money while securing premium placements.</p>
                <ul class="feature-list">
                    <li><i class="fas fa-bolt"></i> < 50ms Response Time</li>
                    <li><i class="fas fa-coins"></i> Dynamic Bid Adjustment</li>
                    <li><i class="fas fa-shield-alt"></i> Fraud Protection</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: Interactive Analytics -->
<section class="feature-section analytics-section">
    <div class="container">
        <div class="section-title text-center animate-fade-up">
            <h2>Data You Can <span class="highlight">Touch</span></h2>
            <p>Interactive reports that grow with your business.</p>
        </div>
        
        <div class="charts-grid">
            <div class="chart-card animate-fade-up delay-100">
                <h3>Conversion Growth</h3>
                <div class="chart-container">
                    <div class="bar-chart">
                        <div class="chart-bar" style="--height: 30%" data-label="Q1"></div>
                        <div class="chart-bar" style="--height: 50%" data-label="Q2"></div>
                        <div class="chart-bar" style="--height: 45%" data-label="Q3"></div>
                        <div class="chart-bar" style="--height: 80%" data-label="Q4"></div>
                        <div class="chart-bar highlight-bar" style="--height: 95%" data-label="Q1"></div>
                    </div>
                </div>
            </div>
            
            <div class="chart-card animate-fade-up delay-200">
                <h3>Audience Split</h3>
                <div class="chart-container donut-container">
                    <div class="donut-chart">
                        <div class="donut-segment s1"></div>
                        <div class="donut-segment s2"></div>
                        <div class="donut-segment s3"></div>
                        <div class="donut-center">
                            <span>Total</span>
                            <strong>1.2M</strong>
                        </div>
                    </div>
                    <div class="donut-legend">
                        <span><span class="dot d1"></span> Mobile</span>
                        <span><span class="dot d2"></span> Desktop</span>
                        <span><span class="dot d3"></span> TV</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="services-cta">
    <div class="container animate-fade-up">
        <h2>Ready to Dominate the Market?</h2>
        <p>Launch your first intelligent campaign in minutes.</p>
        <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary btn-large glow-btn">Launch Platform</a>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    
    // 1. Network Background Animation (Simple Canvas)
    const canvas = document.getElementById('network-canvas');
    const ctx = canvas.getContext('2d');
    let width, height;
    let particles = [];
    
    function resize() {
        width = canvas.width = window.innerWidth;
        height = canvas.height = window.innerHeight;
    }
    
    class Particle {
        constructor() {
            this.x = Math.random() * width;
            this.y = Math.random() * height;
            this.vx = (Math.random() - 0.5) * 1;
            this.vy = (Math.random() - 0.5) * 1;
            this.size = Math.random() * 2 + 1;
        }
        update() {
            this.x += this.vx;
            this.y += this.vy;
            if (this.x < 0 || this.x > width) this.vx *= -1;
            if (this.y < 0 || this.y > height) this.vy *= -1;
        }
        draw() {
            ctx.fillStyle = 'rgba(0, 255, 136, 0.5)';
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fill();
        }
    }
    
    function initParticles() {
        particles = [];
        for (let i = 0; i < 50; i++) particles.push(new Particle());
    }
    
    function animateParticles() {
        ctx.clearRect(0, 0, width, height);
        particles.forEach(p => {
            p.update();
            p.draw();
            particles.forEach(p2 => {
                const dx = p.x - p2.x;
                const dy = p.y - p2.y;
                const dist = Math.sqrt(dx*dx + dy*dy);
                if (dist < 150) {
                    ctx.strokeStyle = `rgba(0, 255, 136, ${0.1 - dist/1500})`;
                    ctx.beginPath();
                    ctx.moveTo(p.x, p.y);
                    ctx.lineTo(p2.x, p2.y);
                    ctx.stroke();
                }
            });
        });
        requestAnimationFrame(animateParticles);
    }
    
    window.addEventListener('resize', () => { resize(); initParticles(); });
    resize();
    initParticles();
    animateParticles();

    // 2. Live Numbers Counter
    function animateValue(obj, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            obj.innerHTML = Math.floor(progress * (end - start) + start).toLocaleString();
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }
    
    animateValue(document.getElementById("active-users"), 0, 4520193, 2000);
    animateValue(document.getElementById("ad-impressions"), 0, 842, 2000);
    
    // Continuous random updates for "Live" feel
    setInterval(() => {
        const el = document.getElementById("active-users");
        let val = parseInt(el.innerHTML.replace(/,/g, ''));
        val += Math.floor(Math.random() * 100) - 40;
        el.innerHTML = val.toLocaleString();
    }, 2000);

    // 3. Bidding Feed Simulation
    const feed = document.getElementById('bidding-feed');
    const companies = ['Nike', 'Apple', 'Samsung', 'Tesla', 'Coca-Cola', 'Amazon'];
    const placements = ['Mobile Ban', 'Video Pre', 'Search Top', 'Social Feed'];
    
    function addBid() {
        const company = companies[Math.floor(Math.random() * companies.length)];
        const placement = placements[Math.floor(Math.random() * placements.length)];
        const bid = (Math.random() * 5 + 0.5).toFixed(2);
        const win = Math.random() > 0.3;
        
        const item = document.createElement('div');
        item.className = 'bid-item';
        item.innerHTML = `
            <span class="bid-company">${company}</span>
            <span class="bid-place">${placement}</span>
            <span class="bid-amount">$${bid}</span>
            <span class="bid-status ${win ? 'win' : 'loss'}">${win ? 'WON' : 'LOSS'}</span>
        `;
        
        feed.insertBefore(item, feed.firstChild);
        if (feed.children.length > 8) feed.removeChild(feed.lastChild);
    }
    
    setInterval(addBid, 800);

    // 4. Scroll Animations (Intersection Observer)
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                
                // Specific logic for targets appearing in radar
                if (entry.target.classList.contains('radar-section')) {
                    document.querySelectorAll('.target').forEach((t, i) => {
                        setTimeout(() => t.classList.add('visible'), i * 500);
                    });
                }
                
                // Animate Chart Bars
                if (entry.target.classList.contains('chart-card')) {
                    const bars = entry.target.querySelectorAll('.chart-bar');
                    bars.forEach((bar, i) => {
                        setTimeout(() => {
                            bar.style.height = bar.style.getPropertyValue('--height');
                        }, i * 200);
                    });
                }
            }
        });
    }, { threshold: 0.2 });

    document.querySelectorAll('.feature-section, .chart-card').forEach(el => observer.observe(el));
});
</script>

<?php get_footer(); ?>
