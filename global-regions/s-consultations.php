<?php
/* START_REGION_OUTPUT */
$s_consultations = upfront_create_region(
			array (
  'name' => 's-consultations',
  'title' => 'S-Consultations',
  'type' => 'wide',
  'scope' => 'global',
  'container' => 's-consultations',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 68,
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => true,
       'col' => 24,
       'row' => 56,
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'col' => 24,
       'row' => 51,
    )),
  )),
  'background_type' => 'image',
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => false,
  ),
  'bg_padding_type' => 'varied',
  'top_bg_padding_slider' => '30',
  'top_bg_padding_num' => '30',
  'bottom_bg_padding_slider' => '30',
  'bottom_bg_padding_num' => '30',
  'bg_padding_slider' => 0,
  'bg_padding_num' => 0,
  'background_color' => '#ffffff',
  'background_style' => 'full',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'background_image' => '{{upfront:style_url}}/images/global-regions/s-consultations/bg-consultations.jpg',
  'background_image_ratio' => 0.25,
  'background_repeat' => 'repeat',
  'expand_lock' => true,
  'version' => '1.0.0',
)
			);

$s_consultations->add_element("Uspacer", array (
  'columns' => '12',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1452645119904-1838 upfront-module-spacer',
  'id' => 'module-1452645119904-1838',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1452645119903-1046',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1452645119904-1023',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
      'left' => 0,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'left' => 0,
      'top' => 0,
    ),
  ),
));

$s_consultations->add_element("Uspacer", array (
  'columns' => '12',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453689972-81897',
  'options' => 
  array (
    'element_id' => 'spacer-object-1453689972-3557',
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'preset' => 'default',
  ),
  'wrapper_id' => 'wrapper-1453689972-83869',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
));

$s_consultations->add_element("Uspacer", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1453442643563-1159 upfront-module-spacer',
  'id' => 'module-1453442643563-1159',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1453442643562-1536',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1453442643563-1681',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'clear' => true,
      'order' => 0,
      'col' => 5,
    ),
    'mobile' => 
    array (
      'col' => 5,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'hide' => 0,
      'left' => 0,
      'col' => 5,
      'top' => 0,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 5,
      'left' => 0,
      'top' => 0,
    ),
  ),
));

$s_consultations->add_element("PlainTxt", array (
  'columns' => '11',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1452644794286-1842',
  'id' => 'module-1452644794286-1842',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<div class="plain-text-container">
<h5 style="text-align: right;">CONSULTATIONS</h5>
</div>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1452644794286-1873',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'top_padding_num' => '80',
    'bottom_padding_num' => '5',
    'is_edited' => true,
    'lock_padding' => '',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '80',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '5',
    'row' => 8,
    'padding_slider' => '15',
    'preset' => 'default',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
         'top_padding_use' => 'yes',
         'top_padding_slider' => '50',
         'top_padding_num' => '50',
      )),
       'current_property' => 'lock_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
         'lock_padding' => '',
         'top_padding_use' => 'yes',
         'top_padding_slider' => '50',
         'top_padding_num' => '50',
         'row' => 10,
      )),
    )),
    'use_padding' => false,
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'usingNewAppearance' => true,
    'breakpoint_presets' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'preset' => 'align-center',
      )),
       'desktop' => 
      (array)(array(
         'preset' => 'default',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'default',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1452645008156-1437',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 0,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'row' => 10,
      'top' => 0,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
  ),
));

$s_consultations->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1452645116371-1857 upfront-module-spacer',
  'id' => 'module-1452645116371-1857',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1452645116371-1735',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1452645116371-1276',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'col' => 1,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
      'left' => 0,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'col' => 1,
      'left' => 0,
      'top' => 0,
    ),
  ),
));

$s_consultations->add_element("Uspacer", array (
  'columns' => '7',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453689972-51409',
  'options' => 
  array (
    'element_id' => 'spacer-object-1453689972-34917',
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'preset' => 'default',
  ),
  'wrapper_id' => 'wrapper-1453689972-25049',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
));

$s_consultations->add_element("Uspacer", array (
  'columns' => '6',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453689972-84666',
  'options' => 
  array (
    'element_id' => 'spacer-object-1453689972-59102',
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'preset' => 'default',
  ),
  'wrapper_id' => 'wrapper-1453689972-23199',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 1,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => false,
      'order' => 3,
      'edited' => true,
      'col' => 6,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'hide' => 0,
      'left' => 0,
      'col' => 6,
      'edited' => true,
    ),
  ),
));

$s_consultations->add_element("Uspacer", array (
  'columns' => '1',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453689972-61969',
  'options' => 
  array (
    'element_id' => 'spacer-object-1453689972-80600',
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'preset' => 'default',
  ),
  'wrapper_id' => 'wrapper-1453689972-67622',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 1,
  'wrapper_breakpoint' => 
  array (
    'mobile' => 
    array (
      'clear' => false,
      'order' => 3,
      'edited' => true,
      'col' => 1,
    ),
  ),
  'breakpoint' => 
  array (
    'mobile' => 
    array (
      'hide' => 0,
      'left' => 0,
      'col' => 1,
      'edited' => true,
    ),
  ),
));

