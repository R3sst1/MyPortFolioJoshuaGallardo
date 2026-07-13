import gsap from "gsap";

const buttons = document.querySelectorAll("[data-magnetic]");

buttons.forEach((button) => {
    const strength = parseFloat(button.dataset.strength || "0.25");

    const xTo = gsap.quickTo(button, "x", { duration: 0.4, ease: "power3" });
    const yTo = gsap.quickTo(button, "y", { duration: 0.4, ease: "power3" });

    button.addEventListener("mousemove", (e) => {
        const rect = button.getBoundingClientRect();
        const x = (e.clientX - (rect.left + rect.width / 2)) * strength;
        const y = (e.clientY - (rect.top + rect.height / 2)) * strength;
        
        xTo(x);
        yTo(y);
    });

    button.addEventListener("mouseleave", () => {
        xTo(0);
        yTo(0);
    });
});