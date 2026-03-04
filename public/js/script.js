// ============================================
// PESO JOB PORTAL - INTERACTIVE FEATURES
// ============================================

// 1. SMOOTH SCROLLING FOR NAVIGATION
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// 2. MOBILE MENU TOGGLE
const menuBtn = document.getElementById('menu-btn');
const mobileMenu = document.getElementById('mobile-menu');

if (menuBtn && mobileMenu) {
    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        
        // Change icon when menu is open/closed
        const icon = menuBtn.querySelector('svg');
        if (mobileMenu.classList.contains('hidden')) {
            icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
        } else {
            icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>';
        }
    });
}

// 3. COUNTER ANIMATION FOR STATS
function animateCounter(element, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        element.innerText = Math.floor(progress * (end - start) + start) + '+';
        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
}

// 4. INTERSECTION OBSERVER FOR STATS
const observerOptions = {
    threshold: 0.5,
    rootMargin: '0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const counters = entry.target.querySelectorAll('.stat-number');
            counters.forEach(counter => {
                const targetValue = parseInt(counter.getAttribute('data-target'));
                animateCounter(counter, 0, targetValue, 2000);
            });
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

const statsContainer = document.querySelector('.stats-grid');
if (statsContainer) {
    observer.observe(statsContainer);
}

// 5. ACTIVE NAVIGATION HIGHLIGHT
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.nav-link');

window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (scrollY >= (sectionTop - 200)) {
            current = section.getAttribute('id');
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('text-blue-900', 'font-bold');
        link.classList.add('text-gray-700');
        if (link.getAttribute('href') === `#${current}`) {
            link.classList.add('text-blue-900', 'font-bold');
            link.classList.remove('text-gray-700');
        }
    });
});

// 6. FORM SUBMISSION HANDLING
const contactForm = document.querySelector('form');
if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        // Get form data
        const name = document.querySelector('input[placeholder="Your Name"]')?.value || 'Guest';
        
        // Show success message
        showNotification(`Thank you ${name}! Your message has been sent.`, 'success');
        
        // Reset form
        contactForm.reset();
    });
}

