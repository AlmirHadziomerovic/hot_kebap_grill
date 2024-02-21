
<?php

$anchor = '';

if(!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '"';
}


$class_name = 'posts container ';

if(!empty($block['className'])){
    $class_name .= '' . esc_attr($block['className']);
}
?>

<?php

$spaltenBlock = get_field('spaltenblock');

if(!empty($spaltenBlock)):?>


<section <?php echo $anchor; ?> class="<?php echo $class_name;?>">
    
    <article class="post-item">
    
        <div class="img-wrapper">
                    <?php echo wp_get_attachment_image($spaltenBlock['block'], 'medium_large');?>
        </div>
                    <div class="content">
                        <span class="content-headline"><?php echo $spaltenBlock['title'];?></span>
                    <p><?php echo $spaltenBlock['content'];?></p>
                    </div>
    </article>
     <article class="post-item">

        <div class="img-wrapper">
                    <?php echo wp_get_attachment_image($spaltenBlock['block_kopie'], 'medium_large');?>
        </div>
                    <div class="content">
                        <span class="content-headline"><?php echo $spaltenBlock['title_kopie'];?></span>
                    <p><?php echo $spaltenBlock['content_kopie'];?></p>
                    </div>
    </article>
</section>

    <?php
    elseif (is_admin()):
        echo '<span>' . __('Bitte geben Sie einen Content ein', 'wifi') . '</span>';
    endif;
    ?>

