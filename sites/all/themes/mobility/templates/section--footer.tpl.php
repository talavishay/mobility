<footer<?php print $attributes; ?>>
  <?php 
  $date = preg_replace('/\//i', '.', variable_get("last_modified"));
  print preg_replace('/<span id="last_mod">Last Modified/i', '<span id="last_mod">Last Modified '.$date , $content); ?>
</footer>