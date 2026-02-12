<?php
/*
Template Name: Contact Page
*/
get_header(); ?>

<section class="service-hero contact-hero">
    <!-- Background Particles -->
    <canvas id="hero-particles" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0; opacity: 0.3;"></canvas>
    <div class="container" style="position: relative; z-index: 2;">
        <!-- Breadcrumbs -->
        <div class="breadcrumbs animate-fade-up">
            <a href="<?php echo home_url('/'); ?>">Home</a> / 
            <span>Contact</span>
        </div>
        
        <div class="hero-content contact-layout">
            <!-- Left Column: Form & Info -->
            <div class="contact-form-section animate-slide-left">
                <h1>Let's <span class="highlight">Collaborate</span></h1>
                <p class="hero-subtitle">Ready to scale your advertising? Send us a message.</p>
                
                <div class="glass-form-container">
                    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" class="contact-form">
                        <div class="form-group">
                            <input type="text" id="name" name="name" required placeholder=" ">
                            <label for="name">Your Name</label>
                            <div class="input-highlight"></div>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" id="email" name="email" required placeholder=" ">
                            <label for="email">Email Address</label>
                            <div class="input-highlight"></div>
                        </div>

                        <div class="form-group">
                            <select id="subject" name="subject" required>
                                <option value="" disabled selected>Select a Topic</option>
                                <option value="campaign">Start a Campaign</option>
                                <option value="demo">Request Demo</option>
                                <option value="support">Support</option>
                            </select>
                            <div class="input-highlight"></div>
                        </div>
                        
                        <div class="form-group">
                            <textarea id="message" name="message" rows="4" required placeholder=" "></textarea>
                            <label for="message">Message</label>
                            <div class="input-highlight"></div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary glow-effect btn-block">
                            <span class="btn-text">Send Message</span>
                            <span class="btn-icon"><i class="fas fa-paper-plane"></i></span>
                        </button>
                    </form>
                </div>

                <div class="contact-info-grid">
                    <div class="info-card">
                        <i class="fas fa-envelope"></i>
                        <span>hello@greentech.com</span>
                    </div>
                    <div class="info-card">
                        <i class="fas fa-phone"></i>
                        <span>+1 (555) 123-4567</span>
                    </div>
                </div>
            </div>

            <!-- Right Column: Visual -->
            <div class="hero-visual contact-visual animate-slide-right delay-200">
                <div class="service-visual-globe">
                    <div class="globe-container">
                        <div class="globe-wireframe"></div>
                        <div class="globe-particles">
                            <!-- JS/CSS will generate or we use static nodes -->
                            <div class="g-node n1"></div>
                            <div class="g-node n2"></div>
                            <div class="g-node n3"></div>
                            <div class="g-node n4"></div>
                            <div class="g-node n5"></div>
                        </div>
                        <div class="globe-halo"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.querySelector('.contact-form');
    
    if(contactForm) {
        contactForm.onsubmit = function(e) {
            e.preventDefault();
            
            const btn = this.querySelector('button[type="submit"]');
            const originalContent = btn.innerHTML;
            
            // Simple Loading State
            btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            btn.style.opacity = '0.7';
            
            // Force Success after 1s
            setTimeout(function() {
                
                // 1. Restore Button
                btn.innerHTML = originalContent;
                btn.style.opacity = '1';
                
                // 2. Reset Form
                contactForm.reset();
                
                // 3. Show Toast (Manual handling to be safe)
                let toast = document.createElement('div');
                toast.className = 'success-toast'; // Class for animation
                // Force styles inline to guarantee visibility
                toast.style.cssText = "position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: rgba(0,0,0,0.95); padding: 30px 50px; border: 2px solid #00ff88; color: #fff; border-radius: 15px; z-index: 999999; display: flex; flex-direction: column; align-items: center; gap: 15px; box-shadow: 0 0 50px rgba(0,255,136,0.4); text-align: center;";
                
                toast.innerHTML = `
                    <div style="width: 60px; height: 60px; background: #00ff88; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                        <i class="fas fa-check" style="color: #000; font-size: 30px;"></i>
                    </div>
                    <h4 style="margin:0; font-size: 24px;">Message Sent!</h4>
                    <p style="margin:0; font-size: 16px; color: #ccc;">We've received your request.</p>
                `;
                
                document.body.appendChild(toast);
                
                // Remove after 3s
                setTimeout(() => toast.remove(), 3000);
            }, 1000); // 1 second delay
        };
    }
});
</script>

<?php get_footer(); ?>
