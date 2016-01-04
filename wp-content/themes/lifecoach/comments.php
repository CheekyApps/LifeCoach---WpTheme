<?php
if ( post_password_required() ) {
	return;
}
?>
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
 <?php comment_form(); ?>
 <?php if ( have_comments() ) : ?>
                <div class="comments">
                    <h3>
                      <?php
			printf( _n( 'One comment', '%1$s comments', get_comments_number(), 'lifecoach' ),
				number_format_i18n( get_comments_number() ), get_the_title() );
		?>
                    </h3>

                    <div class="wrap_comment">
                        <div class="comment clearfix">
                            <a class="author_img" href="#">
                                <img src="<?php bloginfo('template_url');?>/img/comment_author.png" alt="">
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
                                    <img src="<?php bloginfo('template_url');?>/img/comment_author.png" alt="">
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
                                <img src="<?php bloginfo('template_url');?>/img/comment_author.png" alt="">
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
                
 <?php endif; // have_comments() ?>