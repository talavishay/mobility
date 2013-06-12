<article<?php print preg_replace('/(.*)class="(.*)/i', '$1 class="grid-7 $2', $attributes); ?>>
    
  <?php print $user_picture; ?>
  
  <?php if ($display_submitted): ?>
  <footer class="submitted"><?php print $date; ?> -- <?php print $name; ?></footer>
  <?php endif; ?>  
  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
    hide($content['body']);  
      print render($content["field_image_people"]);
      print render($title_prefix);?>
        <?php if ( $title): ?>
            <header>
              <h3<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h3>
            </header>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
      <!--<a href="<?php // print drupal_get_path_alias("node/".$node->nid);?>">-->
      <?php if($teaser):?>
    
      <a href="<?php print "/node/".$node->nid;?>">
    <?php endif;?>
          
    <?php         print render($content);     ?>
          <?php if(!$teaser):?>
          <hr/>
            <?php print render($content['body']);?>
          <?php endif;?>
    <?php if($teaser):?>
    </a>
  <?php endif;?>
  </div>

</article>