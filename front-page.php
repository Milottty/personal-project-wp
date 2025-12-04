<?php get_header(); ?>

<main>

    <section class="hero">

        <div class="hero-overlay"></div>

        <img class="hero-banner" 
             src="<?php echo esc_url(get_theme_file_uri('images/banner.webp')); ?>" 
             alt="Event Banner">

        <div class="hero-content">
            <h1>Friday Night Summer Party</h1>
            <p>Join us for an unforgettable night! Music, drinks and celebration.</p>

            <div class="hero-links">
                <a href="#">Next Event</a>
                <a href="#">Previous Event</a>
            </div>
        </div>

    </section>

</main>

<?php get_footer(); ?>
