const gsap = window.gsap;
const paragraph = document.getElementById("animated-paragraph");
const lines = paragraph.textContent.split("\n"); // Split text into lines
// Timeline for animation
const timeline = gsap.timeline();

// lines.forEach((line, index) => {
//   timeline.fromTo(paragraph.children[index], // Target each line span
//                   { opacity: 0 }, // Initially invisible
//                   { opacity: 1, duration: 0.5, ease: "power2.inOut" }, // Fade-in with easing
//                   `+=0.2`); // Delay between lines (adjust for desired speed)
// });

// Show the entire paragraph after animation
timeline.to(paragraph, { opacity: 1, duration: 0.5 , ease: "power.inOut" , delay: 0.5});
gsap.from('.Nobel', {
  scrollTrigger: {
        trigger: '.Nobel',
        start: 'top bottom'
    },
    y: 50,
    opacity: 0,
    duration: 1.2,
    stagger: 0.3,
    delay:0.5,
})