$s_consultations->add_element("Uspacer", array (
  'columns' => '12',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1452645127367-1217 upfront-module-spacer',
  'id' => 'module-1452645127367-1217',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1452645127366-1865',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1452645127367-1355',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
      'left' => 0,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'left' => 0,
      'top' => 0,
    ),
  ),
));

$s_consultations->add_element("Uspacer", array (
  'columns' => '12',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453689972-17831',
  'options' => 
  array (
    'element_id' => 'spacer-object-1453689972-22008',
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'preset' => 'default',
  ),
  'wrapper_id' => 'wrapper-1453689972-40913',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
));

$s_consultations->add_element("Uspacer", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1453442646628-1047 upfront-module-spacer',
  'id' => 'module-1453442646628-1047',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1453442646627-1684',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1453442646628-1546',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'clear' => true,
      'order' => 1,
      'col' => 5,
    ),
    'mobile' => 
    array (
      'col' => 5,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'hide' => 0,
      'left' => 0,
      'col' => 5,
      'top' => 0,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 5,
      'left' => 0,
      'top' => 0,
    ),
  ),
));

$s_consultations->add_element("PlainTxt", array (
  'columns' => '11',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1452645008322-1183',
  'id' => 'module-1452645008322-1183',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p style="text-align: right;">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1452645008321-1006',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'top_padding_num' => '5',
    'bottom_padding_num' => '80',
    'is_edited' => true,
    'lock_padding' => '',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '5',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '80',
    'padding_slider' => '15',
    'preset' => 'default',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
         'bottom_padding_use' => 'yes',
         'bottom_padding_slider' => '50',
         'bottom_padding_num' => '50',
         'row' => 15,
      )),
       'current_property' => 'lock_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
         'lock_padding' => '',
         'bottom_padding_use' => 'yes',
         'bottom_padding_slider' => '50',
         'bottom_padding_num' => '50',
      )),
    )),
    'use_padding' => false,
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'usingNewAppearance' => true,
    'breakpoint_presets' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'preset' => 'align-center',
      )),
       'desktop' => 
      (array)(array(
         'preset' => 'default',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1452645057029-1052',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 1,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 2,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'row' => 15,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
  ),
));

$s_consultations->add_element("Uspacer", array (
  'columns' => '5',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453689972-39845',
  'options' => 
  array (
    'element_id' => 'spacer-object-1453689972-29110',
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'preset' => 'default',
  ),
  'wrapper_id' => 'wrapper-1453689972-5641',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 1,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => false,
      'order' => 1,
      'edited' => true,
      'col' => 5,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'hide' => 0,
      'left' => 0,
      'col' => 5,
      'edited' => true,
    ),
  ),
));

$s_consultations->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1452645122668-1544 upfront-module-spacer',
  'id' => 'module-1452645122668-1544',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1452645122668-1359',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1452645122668-1137',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'col' => 1,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
      'left' => 0,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'col' => 1,
      'left' => 0,
      'top' => 0,
    ),
  ),
));

$s_consultations->add_element("Uspacer", array (
  'columns' => '7',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453689972-95412',
  'options' => 
  array (
    'element_id' => 'spacer-object-1453689972-94098',
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'preset' => 'default',
  ),
  'wrapper_id' => 'wrapper-1453689972-7551',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
));

$s_consultations->add_element("Uspacer", array (
  'columns' => '11',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453689972-78883',
  'options' => 
  array (
    'element_id' => 'spacer-object-1453689972-82299',
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'preset' => 'default',
  ),
  'wrapper_id' => 'wrapper-1453689972-26707',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 1,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => false,
      'order' => 7,
      'edited' => true,
      'col' => 11,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'hide' => 0,
      'left' => 0,
      'col' => 11,
      'edited' => true,
    ),
  ),
));

$s_consultations->add_element("Uspacer", array (
  'columns' => '1',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1453689972-48985',
  'options' => 
  array (
    'element_id' => 'spacer-object-1453689972-48432',
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'preset' => 'default',
  ),
  'wrapper_id' => 'wrapper-1453689972-73101',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 1,
  'wrapper_breakpoint' => 
  array (
    'mobile' => 
    array (
      'clear' => false,
      'order' => 7,
      'edited' => true,
      'col' => 1,
    ),
  ),
  'breakpoint' => 
  array (
    'mobile' => 
    array (
      'hide' => 0,
      'left' => 0,
      'col' => 1,
      'edited' => true,
    ),
  ),
));

$regions->add($s_consultations);

/* END_REGION_OUTPUT */
