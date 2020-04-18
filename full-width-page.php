<?php

/**
 * Template Name: Full Width Page
 * 
 */

get_header();

?>


<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">
        <div class="container clearfix">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();

                    $author_ID   =   get_the_author_ID();
                    $author_url  =   get_the_author_url();

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
            }
            ?>

        </div><!-- .postcontent end -->

    </div>

</section><!-- #content end -->

<?php get_footer(); ?>