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
 <?php
                $args = array(
	'post_type' => 'post',
	'p' => '22'
	
);
$the_query = new WP_Query( $args );
//print_r($the_query);
// The Loop
if ( $the_query->have_posts() ) {
	
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		
		?>
                <div class="story_title">
                    <h3><?php echo the_title(); ?></h3>
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
                <?php
	}}
                wp_reset_postdata();
?>
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
                <?php
                $args = array(
	'post_type' => 'post',
	'posts_per_page' => '3',
	'tax_query' => array(
		
		array(
			'taxonomy' => 'category',
			'field'    => 'slug',
			'terms'    => array( 'blog' ),
		)
	),
);
$the_query = new WP_Query( $args );
//print_r($the_query);
// The Loop
if ( $the_query->have_posts() ) {
	
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		?>
		 <div class="col-md-4 article">
                        <figure>
                            <?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail();
} 
?>
                        </figure>
                        <h4>
                         <?php   echo the_title(); ?>
                        </h4>
                        <i>
                            <?php echo get_the_date(); ?>
                        </i>

                        <p>
                             <?php  echo the_content(); ?>
                        </p>
                        <a class="btn" href="<?php echo the_permalink(); ?>">
                            Read more
                        </a>
                    </div>
					<?php
		
	}
	
} 
/* Restore original Post Data */
wp_reset_postdata();
?>
                   
               
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