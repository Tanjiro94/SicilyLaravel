const lenis = new Lenis()

lenis.on('scroll', (e) => {
    console.log(e)
})

function raf(time) {
    lenis.raf(time)
    requestAnimationFrame(raf)
}

requestAnimationFrame(raf)


document.addEventListener("DOMContentLoaded", function () {
    const tl = gsap.timeline();

    tl.from(".loader img", {
        display: "none",
        duration: 2,
        stagger: 0.2,
        ease: "none",
    });
    tl.to('.loader', {
        yPercent: -250,
        duration: 2,
        ease: Quart.easeInOut,
    }, "-=1.5")
});


const sliderContainer = document.querySelector('.hero .container .slider-container .slides');
const slides = Array.from(sliderContainer.children);
const controls = document.querySelectorAll('.hero .container .slider-container .controls .control');
const controlsSlider = Array.from(controls);


let currentSlide = 0;

function changeSlide(index) {
    const translateValue = -index * (100 / 4);

    gsap.to(sliderContainer, {
        x: `${translateValue}%`,
        duration: 1,
        ease: Power2.easeInOut
    });

    currentSlide = index;

    controlsSlider.forEach((button, buttonIndex) => {
        button.style.opacity = buttonIndex === index ? '1' : '0.5';
    });
}

function autoChangeSlide() {
    setInterval(() => {
        const nextSlideIndex = (currentSlide + 1) % slides.length;
        changeSlide(nextSlideIndex);
    }, 5000);
}

controlsSlider.forEach((button, index) => {
    button.addEventListener('click', function () {
        changeSlide(index);
    });
});

changeSlide(0);
autoChangeSlide();