// 7. CUSTOM NOTIFICATION SYSTEM
function showNotification(message, type = 'info') {
    // Remove existing notification
    const existingNotif = document.querySelector('.custom-notification');
    if (existingNotif) existingNotif.remove();
    
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `custom-notification fixed top-20 right-4 z-50 px-6 py-3 rounded-lg shadow-lg transform transition-all duration-500 ${
        type === 'success' ? 'bg-green-500' : 
        type === 'error' ? 'bg-red-500' : 'bg-blue-500'
    } text-white`;
    notification.style.animation = 'slideIn 0.3s ease';
    notification.textContent = message;
    
    // Add to body
    document.body.appendChild(notification);
    
    // Remove after 3 seconds
    setTimeout(() => {
        notification.style.animation = 'slideOut 0.3s ease';
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}

// 8. SCROLL TO TOP BUTTON
// 8. SCROLL TO TOP BUTTON
const scrollBtn = document.createElement('button');
scrollBtn.innerHTML = '<i class="fas fa-arrow-up"></i>';
scrollBtn.className = 'fixed bottom-5 right-5 w-12 h-12 bg-blue-900 text-white rounded-lg shadow-lg opacity-0 transition-all duration-300 hover:bg-blue-700 z-40 flex items-center justify-center text-lg';
scrollBtn.style.display = 'none';
document.body.appendChild(scrollBtn);

scrollBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// 9. DARK MODE TOGGLE
const darkModeBtn = document.createElement('button');
darkModeBtn.innerHTML = '<i class="fas fa-moon"></i>';
darkModeBtn.className = 'fixed bottom-5 left-5 w-12 h-12 bg-gray-700 text-white rounded-lg shadow-lg hover:bg-gray-600 transition z-40 flex items-center justify-center text-lg';
darkModeBtn.title = 'Toggle Dark Mode';
document.body.appendChild(darkModeBtn);

let isDarkMode = false;
darkModeBtn.addEventListener('click', () => {
    isDarkMode = !isDarkMode;
    if (isDarkMode) {
        document.body.classList.add('dark-mode');
        darkModeBtn.innerHTML = '<i class="fas fa-sun"></i>';
        darkModeBtn.classList.remove('bg-gray-700');
        darkModeBtn.classList.add('bg-amber-500');
        
    } else {
        document.body.classList.remove('dark-mode');
        darkModeBtn.innerHTML = '<i class="fas fa-moon"></i>';
        darkModeBtn.classList.add('bg-gray-700');
        darkModeBtn.classList.remove('bg-amber-500');
        
    }
});

// 10. SIMPLE DARK MODE STYLES
const style = document.createElement('style');
style.textContent = `
    .dark-mode {
        background-color: #1a202c !important;
        color: #e2e8f0 !important;
    }
    .dark-mode .bg-white {
        background-color: #2d3748 !important;
    }
    .dark-mode .text-gray-800,
    .dark-mode .text-gray-700,
    .dark-mode .text-gray-600 {
        color: #e2e8f0 !important;
    }
    .dark-mode .bg-gray-50 {
        background-color: #1a202c !important;
    }
    .dark-mode .bg-white\\/90 {
        background-color: #2d3748 !important;
    }
    @keyframes slideIn {
        from { transform: translateX(100%); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }
    @keyframes slideOut {
        from { transform: translateX(0); opacity: 1; }
        to { transform: translateX(100%); opacity: 0; }
    }
`;
document.head.appendChild(style);

// 11. IMAGE GALLERY LIGHTBOX (for your PESO images)
const images = document.querySelectorAll('.gallery-image');
if (images.length > 0) {
    images.forEach(img => {
        img.addEventListener('click', () => {
            const lightbox = document.createElement('div');
            lightbox.className = 'fixed inset-0 bg-black/90 z-50 flex items-center justify-center';
            lightbox.onclick = () => lightbox.remove();
            
            const enlarged = document.createElement('img');
            enlarged.src = img.src;
            enlarged.className = 'max-w-[90%] max-h-[90%] object-contain';
            
            lightbox.appendChild(enlarged);
            document.body.appendChild(lightbox);
        });
    });
}

// 12. TYPING EFFECT FOR HERO TITLE
const heroTitle = document.querySelector('h1');
if (heroTitle) {
    const originalText = heroTitle.textContent;
    heroTitle.textContent = '';
    
    let i = 0;
    const typeWriter = () => {
        if (i < originalText.length) {
            heroTitle.textContent += originalText.charAt(i);
            i++;
            setTimeout(typeWriter, 100);
        }
    };
    
    // Start typing when page loads
    window.addEventListener('load', typeWriter);
}

// 13. LIVE DATE AND TIME
const dateTimeDisplay = document.createElement('div');
dateTimeDisplay.className = 'text-xs text-gray-400 mt-2 text-center';
document.querySelector('footer')?.appendChild(dateTimeDisplay);

function updateDateTime() {
    const now = new Date();
    const options = { 
        weekday: 'long', 
        year: 'numeric', 
        month: 'long', 
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit'
    };
    dateTimeDisplay.textContent = now.toLocaleDateString('en-US', options);
}

updateDateTime();
setInterval(updateDateTime, 60000); // Update every minute

// 14. SERVICE CARD HOVER EFFECT
const serviceCards = document.querySelectorAll('.service-card');
serviceCards.forEach(card => {
    card.addEventListener('mouseenter', () => {
        card.style.transform = 'translateY(-10px) scale(1.02)';
    });
    card.addEventListener('mouseleave', () => {
        card.style.transform = 'translateY(0) scale(1)';
    });
});

// 15. PAGE LOAD ANIMATION
window.addEventListener('load', () => {
    document.body.style.opacity = '0';
    document.body.style.transition = 'opacity 0.5s ease';
    setTimeout(() => {
        document.body.style.opacity = '1';
    }, 100);
    
    
});

// 16. SEARCH BAR FUNCTIONALITY (if you add one)
const searchInput = document.querySelector('.search-input');
if (searchInput) {
    searchInput.addEventListener('input', (e) => {
        const searchTerm = e.target.value.toLowerCase();
        // Add your search logic here
        console.log('Searching for:', searchTerm);
    });
}

// 17. YEAR UPDATE
const yearElement = document.querySelector('.current-year');
if (yearElement) {
    yearElement.textContent = new Date().getFullYear();
}

// 18. BACK TO TOP PROGRESS INDICATOR
const progressBar = document.createElement('div');
progressBar.className = 'fixed top-0 left-0 h-1 bg-red-600 z-50 transition-all duration-300';
progressBar.style.width = '0%';
document.body.appendChild(progressBar);

window.addEventListener('scroll', () => {
    const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const scrolled = (winScroll / height) * 100;
    progressBar.style.width = scrolled + '%';
});

// 19. LAZY LOADING FOR IMAGES
const lazyImages = document.querySelectorAll('img[data-src]');
const imageObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const img = entry.target;
            img.src = img.dataset.src;
            img.classList.add('fade-in');
            imageObserver.unobserve(img);
        }
    });
});

lazyImages.forEach(img => imageObserver.observe(img));

