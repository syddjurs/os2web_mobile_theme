<?php
/**
 * @file template.php
 *
 *  os2web mobile subtheme for bootstrap
 */

function os2web_mobile_preprocess_page(&$vars) {
  $theme = variable_get('theme_default');
  $theme_path = drupal_get_path('theme', $theme);

  if(file_exists($theme_path.'/logo.png')){
    $vars['logo'] = $theme_path . '/logo.png';
  }
  
  if(file_exists($theme_path.'/mobile/mobile.css')){
    drupal_add_css($theme_path .'/mobile/mobile.css', array('group' => CSS_THEME));
  }

}

/*
 * Implements hook_breadcrumb()
 */
function os2web_mobile_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  if(arg(0) !== 'mobile') {
    unset($breadcrumb[1]);
    return '<div class="breadcrumb">'.implode(' / ',$breadcrumb).'</div>';
  }
}

/*
 * Implements hook_preprocess_panels_pane()
 */
function os2web_mobile_preprocess_panels_pane(&$vars) {
  // if the panel pane is of type block and subtype contains
  // menu_block, we want to use a custom template 
  if($vars['pane']->type == 'block') {
    if(strstr($vars['pane']->subtype, 'menu_block')){
      $vars['theme_hook_suggestions'][] = 'panels_pane__menu_block';
    }
  }
}
