document.addEventListener("DOMContentLoaded", () => {

    // Don't initialize on touch devices
    if (!window.matchMedia("(hover: hover) and (pointer: fine)").matches) {
        return;
    }

    const ring = document.getElementById("cursor-ring");
    const dot = document.getElementById("cursor-dot");

    if (!ring || !dot) return;

    let mouseX = window.innerWidth / 2;
    let mouseY = window.innerHeight / 2;

    let ringX = mouseX;
    let ringY = mouseY;

    let hovering = false;
    let animationFrame;

    function handleMouseMove(e) {

        mouseX = e.clientX;
        mouseY = e.clientY;

        dot.style.transform = `translate3d(${mouseX - 3}px, ${mouseY - 3}px, 0)`;
    }

    function handleMouseOver(e) {

        const target = e.target;

        hovering = !!target.closest(
            "a, button, input, textarea, label, [data-cursor='hover']"
        );
    }

    function animate() {

        ringX += (mouseX - ringX) * 0.18;
        ringY += (mouseY - ringY) * 0.18;

        const scale = hovering ? 1.7 : 1;

        ring.style.transform =
            `translate3d(${ringX - 16}px, ${ringY - 16}px,0) scale(${scale})`;

        animationFrame = requestAnimationFrame(animate);
    }

    window.addEventListener("mousemove", handleMouseMove);
    window.addEventListener("mouseover", handleMouseOver);

    animate();

    document.addEventListener("visibilitychange", () => {
        if (document.hidden) {
            cancelAnimationFrame(animationFrame);
        } else {
            animate();
        }
    });
});