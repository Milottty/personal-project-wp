<?php get_header(); ?>



<main>
    <section class="hero">

        <div class="hero-overlay"></div>

        <img class="hero-banner"
             src="<?php echo esc_url( get_theme_file_uri('images/banner.webp') ); ?>"
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
    <?php
$cards = [
    [
        "title" => "BridgeWorx",
        "image" => "img1.jpeg",
        "url"   => "https://bridgeworx.org.au/"
    ],
    [
        "title" => "Prompt Labs",
        "image" => "img2.jpg",
        "url"   => "https://www.prompthealth.com/pps/2025"
    ],
    [
        "title" => "Dual Studio",
        "image" => "img3.png",
        "url"   => "https://www.funparquesaojoao.pt/"
    ],
    [
        "title" => "CHD ART MAKER",
        "image" => "img4.png",
        "url"   => "https://www.chdartmaker.com/"
    ],
    [
        "title" => "Monuma",
        "image" => "img5.jpg",
        "url"   => "https://monuma.ca/"
    ],[
        "title" => "Austo Entertainment",
        "image" => "img6.png",
        "url"   => "https://www.austoentertainment.com/"
    ],[
        "title" => "Harlem Stage",
        "image" => "img7.jpg",
        "url"   => "https://www.harlemstage.org/"
    ],[
        "title" => "Sin Expo 2025",
        "image" => "img8.png",
        "url"   => "https://www.expo.sinstudiogallery.com/"
    ],
];
?>

<div class="grid">

<?php foreach( $cards as $c ): ?>
    
    <a class="card"
       href="<?php echo esc_url( $c['url'] ); ?>"
       target="_blank"
       rel="noopener">

        <img src="<?php echo esc_url( get_theme_file_uri( 'images/' . $c['image'] ) ); ?>"
             alt="<?php echo esc_attr( $c['title'] ); ?>">

        <div class="content">
            <?php echo esc_html( $c['title'] ); ?>
        </div>

    </a>

<?php endforeach; ?>

</div>

</main>


<?php get_footer(); ?>
