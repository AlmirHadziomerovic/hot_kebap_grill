<?php
    $social_links = get_field('social_links', 'option');
?>
<footer id="page-footer" class="columns container">

    <div class="social-links column">


        <?php if($social_links['instagram']):?>
        <a href="<?php echo $social_links['instagram'];?>" target="_blank">
            <span class="icon-instagram" aria-hidden="true"></span>
            <span class="screen-reader-text"><?php _e('Follow on Instagram', 'wifi');?></span>
        </a>
        <?php endif;?>


        <?php if($social_links['facebook']):?>
        <a href="<?php echo $social_links['facebook'];?>" target="_blank">
            <span class="icon-facebook1" aria-hidden="true"></span>
            <span class="screen-reader-text"><?php _e('Follow on Facebook', 'wifi');?></span>
        </a>    
        <?php endif;?>
    </div>

    <?php
    wp_nav_menu(array(
        'theme_location' => 'footer',
        'container' => false,
        'menu_id'=> 'nav-menu',
        'fallback_cb' => false,
        'depth' =>1
    ));
    ?>
<div class="copyright column">
    <?php
        echo sprintf(__('&copy; %1$s, %2$s'), date('Y'),get_bloginfo('name'));
    ?>
</div>
</footer>

<div id="totop"><span class="icon-top" aria-hidden="true"></span><?php _e(' ', 'wifi');?></div>


<?php 
wp_footer();
?>
</body>
</html>