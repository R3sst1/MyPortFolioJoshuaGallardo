import gsap from "gsap";

const menu = document.getElementById("mobile-menu");
const open = document.getElementById("menu-button");
const close = document.getElementById("close-menu");
const mobileLinks = document.querySelectorAll(".mobile-link");

if (menu && open && close) {
    // Initial states for smooth animation
    gsap.set(menu, { display: "none", opacity: 0, y: "-10%" });
    gsap.set(mobileLinks, { y: 20, opacity: 0 });

    const menuTl = gsap.timeline({ paused: true, reversed: true })
        // Slide menu down and fade in
        .to(menu, { display: "block", opacity: 1, y: "0%", duration: 0.4, ease: "power3.inOut" })
        // Stagger links
        .to(mobileLinks, { y: 0, opacity: 1, duration: 0.4, stagger: 0.1, ease: "power3.out" }, "-=0.2");

    const toggleMenu = () => {
        menuTl.reversed() ? menuTl.play() : menuTl.reverse();
    };

    open.addEventListener("click", toggleMenu);
    close.addEventListener("click", toggleMenu);

    mobileLinks.forEach(link => {
        link.addEventListener("click", () => {
            menuTl.reverse();
        });
    });
}
