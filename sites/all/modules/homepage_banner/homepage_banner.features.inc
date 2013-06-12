<?php
/**
 * @file
 * homepage_banner.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function homepage_banner_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function homepage_banner_views_api() {
  return array("version" => "3.0");
}

/**
 * Implements hook_image_default_styles().
 */
function homepage_banner_image_default_styles() {
  $styles = array();

  // Exported image style: homepage_banner.
  $styles['homepage_banner'] = array(
    'name' => 'homepage_banner',
    'effects' => array(
      3 => array(
        'label' => 'Scale',
        'help' => 'Scaling will maintain the aspect-ratio of the original image. If only a single dimension is specified, the other dimension will be calculated.',
        'effect callback' => 'image_scale_effect',
        'dimensions callback' => 'image_scale_dimensions',
        'form callback' => 'image_scale_form',
        'summary theme' => 'image_scale_summary',
        'module' => 'image',
        'name' => 'image_scale',
        'data' => array(
          'width' => '340',
          'height' => '',
          'upscale' => 1,
        ),
        'weight' => '-10',
      ),
      4 => array(
        'label' => 'Scale',
        'help' => 'Scaling will maintain the aspect-ratio of the original image. If only a single dimension is specified, the other dimension will be calculated.',
        'effect callback' => 'image_scale_effect',
        'dimensions callback' => 'image_scale_dimensions',
        'form callback' => 'image_scale_form',
        'summary theme' => 'image_scale_summary',
        'module' => 'image',
        'name' => 'image_scale',
        'data' => array(
          'width' => '340',
          'height' => '280',
          'upscale' => 1,
        ),
        'weight' => '2',
      ),
    ),
  );

  return $styles;
}

/**
 * Implements hook_node_info().
 */
function homepage_banner_node_info() {
  $items = array(
    'banner' => array(
      'name' => t('באנר'),
      'base' => 'node_content',
      'description' => t('תכנים להצגה בקרוסלה הראשית בדף הבית '),
      'has_title' => '1',
      'title_label' => t('כותרת'),
      'help' => '',
    ),
  );
  return $items;
}
