
document.addEventListener('DOMContentLoaded', function () {
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.querySelector('.nav-menu');

    navToggle.addEventListener('click', () => {
        navMenu.classList.toggle('active');
    });

    document.querySelectorAll('.nav-menu a').forEach(link => {
        link.addEventListener('click', () => {
            navMenu.classList.remove('active');
        });
    });

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const href = this.getAttribute('href');
            const target = document.querySelector(href);
            if (target) {
                const navbar = document.querySelector('.navbar');
                const offset = (navbar && navbar.offsetHeight) ? navbar.offsetHeight : 80;
                const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
                // Update URL hash without jumping
                if (history.pushState) {
                    history.pushState(null, '', href);
                } else {
                    window.location.hash = href;
                }
            }
        });
    });

    // Adjust initial scroll for hash links on page load to account for fixed navbar
    if (window.location.hash) {
        const target = document.querySelector(window.location.hash);
        if (target) {
            // Defer to ensure layout is ready
            setTimeout(() => {
                const navbar = document.querySelector('.navbar');
                const offset = (navbar && navbar.offsetHeight) ? navbar.offsetHeight : 80;
                const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;
                window.scrollTo({top: targetPosition, behavior: 'auto'});
            }, 0);
        }
    }

    const navbar = document.querySelector('.navbar');

    // Expose navbar height to CSS for scroll-margin-top fallback
    if (navbar) {
        const setNavbarHeightVar = () => {
            document.documentElement.style.setProperty('--navbar-height', navbar.offsetHeight + 'px');
        };
        setNavbarHeightVar();
        // Update on resize/orientation changes
        let resizeTimeout;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(setNavbarHeightVar, 100);
        });
    }

    let lastScroll = 0;

    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;

        if (currentScroll > 100) {
            navbar.style.background = 'rgba(255, 255, 255, 0.98)';
            navbar.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.15)';
        } else {
            navbar.style.background = 'rgba(255, 255, 255, 0.95)';
            navbar.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.1)';
        }

        lastScroll = currentScroll;
    });

    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();

            const formData = new FormData(contactForm);
            const name = formData.get('name');
            const email = formData.get('email');
            const message = formData.get('message');

            const mailtoLink = `mailto:Jules.ferlin@gmail.com?subject=Contact depuis le portfolio - ${encodeURIComponent(name)}&body=${encodeURIComponent(`Nom: ${name}\nEmail: ${email}\n\nMessage:\n${message}`)}`;

            window.location.href = mailtoLink;

            contactForm.reset();
        });
    }

    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    document.querySelectorAll('.skill-category, .project-card, .education-card, .timeline-item').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
});
