<?php
/*
Template Name: Free Trial Page
*/
get_header(); ?>

<section class="service-hero trial-hero">
    <!-- Background Particles (Reuse global script if possible, or fallback) -->
    <canvas id="hero-particles" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0; opacity: 0.3;"></canvas>
    
    <div class="container" style="position: relative; z-index: 2;">
        <div class="trial-wrapper animate-fade-up">
            
            <!-- STEP 1: SIGNUP FORM -->
            <div id="step-1" class="trial-step active">
                <div class="trial-header">
                    <h1>Start Your <span class="highlight">14-Day Free Trial</span></h1>
                    <p class="hero-subtitle">No credit card required. Full access to AI tools.</p>
                </div>
                
                <div class="glass-form-container trial-form-box">
                    <form id="trial-form" class="contact-form">
                        <div class="form-group">
                            <input type="email" id="email" required placeholder=" ">
                            <label for="email">Work Email</label>
                            <div class="input-highlight"></div>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" id="company" required placeholder=" ">
                            <label for="company">Company Name</label>
                            <div class="input-highlight"></div>
                        </div>
                        
                        <div class="form-group">
                            <input type="password" id="password" required placeholder=" ">
                            <label for="password">Create Password</label>
                            <div class="input-highlight"></div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary glow-effect btn-block">
                            <span class="btn-text">Initialize Account</span>
                            <span class="btn-icon"><i class="fas fa-rocket"></i></span>
                        </button>
                    </form>
                    <p class="trial-note"><i class="fas fa-lock"></i> 256-bit Encrypted Connection</p>
                </div>
            </div>

            <!-- STEP 2: TERMINAL PROCESSING -->
            <div id="step-2" class="trial-step">
                <div class="terminal-window">
                    <div class="terminal-header">
                        <span class="dot red"></span>
                        <span class="dot yellow"></span>
                        <span class="dot green"></span>
                        <span class="title">system_init.exe</span>
                    </div>
                    <div class="terminal-body" id="terminal-content">
                        <!-- JS will inject lines here -->
                    </div>
                    <div class="progress-bar-container">
                        <div class="progress-bar" id="progress-bar"></div>
                    </div>
                </div>
            </div>

            <!-- STEP 3: SUCCESS -->
            <div id="step-3" class="trial-step">
                <div class="success-card">
                    <div class="success-icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <h1>Access Granted</h1>
                    <p>Your workspace is ready. Welcome to the future of advertising.</p>
                    
                    <div class="account-details">
                        <p><strong>Plan:</strong> Enterprise Trial</p>
                        <p><strong>Status:</strong> <span style="color:#00ff88">Active</span></p>
                        <p><strong>Expires:</strong> <?php echo date('M d, Y', strtotime('+14 days')); ?></p>
                    </div>
                    
                    <a href="<?php echo home_url('/dashboard-mockup'); ?>" class="btn btn-primary glow-effect">Enter Dashboard</a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- INLINE STYLES FOR PAGE SPECIFICITY -->
<style>
.trial-hero {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding-top: 100px;
}

.trial-wrapper {
    max-width: 600px;
    margin: 0 auto;
    width: 100%;
}

.trial-step {
    display: none;
    animation: fadeIn 0.5s ease;
}
.trial-step.active {
    display: block;
}

.trial-header {
    text-align: center;
    margin-bottom: 30px;
}

/* Form Overrides */
.trial-form-box {
    border: 1px solid rgba(0, 255, 136, 0.2);
    box-shadow: 0 0 50px rgba(0, 0, 0, 0.5);
}

.trial-note {
    text-align: center;
    margin-top: 15px;
    font-size: 0.8rem;
    color: #666;
}

/* TERMINAL STYLES */
.terminal-window {
    background: #0d1117;
    border-radius: 8px;
    border: 1px solid #333;
    box-shadow: 0 20px 50px rgba(0,0,0,0.5);
    overflow: hidden;
    font-family: 'Courier New', monospace;
}

.terminal-header {
    background: #161b22;
    padding: 10px 15px;
    display: flex;
    align-items: center;
    gap: 8px;
    border-bottom: 1px solid #333;
}

.dot { width: 10px; height: 10px; border-radius: 50%; }
.dot.red { background: #ff5f56; }
.dot.yellow { background: #ffbd2e; }
.dot.green { background: #27c93f; }
.title { margin-left: 10px; color: #8b949e; font-size: 12px; }

.terminal-body {
    padding: 20px;
    height: 300px;
    overflow-y: auto;
    color: #00ff88;
    font-size: 14px;
    line-height: 1.6;
}

.terminal-line { margin-bottom: 5px; opacity: 0; animation: fadeLine 0.1s forwards; }
.terminal-line.error { color: #ff5f56; }
.terminal-line.warning { color: #ffbd2e; }

.progress-bar-container {
    height: 4px;
    background: #161b22;
    width: 100%;
}
.progress-bar {
    height: 100%;
    background: #00ff88;
    width: 0%;
    transition: width 0.2s linear;
    box-shadow: 0 0 10px #00ff88;
}

/* SUCCESS STYLES */
.success-card {
    text-align: center;
    background: rgba(255,255,255,0.03);
    padding: 40px;
    border-radius: 20px;
    border: 1px solid rgba(0, 255, 136, 0.2);
    backdrop-filter: blur(10px);
}

.success-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #00ff88, #00cc6a);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    box-shadow: 0 0 30px rgba(0, 255, 136, 0.4);
}
.success-icon i { font-size: 30px; color: #000; }

.account-details {
    background: rgba(0,0,0,0.3);
    padding: 15px;
    border-radius: 8px;
    margin: 20px 0;
    text-align: left;
    border-left: 3px solid #00ff88;
}

@keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
@keyframes fadeLine { to { opacity: 1; } }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('trial-form');
    
    if(form) {
        form.onsubmit = async function(e) {
            e.preventDefault();
            
            // Switch to Step 2
            document.getElementById('step-1').classList.remove('active');
            document.getElementById('step-2').classList.add('active');
            
            // Run Terminal Sequence
            await runTerminal();
            
            // Switch to Step 3
            setTimeout(() => {
                document.getElementById('step-2').classList.remove('active');
                document.getElementById('step-3').classList.add('active');
            }, 1000);
        };
    }

    async function runTerminal() {
        const lines = [
            "Initializing secure connection...",
            "Verifying credentials...",
            "Allocating dedicated GPU server...",
            "[SUCCESS] Server US-East-1 allocated.",
            "Installing GreenTech AI Core v4.2...",
            "Loading neural network weights...",
            "Optimizing database schema...",
            "Generating API keys...",
            "Finalizing setup..."
        ];

        const terminal = document.getElementById('terminal-content');
        const progress = document.getElementById('progress-bar');
        
        for (let i = 0; i < lines.length; i++) {
            // Add Line
            const p = document.createElement('div');
            p.className = 'terminal-line';
            p.innerText = `> ${lines[i]}`;
            terminal.appendChild(p);
            terminal.scrollTop = terminal.scrollHeight; // Auto scroll
            
            // Update Progress
            const pct = Math.round(((i + 1) / lines.length) * 100);
            progress.style.width = pct + '%';

            // Wait Random Time
            await new Promise(r => setTimeout(r, Math.random() * 400 + 100));
        }
        
        // Final complete
        progress.style.width = '100%';
    }
});
</script>

<?php get_footer(); ?>
