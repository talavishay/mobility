<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */
function mobility_page_alter(&$vars) {
    if(isset( $vars["header"]["menu"]["menu"])){
        $vars["footer"]["footer"]["footer_second"]["system_main-menu"] = $vars["header"]["menu"]["menu"];
        $vars["footer"]["footer"]["footer_second"]["system_main-menu"]['#weight'] = -100;
        unset($vars["footer"]["footer"]["footer_second"]["#theme_wrappers"]);
        $vars["footer"]["footer"]["footer_second"]['#sorted'] = FALSE;
    }
    
}
function mobility_process_views_view(&$vars){
    if($vars["view"]->name === "people"){
        $arg = arg();
        if($arg[0] == "node"){
            $current_node = node_load($arg[1]);
            $current_role = $current_node->field_roles["und"][0]["tid"];
            $vars["classes"] = $vars["classes"]." tax_".$current_role ;
        }
    }
    if($vars["view"]->name === "bibliography"){
        $arg = arg();
        if($arg[0] == "node"){
            $current_node = node_load($arg[1]);
            if(isset($current_node->field_bibliography["und"])){
            $current_role = $current_node->field_bibliography["und"][0]["tid"];
            $vars["classes"] = $vars["classes"]." tax_".$current_role ;
            }
        }
    }
}
function mobility_breadcrumb($breadcrumb) {
   if (!empty($breadcrumb)) {
       $length = count($breadcrumb["breadcrumb"]);
       if(isset($breadcrumb["breadcrumb"][$length-1])){
        $breadcrumb["breadcrumb"][$length-1] = '<span class="last">'.$breadcrumb["breadcrumb"][$length-1].'</span>';
       }
     return '<div class="breadcrumb">'. implode(' <span class="breadcrumb_sep">></span> ', $breadcrumb["breadcrumb"]) .'</div>';
   }
}
//function mobility_simplenews_newsletter_body($body) {
  // alter the following how you wish:
//  $output = '<h2>'. $title ."</h2>\n";
//$output = $body["body"];
//return $output;
//}
function mobility_preprocess_node(&$variables) {
    if($variables["view_mode"] === "token"){
        $node_title_stripped = strip_tags(html_entity_decode($variables["title"]));
//        $node_title_stripped = $variables["title"];
        $links['node-readmore'] = array(
                'title' => t('Read more<span class="element-invisible"> about @title</span>', array('@title' => $node_title_stripped)),
                'href' => 'node/' . $variables["nid"],
                'html' => TRUE,
                    'attributes' => array('rel' => 'tag', 'title' => $node_title_stripped),
                  //
              );
        $variables['content']['links']['node'] = array(
            '#theme' => 'links__node__node',
            '#links' => $links,
            '#attributes' => array('class' => array('links', 'inline')),
        );
        
    }
    $variables['date'] = t('@date', array('@date' => date("d.m.y", $variables['created'])));
}

  