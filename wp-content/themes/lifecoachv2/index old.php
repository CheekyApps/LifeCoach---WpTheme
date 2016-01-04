
<?php /* Template Name: Blog list */ ?>

// <?php 

/* Your homework:  

NOT DONE

Get the blog page working:  

Social sharing (See a plugin)
Comments area (comments.php , get_comments - look up all parameters)


DONE 

You have Content  - DONE
You have Title,[ author, date comment numbers] - content/ post meta! - KINDA WORKING



OTHER


Setting up the sidebar (see widgets functions!)

CREATE  CUSTOM  TEMPLATE  SETTINGS  PAGE!

*/
 ?>



<main>
    <div class="container">
        <div class="row mt30">
            <div id="blog_content" class="col-md-8">
                <h1>
                    Lorem ipsum dolor sit amet
                </h1>

                <div class="post_info">
                    <span class="post_date">
                        <i class="fa fa-clock-o"></i>
                        Now 2015 by <a href="#">Paul Andrew</a>
                    </span>
                    <a class="post_comments" href="#">
                        <i class="fa fa-comment"></i>
                        3 comments
                    </a>
                </div>
                <div class="post_image">

                    <img src="<?php bloginfo('template_directory'); ?>/img/blog_page.png" alt="">
                </div>
                <div class="post_text">

                    
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                    </p>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                    <p class="quote">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

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
                


                <form id="comment_form">
                    <h3>
                        Leave your comment
                    </h3>
                    <input type="text" placeholder="Your name*">
                    <input type="email" placeholder="Your email*">
                    <textarea placeholder="Your message*"></textarea>

                    <div class="wrap_submit_btn">
                        <a class="btn" href="#" role="button">Submit</a>
                    </div>
                </form>
                <div class="comments">
                    <h3>
                        <span>3</span> comments
                    </h3>

                    <div class="wrap_comment">
                        <div class="comment clearfix">
                            <a class="author_img" href="#">
                                
                                <img src="<?php bloginfo('template_directory'); ?>/img/comment_author.png" alt="">
                            </a>

                            <div class="author_comment">
                                <a href="#" class="author_name">
                                    Eduard Hoxha
                                </a>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit
                                    in
                                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                    cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                    laborum.
                                </p>

                                <div class="comment_info">
                                                    <span class="post_time">
                                                         <i class="fa fa-clock-o"></i>
                                                        20:07
                                                    </span>
                                                    <span class="post_date">
                                                        15.09.2015
                                                    </span>
                                    <a class="comment_reply" href="#">Reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="answer">
                            <div class="comment clearfix">
                                <a class="author_img" href="#">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/comment_author.png" alt="">
                                </a>

                                <div class="author_comment">
                                    <a href="#" class="author_name">
                                        Eduard Hoxha
                                    </a>

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor
                                        incididunt ut
                                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation
                                        ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                        reprehenderit
                                        in
                                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                        occaecat
                                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                                        est laborum.
                                    </p>

                                    <div class="comment_info">
                                                    <span class="post_time">
                                                         <i class="fa fa-clock-o"></i>
                                                        20:07
                                                    </span>
                                                    <span class="post_date">
                                                        15.09.2015
                                                    </span>
                                        <a class="comment_reply" href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrap_comment">
                        <div class="comment clearfix">
                            <a class="author_img" href="#">
                                <img src="<?php bloginfo('template_directory'); ?>/img/comment_author.png" alt="">
                            </a>

                            <div class="author_comment">
                                <a href="#" class="author_name">
                                    Eduard Hoxha
                                </a>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit
                                    in
                                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                    cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                    laborum.
                                </p>

                                <div class="comment_info">
                                                    <span class="post_time">
                                                         <i class="fa fa-clock-o"></i>
                                                        20:07
                                                    </span>
                                                    <span class="post_date">
                                                        15.09.2015
                                                    </span>
                                    <a class="comment_reply" href="#">Reply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php get_sidebar(); ?>
         
        </div>
    </div>
</main>

<?php get_footer(); ?>