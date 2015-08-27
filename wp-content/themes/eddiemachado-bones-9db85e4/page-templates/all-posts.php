<?php
/*
 Template Name: All Posts
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>
<?php get_header(); ?>
    <div id="content-body" class="container">
        <div class="row">
            <div class="col-md-9 left-col">
                <div class="row">
                    <?php
                    $args = array( 'numberposts' => -1);
                    $posts= get_posts( $args );
                    if ($posts) {
                        foreach ( $posts as $post ) {
                            setup_postdata($post);
                            ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

                                <header class="article-header entry-header">

                                    <h1 class="entry-title single-title" itemprop="headline" rel="bookmark">
                                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                    </h1>

                                    <p class="byline entry-meta vcard">

                                        <?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
                                            /* the time the post was published */
                                            '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                                            /* the author of the post */
                                            '<span class="by">'.__( 'by', 'bonestheme' ).'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                                        ); ?>

                                    </p>

                                </header> <?php // end article header ?>

                                <section class="entry-content cf" itemprop="articleBody">
                                    <?php the_excerpt();?>
                                </section>
                                <div class="col-md-12"><hr></div>
                            </article>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-3 right-col">
                <div class="row vertical">
                    <div class="col-md-12">
                        <?php get_sidebar('sidebar2'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>