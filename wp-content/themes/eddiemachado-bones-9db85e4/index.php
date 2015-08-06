<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 left-col">
            <div class="row">
                <div id="intro" class="col-md-10 col-md-offset-1">
                    <h1 class="light-blue">Hello !</h1>
                    <p>
                        My name is Ariel Ibarra and I am a 25 years old Web Developer with 4+
                        years of experience with hands in job... and a motorcycle lover.
                    </p>
                </div>
                <div id="resume" class="col-md-12">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h2 class="education light-blue">
                                <img src="<?php echo get_template_directory_uri(); ?>/library/images/icon_03.png">
                                 Education
                            </h2>
                            <p class="job-title">
                                <span class="subtitle">Universidad Metropolitana Castro Carazo:</span>
                            </p>
                            <p>
                                "ING. EN SISTEMAS INFORMATICOS" IN 2011
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h2 class="experience light-blue">
                                <img src="<?php echo get_template_directory_uri(); ?>/library/images/icon_07.png">
                                Job Experience
                            </h2>
                            <p class="job-title"><span>Web Developer:</span> BVMedia. FEB 2014 - PRESENT</p>
                            <p>
                                As a Web Developer at BVMedia, I contributed to the development, execution, quality assurance and testing of all marketed web sites.
                                I built and maintained existing PHP code, MySQL databases. Developed custom PHP solutions using Laravel Framework. Developed and maintained custom WordPress themes and also helped in creation and improvement of JAVA-based websites using Hibernate CRM.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <p class="job-title"><span>Web Developer:</span> BVMedia. FEB 2014 - PRESENT</p>
                            <p>
                                As a Web Developer at BVMedia, I contributed to the development, execution, quality assurance and testing of all marketed web sites.
                                I built and maintained existing PHP code, MySQL databases. Developed custom PHP solutions using Laravel Framework. Developed and maintained custom WordPress themes and also helped in creation and improvement of JAVA-based websites using Hibernate CRM.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <p class="job-title"><span>Web Developer:</span> BVMedia. FEB 2014 - PRESENT</p>
                            <p>
                                As a Web Developer at BVMedia, I contributed to the development, execution, quality assurance and testing of all marketed web sites.
                                I built and maintained existing PHP code, MySQL databases. Developed custom PHP solutions using Laravel Framework. Developed and maintained custom WordPress themes and also helped in creation and improvement of JAVA-based websites using Hibernate CRM.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h2 class="awards light-blue">
                                <img src="<?php echo get_template_directory_uri(); ?>/library/images/icon_11.png">
                                Awards
                            </h2>
                            <p class="job-title"><span>Web Developer:</span> BVMedia. FEB 2014 - PRESENT</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 right-col">
            <div class="row">
                <div class="col-md-9 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="my-name">Ariel Ibarra</h2>
                            <h4 class="position">Full-Stack Web Developer</h4>
                            <img class="passport-photo" src="<?php echo get_template_directory_uri(); ?>/library/images/passport-photo.png">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 info-box">
                            <ul>
                                <li class="address">
                                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/icons_03.png">
                                    Montes de Oca, Costa Rica</li>
                                <li class="phone">
                                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/icons_06.png">
                                    +506 6196-6138
                                </li>
                                <li class="email">
                                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/icons_08.png">
                                    arjos8@gmai.com
                                </li>
                                <li class="linkein">
                                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/icons_10.png">
                                    <a href="cr.linkedin.com/in/aibarrab">cr.linkedin.com/in/aibarrab</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="skills light-blue">Skills</h2>
	                        <p class="job-title"><span>Professional skills</span></p>
	                        <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--			<div id="content">-->
<!---->
<!--				<div id="inner-content" class="wrap cf">-->
<!---->
<!--						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">-->
<!---->
<!--							--><?php //if (have_posts()) : while (have_posts()) : the_post(); ?>
<!---->
<!--							<article id="post---><?php //the_ID(); ?><!--" --><?php //post_class( 'cf' ); ?><!-- role="article">-->
<!---->
<!--								<header class="article-header">-->
<!---->
<!--									<h1 class="h2 entry-title"><a href="--><?php //the_permalink() ?><!--" rel="bookmark" title="--><?php //the_title_attribute(); ?><!--">--><?php //the_title(); ?><!--</a></h1>-->
<!--									<p class="byline entry-meta vcard">-->
<!--                                                                        --><?php //printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
//                       								/* the time the post was published */
//                       								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
//                       								/* the author of the post */
//                       								'<span class="by">'.__( 'by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
//                    							); ?>
<!--									</p>-->
<!---->
<!--								</header>-->
<!---->
<!--								<section class="entry-content cf">-->
<!--									--><?php //the_content(); ?>
<!--								</section>-->
<!---->
<!--								<footer class="article-footer cf">-->
<!--									<p class="footer-comment-count">-->
<!--										--><?php //comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?>
<!--									</p>-->
<!---->
<!---->
<!--                 	--><?php //printf( '<p class="footer-category">' . __('filed under', 'bonestheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>
<!---->
<!--                  --><?php //the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
<!---->
<!---->
<!--								</footer>-->
<!---->
<!--							</article>-->
<!---->
<!--							--><?php //endwhile; ?>
<!---->
<!--									--><?php //bones_page_navi(); ?>
<!---->
<!--							--><?php //else : ?>
<!---->
<!--									<article id="post-not-found" class="hentry cf">-->
<!--											<header class="article-header">-->
<!--												<h1>--><?php //_e( 'Oops, Post Not Found!', 'bonestheme' ); ?><!--</h1>-->
<!--										</header>-->
<!--											<section class="entry-content">-->
<!--												<p>--><?php //_e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?><!--</p>-->
<!--										</section>-->
<!--										<footer class="article-footer">-->
<!--												<p>--><?php //_e( 'This is the error message in the index.php template.', 'bonestheme' ); ?><!--</p>-->
<!--										</footer>-->
<!--									</article>-->
<!---->
<!--							--><?php //endif; ?>
<!---->
<!---->
<!--						</main>-->
<!---->
<!--					--><?php //get_sidebar(); ?>
<!---->
<!--				</div>-->
<!---->
<!--			</div>-->


<?php get_footer(); ?>
