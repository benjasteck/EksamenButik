document.addEventListener('DOMContentLoaded', function() {
    const openButton = document.getElementById('openTestimonialModal');
    const modal = document.getElementById('testimonialModal');
    
    // The duration of your CSS transition in milliseconds
    const fadeDuration = 300; 

    if (openButton && modal) {
        openButton.addEventListener('click', function(e) {
            e.preventDefault(); // Stop the <a> tag from refreshing the page

            // 1. Set display: block (or flex) immediately
            // This makes the element visible to the browser, allowing the opacity transition to work.
            modal.style.display = 'block'; 
            
            // We use a small delay (0ms) to ensure the browser registers the 
            // display change before applying the opacity class.
            setTimeout(() => {
                // 2. Add the class to trigger the fade-in (opacity 0 -> 1)
                modal.classList.add('fade-in'); 
                
                // 3. OPTIONAL: If the modal had a 'fade-out' class from before, remove it
                modal.classList.remove('fade-out'); 
            }, 0); 
        modal.classList.remove('fade-in');
        });
    }
});