console.clear;

gsap.registerPlugin(ScrollTrigger);

let t1 = gsap.timeline({
  scrollTrigger:{
    trigger:".section-2",
    start:"top 10%",
    end:"bottom 85%",
    markers:true,
    scrub:0.3
  }
});

t1.from('.section-2 > .section2 > .name', {
  y: -100,
  opacity:0,
  duration: 0.5
});

let t2 = gsap.timeline({
  scrollTrigger:{
    trigger:".section-3",
    start:"-=30 center",
    end:"bottom 85%",
    markers:true,
    scrub:0.3
  }
});

t2.from('.section-3 > .section3 > .name', {
  y: -100,
  opacity:0,
  duration: 0.5
});

let t3 = gsap.timeline({
  scrollTrigger:{
    trigger:".section-5",
    start:"-=30 center",
    end:"bottom 85%",
    markers:true,
    scrub:0.3
  }
});

t3.from('.section-5 > .box1', {
  x: 300,
  opacity:0,
  duration: 0.5
});

t3.from('.section-5 > .box2', {
  x: 300,
  opacity:0,
  duration: 0.5
});

let t4 = gsap.timeline({
  scrollTrigger:{
    trigger:".section-6",
    start:"-=30 center",
    end:"bottom 85%",
    markers:true,
    scrub:0.3
  }
});

t4.from('.section-6 > img:last-child', {
  x: 300,
  opacity:0,
  duration: 0.5
});

let t5 = gsap.timeline({
  scrollTrigger:{
    trigger:".section-8",
    start:"-=50 center",
    end:"bottom 85%",
    markers:true,
    scrub:0.3
  }
});


t5.from('.section-8 > span:nth-of-type(2)', {
  y: -100,
  opacity:0,
  duration: 0.2
});

t5.from('.section-8 > span:nth-of-type(3)', {
  y: -100,
  opacity:0
});


let t6 = gsap.timeline({
  scrollTrigger:{
    trigger:".section-9",
    start:"-=50 center",
    end:"bottom 85%",
    markers:true,
    scrub:0.3
  }
});


t6.from('.section-9 > .circle', {
  y: -10,
  opacity:0,
  duration: 0.2
});

let t7 = gsap.timeline({
  scrollTrigger:{
    trigger:".section-10",
    start:"-=50 center",
    end:"bottom 85%",
    markers:true,
    scrub:0.3
  }
});


t7.from('.section-10 > .circle', {
  y: -10,
  opacity:0,
  duration: 0.2
});

let t8 = gsap.timeline({
  scrollTrigger:{
    trigger:".section-11",
    start:"-=50 center",
    end:"bottom 85%",
    markers:true,
    scrub:0.3
  }
});


t8.from('.section-11 > .circle', {
  y: -10,
  opacity:0,
  duration: 0.2
});

let t9 = gsap.timeline({
  scrollTrigger:{
    trigger:".section-12",
    start:"-=50 center",
    end:"bottom 85%",
    markers:true,
    scrub:0.3
  }
});


t9.from('.section-12 > .circle', {
  y: -10,
  opacity:0,
  duration: 0.2
});