

<?php
$class_name = 'portfolio-wrapper';

?>

<div class="<?php echo $class_name; ?>">
   <?php  $portfolio = get_field('portfolio');?>
<span class="portfolio_title"> <?php echo $portfolio['portfolio_title'];?></span>
    <div class="<?php echo $class_name; ?>">

        <a href="<?php echo $portfolio['portfolio_link'];?>" target="_blank">
            <div class="portfolio-img">
                <figure>
                    <?php
                    echo wp_get_attachment_image($portfolio['portfolio_img'], 'small', false, array('class' => 'portfolio-img animate'));
                    ?>
                </figure>
            </div>
        </a>
    </div>

</div>

