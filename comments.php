<?php

    if(post_password_required()){
        return;
    }

?>

<!-- Comments
============================================= -->
<div id="comments" class="clearfix">

    <h3 id="comments-title"><span>3</span> Comments</h3>

    <!-- Comments List
    ============================================= -->
    <ol class="commentlist clearfix">

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

        <li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1" id="li-comment-2">

            <div id="comment-2" class="comment-wrap clearfix">

                <div class="comment-meta">

                    <div class="comment-author vcard">

                            <span class="comment-avatar clearfix">
                            <img alt='' src='http://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=60&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G' class='avatar avatar-60 photo' height='60' width='60' /></span>

                    </div>

                </div>

                <div class="comment-content clearfix">

                    <div class="comment-author"><a href='http://themeforest.net/user/semicolonweb' rel='external nofollow' class='url'>SemiColon</a><span><a href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span></div>

                    <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>


                </div>

                <div class="clear"></div>

            </div>

        </li>

    </ol><!-- .commentlist end -->

    <div class="clear"></div>

    <?php
        comment_form();
    ?>

    <!-- Comment Form
    ============================================= -->
    <div id="respond" class="clearfix">

        <h3>Leave a <span>Comment</span></h3>

        <form class="clearfix" action="#" method="post" id="commentform">

            <div class="col_one_third">
                <label for="author">Name</label>
                <input type="text" name="author" id="author" value="" size="22" tabindex="1" class="sm-form-control" />
            </div>

            <div class="col_one_third">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="" size="22" tabindex="2" class="sm-form-control" />
            </div>

            <div class="col_one_third col_last">
                <label for="url">Website</label>
                <input type="text" name="url" id="url" value="" size="22" tabindex="3" class="sm-form-control" />
            </div>

            <div class="clear"></div>

            <div class="col_full">
                <label for="comment">Comment</label>
                <textarea name="comment" cols="58" rows="7" tabindex="4" class="sm-form-control"></textarea>
            </div>

            <div class="col_full nobottommargin">
                <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin">Submit Comment</button>
            </div>

        </form>

    </div><!-- #respond end -->

</div><!-- #comments end -->