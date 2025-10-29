const btns = document.querySelectorAll('.blogBtn, .CTABtn1'); // or '.btn' if you add that class

btns.forEach(btn => {
    btn.addEventListener('mousemove', (e) => {
        const { left, top, width, height } = btn.getBoundingClientRect();
        const x = e.clientX - (left + width / 2);
        const y = e.clientY - (top + height / 1);

        let tiltVal = 20;
        const rotateX = (y / height) * tiltVal;
        const rotateY = (x / width) * -tiltVal;

        let strength = 0.2;
        gsap.to(btn, {
            x: x * strength,
            y: y * strength,
            rotationX: rotateX,
            rotationY: rotateY,
            transformPerspective: 500,
            transformOrigin: "center center",
            duration: 0.3,
            ease: "power2.out"
        });
    });

    btn.addEventListener('mouseleave', () => {
        gsap.to(btn, {
            x: 0,
            y: 0,
            rotationX: 0,
            rotationY: 0,
            duration: 0.3,
            ease: "power2.out"
        });
    });
});

const upbtn = document.querySelectorAll('.upBtn'); // or '.btn' if you add that class
window.smoothScroll = function(target) {
    var scrollContainer = target;
    do { //find scroll container
        scrollContainer = scrollContainer.parentNode;
        if (!scrollContainer) return;
        scrollContainer.scrollTop += 1;
    } while (scrollContainer.scrollTop == 0);

    var targetY = 0;
    do { //find the top of target relatively to the container
        if (target == scrollContainer) break;
        targetY += target.offsetTop;
    } while (target = target.offsetParent);

    scroll = function(c, a, b, i) {
        i++; if (i > 30) return;
        c.scrollTop = a + (b - a) / 30 * i;
        setTimeout(function(){ scroll(c, a, b, i); }, 20);
    }
    // start scrolling
    scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}