import './bootstrap';

// Scroll reveal
const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
        if (e.isIntersecting) {
            e.target.classList.add('visible');
        }
    });
}, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

// Excel file input — show filename
const excelInput = document.getElementById('excel-upload');
const fileLabel  = document.getElementById('file-label');
if (excelInput && fileLabel) {
    excelInput.addEventListener('change', () => {
        const file = excelInput.files[0];
        fileLabel.innerHTML = file
            ? `<span class="text-primary font-medium">${file.name}</span>`
            : 'Przeciągnij plik lub <span class="text-primary">kliknij aby wybrać</span>';
    });
}

// Hero slider
(function() {
    const slider = document.getElementById('hero-slider');
    if (!slider) return;

    const slides = slider.querySelectorAll('.hero-slide');
    const dots = slider.querySelectorAll('.hero-dot');
    const label = slider.querySelector('.hero-slide-label');
    const labels = ['JAKAMO // DASHBOARD_v2', 'JAKAMO // ANALYTICS_v2'];
    let current = 0;
    let autoplayTimer;

    function goTo(index) {
        slides.forEach((slide, i) => {
            if (i === index) {
                slide.classList.remove('opacity-0', 'pointer-events-none');
                slide.classList.add('opacity-100');
            } else {
                slide.classList.add('opacity-0', 'pointer-events-none');
                slide.classList.remove('opacity-100');
            }
        });

        dots.forEach((dot, i) => {
            if (i === index) {
                dot.classList.remove('bg-outline-variant/40');
                dot.classList.add('bg-cyan-400');
            } else {
                dot.classList.remove('bg-cyan-400');
                dot.classList.add('bg-outline-variant/40');
            }
        });

        if (label) label.textContent = labels[index];
        current = index;
    }

    dots.forEach(dot => {
        dot.addEventListener('click', () => {
            goTo(parseInt(dot.dataset.dot));
            resetAutoplay();
        });
    });

    function resetAutoplay() {
        clearInterval(autoplayTimer);
        autoplayTimer = setInterval(() => {
            goTo((current + 1) % slides.length);
        }, 5000);
    }

    resetAutoplay();
})();

// Smooth scroll for nav links
document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
        e.preventDefault();
        const target = document.querySelector(a.getAttribute('href'));
        if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
});
