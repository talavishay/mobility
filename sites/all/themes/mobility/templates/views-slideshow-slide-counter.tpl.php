<div id="views_slideshow_slide_counter_<?php print $variables['vss_id']; ?>" class="<?php print $classes; ?>">
    <?php $i =1 ;
    foreach($rows as $k => $v ): ?>
        <span class="numbers"><?php print $k+1;$i++?></span> 
    <?php endforeach; ?>
</div>
