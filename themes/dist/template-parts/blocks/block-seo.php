

<?php
$class_name = ' seo ' 

?>

<?php
$seo = get_field('block_seo');
?>


<?php

if($seo['seo_direction']){
    $class_name .=' reverse';
}
?>
<?php

    if($seo['seo_direction_column']){
        $class_name .=' seo_direction_column';
    }
?>
<?php

    if($seo['seo-direction-row']){
        $class_name .=' seo-direction-row';
    }
?>

<ul class="icon-three">
            <li>
                <span class="icon-arrow-down" aria-hidden="false"></span>
            </li>
</ul>



<section class="<?php echo $class_name; ?>">


    <div class="seo-img alignfull animate">
                <?php
                 echo wp_get_attachment_image($seo['seo_img'], 'Projects', false, array('class' => 'seo-img animate'));
                ?>
    </div>
    <div>
            <div class="seo-text animate">
                <?php echo $seo['seo_description'];
                    if($seo['seo_description'])
                    ?>
                <div class="read-more" onclick="toggleText()">Mehr lesen</div>
            </div>
     </div>
</section>
