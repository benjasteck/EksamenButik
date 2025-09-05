const blogContainer = document.querySelector('.blogContainer');
const progressBars = document.querySelectorAll('.progressbarInner');

window.addEventListener('scroll', () => {
    const containerTop = blogContainer.offsetTop;
    const containerHeight = blogContainer.offsetHeight;
    const scrollY = window.scrollY;

    // scroll progress through the container (0–1)
    let containerScrollPercent = (scrollY - containerTop) / containerHeight;
    containerScrollPercent = Math.min(Math.max(containerScrollPercent, 0), 1);

    // update all progress bars
    progressBars.forEach(bar => {
        bar.style.width = `${containerScrollPercent * 100}%`;
    });
});