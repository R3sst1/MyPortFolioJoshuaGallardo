import gsap from "gsap";

const initHeroAnimation = () => {
    const tl = gsap.timeline();

    // 1. Entrance Sequence
    const elements = [
        { sel: ".hero-available", ease: "power2.out", y: 20 },
        { sel: ".hero-title", ease: "power3.out", y: 40 },
        { sel: ".hero-description", ease: "power2.out", y: 20 },
        { sel: ".hero-buttons", ease: "power2.out", y: 20 },
        { sel: ".hero-stats", ease: "power2.out", y: 20 }
    ];

    elements.forEach((item, i) => {
        const el = document.querySelector(item.sel);
        if (el) {
            gsap.set(el, { y: item.y, opacity: 0 });
            tl.to(el, { y: 0, opacity: 1, duration: 0.8, ease: item.ease }, i === 0 ? undefined : "-=0.6");
        }
    });

    const orbit = document.querySelector(".hero-orbit");
    if (orbit) {
        gsap.set(orbit, { scale: 0.8, opacity: 0 });
        tl.to(orbit, { scale: 1, opacity: 1, duration: 1.2, ease: "back.out(1.2)" }, "-=0.8");
    }

    // 2. Orbital Continuous Animations
    
    // Animate rings and glowing dots
    const rings = document.querySelectorAll(".gsap-ring");
    rings.forEach((ring, i) => {
        const wrapper = ring.querySelector(".gsap-dot-wrapper");
        const dot = ring.querySelector(".gsap-dot");
        const duration = 40 + (i * 12);
        const reverse = i % 2 !== 0;
        
        // Rotate the dot wrapper
        gsap.to(wrapper, {
            rotation: reverse ? -360 : 360,
            duration: duration,
            repeat: -1,
            ease: "none"
        });

        // Pulse the dot
        gsap.to(dot, {
            scale: 1.5,
            opacity: 0.6,
            duration: 2,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });
    });

    // Animate tech stack labels
    const techWrappers = document.querySelectorAll(".gsap-tech-wrapper");
    techWrappers.forEach((wrapper) => {
        const item = wrapper.querySelector(".gsap-tech-item");
        const radius = parseFloat(wrapper.dataset.radius);
        const startAngle = parseFloat(wrapper.dataset.angle);
        const isReverse = wrapper.dataset.reverse === 'true';
        
        // Position on the ring
        const radiusPx = (orbit.offsetWidth * (radius / 100));
        gsap.set(wrapper, { rotation: startAngle });
        gsap.set(item, { x: radiusPx, rotation: -startAngle }); // Counter initial rotation

        // On window resize, update radius
        window.addEventListener('resize', () => {
            gsap.set(item, { x: orbit.offsetWidth * (radius / 100) });
        });

        const duration = 60 + (Math.random() * 20); // random slow speed

        // Orbit rotation
        gsap.to(wrapper, {
            rotation: startAngle + (isReverse ? -360 : 360),
            duration: duration,
            repeat: -1,
            ease: "none"
        });

        // Counter-rotation so text stays upright
        gsap.to(item, {
            rotation: -startAngle + (isReverse ? 360 : -360),
            duration: duration,
            repeat: -1,
            ease: "none"
        });
    });
};

window.addEventListener("preloaderComplete", initHeroAnimation);
