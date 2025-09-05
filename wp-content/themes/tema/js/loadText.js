document.addEventListener('DOMContentLoaded', function() {
    const allBlogContents = document.querySelectorAll('.blogContent');
    const blogTexts = document.querySelectorAll('.blogText');
    let activePost = null;

    const hideAllText = () => {
        blogTexts.forEach(text => {
            text.classList.remove('show-text');
            text.classList.add('hide-text');
        });
    };

    const observerOptions = {
        root: null,
        // The root margin is what creates the "sticky" trigger zone
        // It triggers when the element's top is 20px from the top of the viewport
        // The -70% bottom margin ensures it triggers when the element is in the top 30% of the viewport
        rootMargin: '-20px 0px -70% 0px',
        threshold: 0
    };

    const postObserver = new IntersectionObserver((entries) => {
        let newActivePost = null;

        // Check for upward scroll: find the highest post that is not intersecting
        const sortedEntries = entries.sort((a, b) => a.boundingClientRect.top - b.boundingClientRect.top);
        
        let foundNewActivePost = false;
        
        // Loop through entries to find the correct active post for upward scroll
        for (let i = 0; i < sortedEntries.length; i++) {
            const entry = sortedEntries[i];
            const currentPost = entry.target;
            
            if (entry.isIntersecting) {
                // If a post is entering the viewport, check if it's coming from below.
                if (entry.boundingClientRect.top > 0) {
                    newActivePost = currentPost;
                    foundNewActivePost = true;
                    console.log(currentPost)
                }
            } if (entry.boundingClientRect.top < 0) {
                // When a post leaves the viewport from the top, select the one before it.
                const currentPostId = parseInt(currentPost.id.replace('post', ''));
                const previousPostId = currentPostId - 1;
                console.log("prvid" + previousPostId)
                if (previousPostId >= 1) {
                    newActivePost = document.getElementById(`post${previousPostId}`);
                    foundNewActivePost = true;
                }
            }
        }
        
        // If no post was found from the intersection entries (e.g., at the very top of the page),
        // default to the first post.
        if (!newActivePost && allBlogContents.length > 0) {
            newActivePost = allBlogContents[0];
        }

        // Only update if a new post is considered active and it's different from the current one.
        if (newActivePost && newActivePost !== activePost) {
            hideAllText();
            const newActiveText = newActivePost.querySelector('.blogText');
            if (newActiveText) {
                newActiveText.classList.remove('hide-text');
                newActiveText.classList.add('show-text');
            }
            activePost = newActivePost;
        }
    }, observerOptions);

    allBlogContents.forEach(content => {
        postObserver.observe(content);
    });

    // Initial load state
    if (allBlogContents.length > 0) {
        hideAllText();
        const firstPostText = allBlogContents[0].querySelector('.blogText');
        if (firstPostText) {
            firstPostText.classList.remove('hide-text');
            firstPostText.classList.add('show-text');
            activePost = allBlogContents[0];
        }
    }
});