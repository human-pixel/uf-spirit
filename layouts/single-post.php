<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$content_cover = upfront_create_region(
			array (
  'name' => 'content-cover',
  'title' => 'Content Cover',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'content-cover',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 57,
  'background_type' => 'featured',
  'nav_region' => '',
  'background_color' => '#fafafa',
  'background_style' => 'full',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'mobile' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'custom-1410783042947' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => '',
  ),
)
			);

$regions->add($content_cover);

$region_3 = upfront_create_region(
			array (
  'name' => 'region-3',
  'title' => 'Region 3',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'region-3',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'mobile' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'custom-1410783042947' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
)
			);

$region_3->add_element("PlainTxt", array (
  'columns' => '22',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1408529844144-1619',
  'id' => 'module-1408529844144-1619',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><a href="{{upfront:home_url}}/" rel="entry">HOME</a>  &nbsp;/ &nbsp; BLOG</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1408529844142-1195',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 1,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'theme_style' => 'breadcrumbs',
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1408529977772-1644',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'col' => 18,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 18,
      'order' => 0,
    ),
  ),
));

$regions->add($region_3);

$content = upfront_create_region(
			array (
  'name' => 'content',
  'title' => 'Content',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'content',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 214,
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'mobile' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'custom-1410783042947' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
  'background_type' => 'color',
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => false,
  ),
  'background_color' => '#ffffff',
)
			);

$content->add_element("ThisPost", array (
  'columns' => '20',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '5',
  'margin_bottom' => '0',
  'class' => 'default-post',
  'id' => 'default-post',
  'options' => 
  array (
    'type' => 'ThisPostModel',
    'view_class' => 'ThisPostView',
    'class' => 'c24 uposts-object',
    'has_settings' => 1,
    'id_slug' => 'upost',
    'row' => 114,
    'post_data' => 
    array (
      0 => 'author',
      1 => 'date',
      2 => 'comments_count',
      3 => 'featured_image',
    ),
    'post_type' => 'post',
    'taxonomy' => '',
    'term' => '',
    'limit' => '1',
    'content_type' => 'full',
    'featured_image' => 1,
    'pagination' => 0,
    'prev' => '',
    'next' => '',
    'postLayout' => 
    array (
      0 => 
      (array)(array(
         'objects' => 
        array (
          0 => 
          (array)(array(
             'classes' => 'post_date post-part c2 ml0 mt1',
             'slug' => 'date',
          )),
        ),
         'classes' => 'c2 clr',
      )),
      1 => 
      (array)(array(
         'objects' => 
        array (
          0 => 
          (array)(array(
             'classes' => 'post-part 24 c22 ml0 mt1',
             'slug' => 'title',
          )),
        ),
         'classes' => 'c22 ',
      )),
      2 => 
      (array)(array(
         'objects' => 
        array (
          0 => 
          (array)(array(
             'classes' => 'post-part 24 c22 ml2 mt1',
             'slug' => 'categories',
          )),
        ),
         'classes' => 'c22 ',
      )),
      3 => 
      (array)(array(
         'objects' => 
        array (
          0 => 
          (array)(array(
             'classes' => 'post-part 24 c20 ml2 mt5',
             'slug' => 'author',
          )),
        ),
         'classes' => 'c20 ',
      )),
      4 => 
      (array)(array(
         'objects' => 
        array (
          0 => 
          (array)(array(
             'classes' => 'post-part 24 c4 ml0 mt5',
             'slug' => 'comments_count',
          )),
        ),
         'classes' => 'c4 ',
      )),
      5 => 
      (array)(array(
         'objects' => 
        array (
          0 => 
          (array)(array(
             'classes' => 'post-part 24 c24 ml2 mt8',
             'slug' => 'contents',
          )),
        ),
         'classes' => 'c24 ',
      )),
      6 => 
      (array)(array(
         'objects' => 
        array (
          0 => 
          (array)(array(
             'classes' => 'post-part 24 c24 ml2 mt8',
             'slug' => 'featured_image',
          )),
        ),
         'classes' => 'c24 ',
      )),
    ),
    'partOptions' => 
    (array)(array(
       'featured_image' => 
      (array)(array(
         'height' => 38,
      )),
       'title' => 
      (array)(array(
         'theme_style' => '_default',
         'anchor' => '',
      )),
       'date' => 
      (array)(array(
         'format' => 'j M',
         'height' => 10,
      )),
    )),
    'element_id' => 'default-post-object',
    'theme_style' => '_default',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'theme_style' => '_default',
      )),
    )),
    'hide_featured_image' => '',
    'full_featured_image' => '',
  ),
  'row' => 114,
  'sticky' => true,
  'disable_resize' => true,
  'disable_drag' => false,
  'wrapper_id' => 'wrapper-1408977742068-1128',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'col' => 18,
      'order' => 0,
    ),
  ),
  'new_line' => true,
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 18,
      'order' => 0,
    ),
  ),
));

$content->add_element("Ucomment", array (
  'columns' => '20',
  'margin_left' => '2',
  'margin_top' => '0',
  'class' => 'upfront-comment_module',
  'id' => 'module-1445262122920-1064',
  'options' => 
  array (
    'id_slug' => 'ucomment',
    'type' => 'UcommentModel',
    'view_class' => 'UcommentView',
    'class' => 'c24 upfront-comment',
    'has_settings' => 1,
    'prepend_form' => false,
    'element_id' => 'ucomment-object-1445262122920-1990',
    'row' => 40,
    'anchor' => '',
  ),
  'row' => 40,
  'wrapper_id' => 'wrapper-1445262132354-1148',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'col' => 18,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783042947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 18,
      'order' => 0,
    ),
  ),
));

$regions->add($content);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

