<?php get_header();?>
<main>
    <div id="home"></div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?php bloginfo('template_url');?>/img/slide_1.png" alt="Chania">

                <div class="carousel-caption">
                    <span class="number_slide">Volume 01:</span>

                    <h2>
                        Lorem ipsum dolor sit amet
                    </h2>
                    <span>Beatiful flowers in Kolymbari, Crete.</span>
                </div>
            </div>

            <div class="item">
                <img src="<?php bloginfo('template_url');?>/img/slide_1.png" alt="Chania">

                <div class="carousel-caption">
                    <span class="number_slide">Volume 01:</span>

                    <h2>
                        Lorem ipsum dolor sit amet
                    </h2>
                    <span>Beatiful flowers in Kolymbari, Crete.</span>
                </div>
            </div>

            <div class="item">
                <img src="<?php bloginfo('template_url');?>/img/slide_1.png" alt="Flower">

                <div class="carousel-caption">
                    <span class="number_slide">Volume 01:</span>

                    <h2>
                        Lorem ipsum dolor sit amet
                    </h2>
                    <span>Beatiful flowers in Kolymbari, Crete.</span>
                </div>
            </div>
        </div>
    </div>
    <section id="about_us">
        <div class="container">
            <div class="row">
                <h2><span>About Us</span></h2>

                <div class="story_title">
                    <h3>Their amazing story</h3>
                    <span>How they to be so famous</span>
                </div>
                <div class="story">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonials">
        <div class="container">
            <div class="row">
                <div class="testimonials_title">
                    <h3>testimonials</h3>
                    <span>testimonials</span>
                </div>
                <div class="testimonial_content">
                    <div id="testimonials_carousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#testimonials_carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#testimonials_carousel" data-slide-to="1"></li>
                            <li data-target="#testimonials_carousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active clearfix">
                                <div class="testimonial_text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure
                                    </p>
                                </div>
                                <figure class="testimonial_author">
                                    <img src="<?php bloginfo('template_url');?>/img/author_1.png" alt="Gregory Henderson">
                                    <figcaption>
                                        <h4>Gregory Henderson</h4>
                                        <span>director / client</span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="item clearfix">
                                <div class="testimonial_text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure
                                    </p>
                                </div>
                                <figure class="testimonial_author">
                                    <img src="<?php bloginfo('template_url');?>/img/author_1.png" alt="Gregory Henderson">
                                    <figcaption>
                                        <h4>Gregory Henderson</h4>
                                        <span>director / client</span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="item clearfix">
                                <div class="testimonial_text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure
                                    </p>
                                </div>
                                <figure class="testimonial_author">
                                    <img src="<?php bloginfo('template_url');?>/img/author_1.png" alt="Gregory Henderson">
                                    <figcaption>
                                        <h4>Gregory Henderson</h4>
                                        <span>director / client</span>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="blog">
        <div class="container">
            <div class="row">
                <h2><span>Blog</span></h2>

                <div class="wrap_view_all_btn">
                    <a class="btn" href="#">View all</a>
                </div>
                <div class="blog_articles">
                    <div class="col-md-4 article">
                        <figure>
                            <img src="<?php bloginfo('template_url');?>/img/blog_img.png" alt="Blog image">
                        </figure>
                        <h4>
                            Concert tickets for sale
                        </h4>
                        <i>
                            October 1, 2015
                        </i>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, enim ad minim veniam quis...
                        </p>
                        <a class="btn" href="#">
                            Read more
                        </a>
                    </div>
                    <div class="col-md-4 article">
                        <figure>
                            <img src="<?php bloginfo('template_url');?>/img/blog_img.png" alt="Blog image">
                        </figure>
                        <h4>
                            Concert tickets for sale
                        </h4>
                        <i>
                            October 1, 2015
                        </i>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, enim ad minim veniam quis...
                        </p>
                        <a class="btn" href="#">
                            Read more
                        </a>
                    </div>
                    <div class="col-md-4 article">
                        <figure>
                            <img src="<?php bloginfo('template_url');?>/img/blog_img.png" alt="Blog image">
                        </figure>
                        <h4>
                            Concert tickets for sale
                        </h4>
                        <i>
                            October 1, 2015
                        </i>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, enim ad minim veniam quis...
                        </p>
                        <a class="btn" href="#">
                            Read more
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact_us">
        <div class="container">
            <div class="row">
                <h2><span>Contact Us</span></h2>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad
                </p>

                <form action="" id="contact_us_form">
                    <?php  echo do_shortcode('[contact-form-7 id="7" title="contact form 2"]');?>
                </form>
            </div>
        </div>
    </section>
</main>
<?php get_footer();?>