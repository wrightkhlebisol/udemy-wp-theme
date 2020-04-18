<?php

/**
 * Template Name: Full Width Page
 * 
 */

get_header();

while (have_posts()) {
    the_post();
?>
    <!-- Page Title
============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1><?php the_title(); ?></h1>
            <?php
            if (function_exists('the_subtitle')) { ?>
                <span><?php the_subtitle(); ?></span>
            <?php
            }
            ?>
        </div>

    </section><!-- #page-title end -->
<?php
}
rewind_posts();
?>

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">
        <div class="container clearfix">

            <!-- Post Content
        ============================================= -->
            <div class="postcontent nobottommargin clearfix">
                <?php
                while (have_posts()) {
                    the_post();

                    $author_ID      =   get_the_author_ID();
                    $author_url     =   get_the_author_url();

                ?>


                    <!-- Single Post
                                ============================================= -->
                    <div class="entry clearfix">
                        <!-- Entry Image
                                    ============================================= -->
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="entry-image">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('full'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <!-- .entry-image end -->

                        <!-- Entry Content
                                    ============================================= -->
                        <div class="entry-content notopmargin">

                            <?php
                            the_content();
                            wp_link_pages([
                                'before'        =>  '<p class="text-center">' . __('Pages: '),
                                'after'         =>  '</p>'
                            ]);
                            ?>
                            <!-- Post Single - Content End -->

                            <div class="clear"></div>

                        </div>
                    </div><!-- .entry end -->

                    <!-- Comments
                                ============================================= -->
                    <?php
                    if (comments_open() || get_comments_number()) {
                        comments_template();
                    }
                    ?>

                <?php
                }
                ?>

            </div><!-- .postcontent end -->

        </div>

    </div>

</section><!-- #content end -->

<?php get_footer(); ?>