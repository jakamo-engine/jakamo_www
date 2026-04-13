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

// Smooth scroll for nav links
document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
        e.preventDefault();
        const target = document.querySelector(a.getAttribute('href'));
        if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
});
