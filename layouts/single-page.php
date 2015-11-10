<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$main = upfront_create_region(
			array (
  'name' => 'main',
  'title' => 'Main Area',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'main',
  'position' => 10,
  'allow_sidebar' => true,
),
			array (
  'row' => 53,
  'background_type' => 'color',
  'background_color' => 'rgba(168,144,132,0)',
  'nav_region' => '',
  'breakpoint' => 
  (array)(array(
     'custom-1410783042947' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'tablet' => 
    (array)(array(
       'edited' => true,
       'row' => 40,
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'row' => 34,
    )),
  )),
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => '',
  ),
)
			);

$main->add_element("ThisPost", array (
  'columns' => '20',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '33',
  'margin_bottom' => '0',
  'class' => 'default-page',
  'id' => 'default-page',
  'options' => 
  array (
    'type' => 'ThisPostModel',
    'view_class' => 'ThisPostView',
    'class' => 'c24 upfront-this_post',
    'has_settings' => 1,
    'id_slug' => 'this_post',
    'row' => 28,
    'post_data' => 
    array (
    ),
    'disable_resize' => false,
    'disable_drag' => false,
    'post_type' => 'page',
    'layout' => 
    array (
      0 => 
      (array)(array(
         'classes' => 'c24 clr',
         'objects' => 
        array (
          0 => 
          (array)(array(
             'slug' => 'title',
             'classes' => 'post-part c24',
          )),
        ),
      )),
      1 => 
      (array)(array(
         'classes' => 'c24 clr',
         'objects' => 
        array (
          0 => 
          (array)(array(
             'slug' => 'contents',
             'classes' => ' post-part c24',
          )),
        ),
      )),
    ),
    'element_id' => 'default-page-object',
    'anchor' => '',
    'theme_style' => '_default',
    'hide_featured_image' => '',
    'full_featured_image' => '',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'theme_style' => 'uf-upage-responsive',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'uf-upage-responsive',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'disable_resize' => true,
  'disable_drag' => false,
  'wrapper_id' => 'default-page-wrapper',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
      'clear' => true,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'clear' => false,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'col' => 18,
      'clear' => true,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'custom-1410783042947' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 18,
      'top' => 20,
    ),
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'top' => 8,
      'row' => 20,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'top' => 9,
      'row' => 15,
    ),
  ),
));

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

