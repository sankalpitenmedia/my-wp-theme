<?php get_header(); ?>

<main>
    <div class="main-content bg-video-center" style="margin-bottom: 20px;">
        <video class="bg-video" autoplay loop muted playsinline>
            <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/file.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h1>Welcome to ITEN MEDIA</h1>
        <p>Your one-stop solution for all needs.</p>
    </div>

    <section class="latest-articles">
        <!-- Latest Articles Section Start -->
        <section class="latest-articles">
            <div class="articles-header">
                <h2>Latest News</h2>
            </div>
            <div class="articles-grid">
                <div class="articles-left">
                    <div class="article-card large-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/co2.jpg" alt="CO2 Power Plant">
                        <h3>Capturing CO2 from combined cycle power plants</h3>
                        <p>Widespread deployment of gas-fired combined cycle plants underscores the growing importance
                            of accurate carbon capture modeling.</p>
                        <div class="article-meta">
                            <span>4 MIN READ</span>
                            <div class="tags">
                                <span>CCS</span>
                                <span>Combined Cycle</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="articles-right">
                    <div class="article-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/catepillar.jpg" alt="Utah Data Center">
                        <div class="article-card-content">
                            <div class="article-card-headline">
                                <h3>Caterpillar to support multi-gigawatt data center project in Utah</h3>
                            </div>
                            <div class="article-meta">
                                <span>1 MIN READ</span>
                                <div class="tags">
                                    <span>Cogeneration</span>
                                    <span>News</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="article-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/raising.jpg" alt="Cooling Pond">
                        <div class="article-card-content">
                            <div class="article-card-headline">
                                <h3>Raising power plant efficiency by improving cooling ponds</h3>
                            </div>
                            <div class="article-meta">
                                <span>6 MIN READ</span>
                                <div class="tags">
                                    <span>O&amp;M</span>
                                    <span>News</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="article-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/raising.jpg" alt="Cooling Pond">
                        <div class="article-card-content">
                            <div class="article-card-headline">
                                <h3>Raising power plant efficiency by improving cooling ponds</h3>
                            </div>
                            <div class="article-meta">
                                <span>6 MIN READ</span>
                                <div class="tags">
                                    <span>O&amp;M</span>
                                    <span>News</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Latest Articles Section End -->
    </section>

    <section class="featured-spotlight">
       <!-- Featured Research and Spotlight Section Start -->
        <section class="featured-spotlight">
            <div class="featured-spotlight-grid">
                <div class="featured-research">
                    <h2>Featured Research</h2>
                    <div class="research-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/catepillar.jpg" alt="Women Mean Business" class="research-img">
                        <div class="research-content">
                            <div class="research-title">Women Mean Business: A Playbook for Driving Women’s Participation in India’s Green Economy
                            </div>
                            <div class="research-authors"><strong>Mousumi Kabiraj, Divya Gaur</strong></div>
                            <div class="research-desc">
                                This gender playbook serves as a practical, step-by-step guide to help startups and enterprises, accelerators, development practitioners, financiers, and investors integrate women meaningfully into green and sustainable businesses.
                            </div>
                            <div class="research-date">June 2025</div>
                        </div>
                    </div>
                </div>
                <div class="spotlight">
                    <h2>Spotlight</h2>
                    <div class="spotlight-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nasa.jpg" alt="Shalu Agrawal" class="spotlight-img">
                        <div class="spotlight-content">
                            <div class="spotlight-name">Shalu Agrawal</div>
                            <div class="spotlight-role">Director — Programmes</div>
                            <div class="spotlight-desc">
                                As Director – Programmes at CEEW.
                            </div>
                            <a href="#" class="spotlight-link">Read latest </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured Research and Spotlight Section End -->
    </section>
</main>

<?php get_footer(); ?>
