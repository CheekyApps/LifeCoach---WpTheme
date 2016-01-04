<?php  define( 'WP_USE_THEMES', false ); get_header(); ?>
<main>
    <div class="container">
        <div class="row mt30">
            <div id="blog_content" class="col-md-8">
            <!-- start the loop -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h1>
                   <?php the_title(); ?>
                </h1>

                <div class="post_info">
                    <span class="post_date">
                        <i class="fa fa-clock-o"></i>
                       <?php the_time('F jS, Y'); ?> 
                        
                      <?php _e('by') ?> <?php echo get_the_author();?>
                    </span>
                    <a class="post_comments" href="#">
                        <i class="fa fa-comment"></i>
                        <?php comments_number( '0 comments', '1 comment', '% comments' ); ?>
                    </a>
                </div>
                
                
                     <?php  if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
					 <div class="post_image">
	<?php the_post_thumbnail(); ?>
    </div>
<?php }?>
                
                <div class="post_text">
                    <?php the_content(); ?>
              <?php endwhile; else : ?>
				     <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
               <?php endif; ?>
               <!-- end the loop -->
                </div>
                <div class="social_links_and_share">
                    <ul>
                        <li class="btn_share">
                            <a href="#">
                                <i class="fa fa-share-square-o"></i>
                                Share
                            </a>
                        </li>
                        <li class="facebook">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                                Facebook
                                <span class="likes">
                                    23
                                </span>
                            </a>
                        </li>
                        <li class="twitter">
                            <a class="active" href="#">
                                <i class="fa fa-twitter"></i>
                                Twitter
                                <span class="likes">
                                    7
                                </span>
                            </a>
                        </li>
                        <li class="google_plus">
                            <a href="#">
                                <i class="fa fa-google-plus"></i>
                                Google+
                                <span class="likes">
                                    11
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <?php
               if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
					?>
            </div>
            <?php get_sidebar();?>
        </div>
    </div>
</main>

<?php get_footer(); ?>