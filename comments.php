<?php

    if(post_password_required()){
        return;
    }

?>

<!-- Comments
============================================= -->
<div id="comments" class="clearfix">

    <h3 id="comments-title"><span><?php comments_number() ?></span></h3>

    <!-- Comments List
    ============================================= -->
    <ol class="commentlist clearfix">

    <?php  ?>
        <li class="comment even thread-even depth-1" id="li-comment-1">

            <div id="comment-1" class="comment-wrap clearfix">

                <div class="comment-meta">

                    <div class="comment-author vcard">

                            <span class="comment-avatar clearfix">
                            <img alt='' src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' class='avatar avatar-60 photo avatar-default' height='60' width='60' /></span>

                    </div>

                </div>

                <div class="comment-content clearfix">

                    <div class="comment-author">John Doe<span><a href="#" title="Permalink to this comment">April 24, 2012 at 10:46 am</a></span></div>

                    <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                </div>

                <div class="clear"></div>

            </div>

        </li>

    </ol><!-- .commentlist end -->

    <div class="clear"></div>


    <!-- Comment Form
    ============================================= -->
    <div id="respond" class="clearfix">
        <?php
            comment_form([
                'comment_field'     =>      '<div class="col_full">
                <label for="comment">Comment</label>
                <textarea name="comment" cols="58" rows="7" tabindex="4" class="sm-form-control"></textarea>
            </div>',
                'fields'            =>      [
                    'author'        =>      '<div class="col_one_third">
                    <label for="author">Name</label>
                    <input type="text" name="author" id="author" value="" size="22" tabindex="1" class="sm-form-control" />
                </div>',
                    'email'         =>      '<div class="col_one_third">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="" size="22" tabindex="2" class="sm-form-control" />
                </div>',
                    'url'           =>      '<div class="col_one_third col_last">
                    <label for="url">Website</label>
                    <input type="text" name="url" id="url" value="" size="22" tabindex="3" class="sm-form-control" />
                </div>'
                ],
                'class_submit'      =>      'button button-3d nomargin',
                'label_submit'      =>      __('SUBMIT COMMENT', 'udemy'),   
                'title_reply'       =>      __('Leave a <span>comment</span>', 'udemy')     
            ]);
        ?>
    </div><!-- #respond end -->

</div><!-- #comments end -->