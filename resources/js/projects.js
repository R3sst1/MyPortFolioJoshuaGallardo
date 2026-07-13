const projectCards = document.querySelectorAll('.project-card');

projectCards.forEach(card => {
    const glow = card.querySelector('.project-glow');
    if (!glow) return;

    card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        glow.style.setProperty('--mx', `${x}px`);
        glow.style.setProperty('--my', `${y}px`);
        glow.style.opacity = '1';
    });

    card.addEventListener('mouseleave', () => {
        glow.style.opacity = '0';
    });
});
