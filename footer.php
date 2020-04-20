 <!-- Footer
    ============================================= -->
 <footer id="footer" class="dark">

     <!-- Copyrights
============================================= -->
     <div id="copyrights">

         <div class="container clearfix">

             <div class="col_half">
                 <?php echo get_theme_mod('wu_footer_copyright_text'); ?>
                 <br>
                 <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
             </div>

             <div class="col_half col_last tright">
                 <div class="fright clearfix">
                     <a href="https://www.facebook.com/<?php echo get_theme_mod('wu_facebook_handle') ?>" class="social-icon si-small si-borderless si-facebook">
                         <i class="icon-facebook"></i>
                         <i class="icon-facebook"></i>
                     </a>

                     <a href="https://www.twitter.com/<?php echo get_theme_mod('wu_twitter_handle') ?>" class="social-icon si-small si-borderless si-twitter">
                         <i class="icon-twitter"></i>
                         <i class="icon-twitter"></i>
                     </a>

                 </div>

                 <div class="clear"></div>

                 <i class="icon-envelope2"></i> <?php echo get_theme_mod('wu_mail_address') ?> <span class="middot">&middot;</span> <i class="icon-headphones"></i> <?php echo get_theme_mod('wu_phone_number') ?>
             </div>

         </div>

     </div><!-- #copyrights end -->

 </footer><!-- #footer end -->

 </div><!-- #wrapper end -->

 <!-- Go To Top
============================================= -->
 <div id="gotoTop" class="icon-angle-up"></div>

 <?php wp_footer(); ?>

 </body>

 </html>