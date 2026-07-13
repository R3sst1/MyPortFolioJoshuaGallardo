const html = document.documentElement;
const button = document.querySelector('[data-theme-toggle]');

if (button) {
    // Default to dark if not set
    const saved = localStorage.getItem('theme') || 'dark';

    if (saved === 'light') {
        html.classList.remove('dark');
    } else {
        html.classList.add('dark');
    }

    updateIcon();

    button.addEventListener('click', () => {
        html.classList.toggle('dark');
        localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
        updateIcon();
    });

    function updateIcon() {
        if (html.classList.contains('dark')) {
            button.innerHTML = '<i class="ph ph-sun text-base"></i>';
            button.setAttribute('aria-label', 'Switch to light mode');
        } else {
            button.innerHTML = '<i class="ph ph-moon text-base"></i>';
            button.setAttribute('aria-label', 'Switch to dark mode');
        }
    }
}