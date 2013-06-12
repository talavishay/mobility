<article<?php print $attributes; ?>>
  <?php print $user_picture; ?>
  <?php print render($title_prefix); ?>
  <?php
  if (!$page && $title && $type !== "links" && $type !== "publications" && $type !== "bibliography" && $type !== "news_activities" ): ?>
  <header>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  </header>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
  <footer class="submitted"><?php print $date; ?> -- <?php print $name; ?></footer>
  <?php endif; ?>  
  
  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);?>
        <?php if ( $title && ($type == "links" || $type == "publications" || $type == "bibliography"  || $type == "news_activities")): ?>
            <header style="display:inline-block">
        <?php
        if ( $type == "bibliography" ): ?>
        <?php
            if(isset($node->field_bibliography["und"]) && !$teaser){
                $tid = $node->field_bibliography["und"][0]["tid"];
                $term = taxonomy_term_load($tid);
                echo"<h2>".$term->name."</h2>";
                

                $block = block_load("block",4);

                  $rblock = _block_render_blocks(array($block));
                  $rblockk = _block_get_renderable_array($rblock  );
                  print render($rblockk );
            };
         ?>
                
        <?php endif; ?>
              <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
            </header>
        <?php endif; 
      print render($content);
    ?>
  </div>
  
  <div class="clearfix">
    <?php if (!empty($content['links'])): ?>
      <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
    <?php endif; ?>

    <?php print render($content['comments']); ?>
  </div>
</article>