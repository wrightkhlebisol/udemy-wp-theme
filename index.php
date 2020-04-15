<?php get_header(); ?>

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
            <div>
                <div class="container clearfix">
                    <span class="label label-danger bnews-title">Breaking News:</span>

                    <div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false" data-pagi="false">
                        <div class="flexslider">
                            <div class="slider-wrap">
                                <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </strong></a></div>
                                <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </strong></a></div>
                                <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </strong></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container clearfix">

            <!-- Post Content
        ============================================= -->
            <div class="postcontent nobottommargin clearfix">

                <!-- Posts
            ============================================= -->
                <div id="posts">
                    <?php
                    if(have_posts()){
                        while(have_posts()){
                            the_post();
                            ?>
                            <div class="entry clearfix">
                        <?php if(has_post_thumbnail()): ?>
                            <div class="entry-image">
                            <a href="<?php the_permalink(); ?>" data-lightbox="image">
                                <?php the_post_thumbnail('full', ['class' => 'image_fade']); ?>
                            </a>
                        </div>
                        <?php endif; ?>
                        <div class="entry-title">
                            <h2><a href="single.html"><?php the_title(); ?></a></h2>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i><?php echo get_the_date() ?></li>
                            <li><a href="#"><i class="icon-user"></i> <?php the_author(); ?></a></li>
                            <li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
                            <li><a href="single.html#comments"><i class="icon-comments"></i> <?php comments_number(0, 1) ?> Comments</a></li>
                        </ul>
                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="more-link">Read More</a>
                        </div>
                    </div>
                            <?php
                        }
                    }
                ?>
                    

                </div><!-- #posts end -->

                <!-- Pagination
            ============================================= -->
                <ul class="pager nomargin">
                    <li class="previous"><?php previous_post_link('&larr; Older'); ?></li>
                    <li class="next"><?php next_post_link('Newer &rarr;'); ?></li>
                </ul><!-- .pager end -->

            </div><!-- .postcontent end -->

            <?php get_sidebar(); ?>

        </div>

    </div>

</section><!-- #content end -->

<?php get_footer(); ?>