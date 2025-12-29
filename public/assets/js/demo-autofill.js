/**
 * Demo Auto-fill Script for Codesign Projects
 * Automatically fills login forms with demo credentials
 */

document.addEventListener('DOMContentLoaded', function() {
    // Check for demo parameters in URL
    const urlParams = new URLSearchParams(window.location.search);
    const email = urlParams.get('email');
    const password = urlParams.get('password');
    const isDemoMode = urlParams.get('demo') === 'true';
    
    // Also check localStorage for stored demo credentials
    const storedEmail = localStorage.getItem('demo_email');
    const storedPassword = localStorage.getItem('demo_password');
    const storedDemoMode = localStorage.getItem('demo_mode') === 'true';
    
    // Use URL params first, then localStorage as fallback
    const finalEmail = email || storedEmail;
    const finalPassword = password || storedPassword;
    const finalDemoMode = isDemoMode || storedDemoMode;
    
    if (finalDemoMode && finalEmail && finalPassword) {
        // Try to fill common email/password field selectors
        const emailSelectors = [
            'input[type="email"]',
            'input[name="email"]',
            'input[id="email"]',
            'input[name="username"]',
            'input[id="username"]',
            '#email',
            '#username',
            '.email-input',
            '.username-input'
        ];
        
        const passwordSelectors = [
            'input[type="password"]',
            'input[name="password"]',
            'input[id="password"]',
            '#password',
            '.password-input'
        ];
        
        // Fill email field
        for (let selector of emailSelectors) {
            const emailField = document.querySelector(selector);
            if (emailField) {
                emailField.value = finalEmail;
                emailField.dispatchEvent(new Event('input', { bubbles: true }));
                emailField.dispatchEvent(new Event('change', { bubbles: true }));
                break;
            }
        }
        
        // Fill password field
        for (let selector of passwordSelectors) {
            const passwordField = document.querySelector(selector);
            if (passwordField) {
                passwordField.value = finalPassword;
                passwordField.dispatchEvent(new Event('input', { bubbles: true }));
                passwordField.dispatchEvent(new Event('change', { bubbles: true }));
                break;
            }
        }
        
        // Add visual indicator that demo credentials are loaded
        addDemoIndicator();
        
        // Clear localStorage after use
        localStorage.removeItem('demo_email');
        localStorage.removeItem('demo_password');
        localStorage.removeItem('demo_mode');
    }
});

function addDemoIndicator() {
    // Create demo indicator banner
    const indicator = document.createElement('div');
    indicator.innerHTML = `
        <div style="
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: linear-gradient(45deg, #ff3333, #ff6666);
            color: white;
            text-align: center;
            padding: 10px;
            font-weight: bold;
            z-index: 9999;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
        ">
            🚀 MODO DEMO ACTIVADO - Credenciales cargadas automáticamente
            <button onclick="this.parentElement.parentElement.remove()" style="
                background: none;
                border: none;
                color: white;
                font-size: 18px;
                margin-left: 15px;
                cursor: pointer;
            ">×</button>
        </div>
    `;
    
    document.body.appendChild(indicator);
    
    // Auto-remove after 5 seconds
    setTimeout(() => {
        if (indicator.parentElement) {
            indicator.remove();
        }
    }, 5000);
}
