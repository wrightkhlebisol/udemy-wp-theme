<div class="entry clearfix">
    <?php if (has_post_thumbnail()) : ?>
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

        <?php echo get_the_tag_list('<li><i class="icon-folder-open"></i>', ', ', '</li>') ?>

        <li><a href="single.html#comments"><i class="icon-comments"></i> <?php comments_number('0 Comments', '1 Comment') ?></a></li>
    </ul>
    <div class="entry-content">
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="more-link">Read More</a>
    </div>
</div>