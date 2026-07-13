import gsap from "gsap";

const preloader = document.getElementById("preloader");
const bar = document.getElementById("preloader-bar");
const counter = document.getElementById("preloader-count");

if (preloader && bar && counter) {
    const tl = gsap.timeline();

    tl.to(bar, {
        width: "100%",
        duration: 2.2,
        ease: "power3.inOut",
        onUpdate: function () {
            const progress = Math.round(this.progress() * 100);
            counter.textContent = String(progress).padStart(3, "0") + "%";
        }
    })
    .to(preloader, {
        opacity: 0,
        scale: 0.95,
        filter: "blur(12px)",
        duration: 0.7,
        ease: "power2.inOut",
        onComplete: () => {
            preloader.remove();
            window.dispatchEvent(new Event("preloaderComplete"));
        }
    });
} else {
    // If no preloader, dispatch immediately so hero animations can still run
    window.dispatchEvent(new Event("preloaderComplete"));
}