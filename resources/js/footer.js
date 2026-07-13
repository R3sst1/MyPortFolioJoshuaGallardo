import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

const line = document.querySelector(".reveal-line");

if (line) {
    gsap.set(line, {
        scaleX: 0,
        transformOrigin: "left center",
    });

    gsap.to(line, {
        scaleX: 1,
        duration: 1.2,
        ease: "power3.out",
        scrollTrigger: {
            trigger: line,
            start: "top 95%",
            once: true,
        },
    });
}