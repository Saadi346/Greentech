<?php
/**
 * Template Name: Payment
 * Template Post Type: page
 *
 * @package GreenTech Ads
 */

get_header();

// Get plan from URL
$plan = isset($_GET['plan']) ? $_GET['plan'] : 'starter';
$price = '199';
$plan_name = 'Starter Plan';

if ($plan === 'professional') {
    $price = '499';
    $plan_name = 'Professional Plan';
} elseif ($plan === 'enterprise') {
    $price = '999';
    $plan_name = 'Enterprise Plan';
}
?>

<div class="payment-page-container">
    <div class="payment-split-layout">
        
        <!-- Order Summary (Left Side) -->
        <div class="order-summary-panel">
            <div class="summary-content animate-fade-up">
                <a href="<?php echo home_url('/'); ?>" class="back-link"><i class="fas fa-arrow-left"></i> Back to Home</a>
                
                <div class="plan-preview">
                    <div class="plan-icon">
                        <?php if($plan === 'starter'): ?>
                            <i class="fas fa-paper-plane"></i>
                        <?php elseif($plan === 'professional'): ?>
                            <i class="fas fa-rocket"></i>
                        <?php else: ?>
                            <i class="fas fa-building"></i>
                        <?php endif; ?>
                    </div>
                    <h2><?php echo $plan_name; ?></h2>
                    <div class="plan-price">$<?php echo $price; ?><span>/month</span></div>
                </div>

                <ul class="summary-features">
                    <li><i class="fas fa-check-circle"></i> Instant Activation</li>
                    <li><i class="fas fa-check-circle"></i> Secure SSL Encryption</li>
                    <li><i class="fas fa-check-circle"></i> 30-Day Money Back Guarantee</li>
                    <?php if($plan !== 'starter'): ?>
                    <li><i class="fas fa-check-circle"></i> Priority Support Included</li>
                    <?php endif; ?>
                </ul>

                <div class="secure-badges">
                    <div class="badge"><i class="fas fa-shield-alt"></i> SSL Secure</div>
                    <div class="badge"><i class="fas fa-lock"></i> AES-256</div>
                </div>
            </div>
        </div>

        <!-- Payment Form (Right Side) -->
        <div class="payment-form-panel">
            <div class="form-container animate-fade-up delay-100" id="payment-form-container">
                <h3>Secure Checkout</h3>
                
                <!-- Simulated Credit Card Visual -->
                <div class="card-visual-wrapper">
                    <div class="credit-card-visual" id="card-visual">
                        <div class="card-chip"></div>
                        <div class="card-number" id="visual-number">#### #### #### ####</div>
                        <div class="card-meta">
                            <div class="card-holder">
                                <span>Card Holder</span>
                                <div id="visual-name">e.g. John Doe</div>
                            </div>
                            <div class="card-expiry">
                                <span>Expires</span>
                                <div id="visual-expiry">MM/YY</div>
                            </div>
                        </div>
                    </div>
                </div>

                <form id="payment-form" class="payment-form">
                    <div class="form-group full">
                        <label>Email Address</label>
                        <input type="email" placeholder="you@example.com" required>
                    </div>

                    <div class="form-group full">
                        <label>Cardholder Name</label>
                        <input type="text" id="input-name" placeholder="John Doe" required autocomplete="off">
                    </div>

                    <div class="form-group full">
                        <label>Card Number</label>
                        <div class="input-with-icon">
                            <i class="fas fa-credit-card"></i>
                            <input type="text" id="input-number" placeholder="0000 0000 0000 0000" maxlength="19" required autocomplete="off">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group half">
                            <label>Expiry Date</label>
                            <input type="text" id="input-expiry" placeholder="MM/YY" maxlength="5" required autocomplete="off">
                        </div>
                        <div class="form-group half">
                            <label>CVC</label>
                            <div class="input-with-icon">
                                <i class="fas fa-lock"></i>
                                <input type="text" id="input-cvc" placeholder="123" maxlength="3" required autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block pay-btn">
                        <span class="btn-text">Pay $<?php echo $price; ?> Securely</span>
                        <div class="spinner"></div>
                    </button>
                    
                    <p class="terms-text"><i class="fas fa-lock"></i> Your payment information is encrypted.</p>
                </form>
            </div>

            <!-- Success State (Hidden by default) -->
            <div class="success-state hidden" id="success-state">
                <div class="success-icon-container">
                    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                        <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                        <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                    </svg>
                </div>
                <h2>Payment Successful!</h2>
                <p>Thank you for subscribing to the <strong><?php echo $plan_name; ?></strong>.</p>
                <p class="success-sub">A confirmation email has been sent to your inbox. Our team will contact you shortly to activate your account.</p>
                <div class="confetti-container" id="confetti-container"></div>
                <a href="<?php echo home_url('/'); ?>" class="btn btn-outline home-btn">Return Home</a>
            </div>

        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    
    // 1. Interactive Card Visuals
    const inputNumber = document.getElementById('input-number');
    const inputName = document.getElementById('input-name');
    const inputExpiry = document.getElementById('input-expiry');
    
    const visualNumber = document.getElementById('visual-number');
    const visualName = document.getElementById('visual-name');
    const visualExpiry = document.getElementById('visual-expiry');
    
    // Format Card Number
    inputNumber.addEventListener('input', (e) => {
        let val = e.target.value.replace(/\D/g, '').substring(0, 16);
        val = val != '' ? val.match(/.{1,4}/g).join(' ') : '';
        e.target.value = val;
        visualNumber.textContent = val || '#### #### #### ####';
    });
    
    // Update Name
    inputName.addEventListener('input', (e) => {
        visualName.textContent = e.target.value || 'e.g. John Doe';
    });
    
    // Format Expiry
    inputExpiry.addEventListener('input', (e) => {
        let val = e.target.value.replace(/\D/g, '').substring(0, 4);
        if (val.length >= 3) val = val.substring(0, 2) + '/' + val.substring(2, 4);
        e.target.value = val;
        visualExpiry.textContent = val || 'MM/YY';
    });

    // 2. Form Submission Simulation
    const form = document.getElementById('payment-form');
    const btn = form.querySelector('.pay-btn');
    const formContainer = document.getElementById('payment-form-container');
    const successState = document.getElementById('success-state');
    
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        
        // Simulate Processing
        btn.classList.add('loading');
        btn.disabled = true;
        
        setTimeout(() => {
            // Success!
            formContainer.style.display = 'none';
            successState.classList.remove('hidden');
            successState.classList.add('animate');
            createConfetti();
        }, 2000); // 2 second delay
    });
    
    // 3. Simple Confetti Effect
    function createConfetti() {
        const colors = ['#00ff88', '#ffffff', '#00cc66'];
        const container = document.getElementById('confetti-container');
        
        for (let i = 0; i < 50; i++) {
            const conf = document.createElement('div');
            conf.className = 'confetti';
            conf.style.left = Math.random() * 100 + '%';
            conf.style.animationDelay = Math.random() * 2 + 's';
            conf.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
            container.appendChild(conf);
        }
    }
});
</script>

<style>
/* Page Specific Styles - Moving to main.css in next step */
</style>

<?php get_footer(); ?>
