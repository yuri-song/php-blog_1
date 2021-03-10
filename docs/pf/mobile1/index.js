console.clear;

gsap.registerPlugin(ScrollTrigger);

let t1 = gsap.timeline({
    scrollTrigger: {
        trigger: ".main_seaction3",
        start: "-=50 30%",
        end: "bottom 85%",
        markers: true,
        scrub: 0.3
    }
});

t1.from('.main_seaction3 > img:nth-of-type(2)', {
    y: -100,
    opacity: 0,
    duration: 0.5
});

t1.from('.main_seaction3 > img:nth-of-type(3)', {
    y: -100,
    opacity: 0,
    duration: 0.5
});

t1.from('.main_seaction3 > img:nth-of-type(4)', {
    y: -100,
    opacity: 0,
    duration: 0.5
});


let t2 = gsap.timeline({
    scrollTrigger: {
        trigger: ".main_seaction4",
        start: "-=50 30%",
        end: "bottom 85%",
        markers: true,
        scrub: 0.3
    }
});

t2.from('.main_seaction4 > img:nth-of-type(2)', {
    y: -100,
    opacity: 0,
    duration: 0.5
});

let t3 = gsap.timeline({
    scrollTrigger: {
        trigger: ".main_seaction7",
        start: "-=50 30%",
        end: "bottom 85%",
        markers: true,
        scrub: 0.3
    }
});

t3.from('.main_seaction7 > img:nth-of-type(2)', {
    y: -100,
    opacity: 0,
    duration: 0.5
});