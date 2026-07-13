import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

const navbar = document.getElementById("navbar");

if (navbar) {
    ScrollTrigger.create({
        start: "top -20",
        onEnter: () => {
            navbar.classList.add("bg-background/60", "backdrop-blur-xl", "border-border");
            navbar.classList.remove("border-transparent");
        },
        onLeaveBack: () => {
            navbar.classList.remove("bg-background/60", "backdrop-blur-xl", "border-border");
            navbar.classList.add("border-transparent");
        }
    });
}
