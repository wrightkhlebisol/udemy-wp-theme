<!-- Sidebar
============================================= -->
<div class="sidebar nobottommargin col_last clearfix">
    <div class="sidebar-widgets-wrap">
        <?php
            if(is_active_sidebar('wu_sidebar')){
                dynamic_sidebar('wu_sidebar');
            }
        ?>
    </div>
</div><!-- .sidebar end -->