<div<?php print $attributes; ?>>
  <div<?php print $content_attributes; ?>>
    <?php if ($linked_logo_img || $site_name || $site_slogan): ?>
    <div class="branding-data clearfix">
      <?php if ($linked_logo_img): ?>
      <div class="logo-img">
        <?php
        if(drupal_is_front_page()){
            print $linked_logo_img;    
        } else {
            print '<a href="/"><img src="/sites/all/themes/mobility/images/logo_not_front.png" alt="" id="logo" /></a>';
        };
         ?>
      </div>
      <?php endif; ?>
      <?php if ($site_name || $site_slogan): ?>
      <?php $class = $site_name_hidden && $site_slogan_hidden ? ' element-invisible' : ''; ?>
      <hgroup class="site-name-slogan<?php print $class; ?>">        
        <?php if ($site_name): ?>
        <?php $class = $site_name_hidden ? ' element-invisible' : ''; ?>
        <?php if ($is_front): ?>        
        <h1 class="site-name<?php print $class; ?>"><?php print $linked_site_name; ?></h1>
        <?php else: ?>
        <h2 class="site-name<?php print $class; ?>"><?php print $linked_site_name; ?></h2>
        <?php endif; ?>
        <?php endif; ?>
        <?php if ($site_slogan): ?>
        <?php $class = $site_slogan_hidden ? ' element-invisible' : ''; ?>
        <h6 class="site-slogan<?php print $class; ?>"><?php print $site_slogan; ?></h6>
        <?php endif; ?>
      </hgroup>
      <div class="links">
			<a id="university" href="http://www.huji.ac.il/" target="_blank" >huji.ac.il</a>
			<a id="erc" href="http://erc.europa.eu/" target="_blank">erc.europa.eu</a>
			<a id="hebrew" href="/node/34">עברית</a>
		</div>
      <?php endif; ?>
    </div>
    <?php endif; ?>
    <?php print $content; ?>
  </div>
</div>
