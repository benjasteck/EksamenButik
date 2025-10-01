<?php get_header() ?>

<main class="container">
    <h1 class="my-4">Indlæg i kategori: <?php single_term_title(); ?></h1>

    <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post() ?>

    <?php
            $title = get_the_title();
            $date = get_the_date();
            $author = get_the_author();
            $excerpt = get_the_excerpt(); // Use get_the_excerpt() for a list of posts
            $permalink = get_the_permalink();
            ?>

    <article class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">
                <a href="<?php echo esc_url($permalink); ?>"><?php echo esc_html($title); ?></a>
            </h2>
            <p class="card-subtitle text-muted mb-3">
                <?php echo esc_html($date); ?> | <?php echo esc_html($author); ?>
            </p>
            <div class="card-text">
                <?php echo $excerpt; ?>
            </div>
        </div>
    </article>

    <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer() ?>