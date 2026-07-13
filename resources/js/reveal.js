import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

const reveals = gsap.utils.toArray(".reveal");

reveals.forEach((element) => {
    const delay = parseFloat(element.dataset.delay || "0");

    ScrollTrigger.create({
        trigger: element,
        start: "top 85%", // Trigger when element is 85% down the viewport
        once: true,
        onEnter: () => {
            gsap.to(element, {
                y: 0,
                opacity: 1,
                filter: "blur(0px)",
                autoAlpha: 1,
                duration: 0.9,
                delay: delay,
                ease: "power3.out",
                onComplete: () => {
                    // Remove the reveal class so it doesn't fallback to the CSS initial state
                    element.classList.remove("reveal");
                    // Now safe to clear inline props
                    gsap.set(element, { clearProps: "all" });
                }
            });
        }
    });
});