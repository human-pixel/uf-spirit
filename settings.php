<?php
return array(
	'typography' => '{"h1":{"weight":"300","style":"normal","size":"120","line_height":"1.1","font_face":"Open Sans","font_family":"sans-serif","color":"#ufc6"},"h2":{"weight":"700","style":"normal","size":"25","line_height":"1.3","font_face":"Open Sans","font_family":"sans-serif","color":"#ufc7"},"h3":{"weight":"300","style":"normal","size":"30","line_height":"1.5","font_face":"Open Sans","font_family":"sans-serif","color":"#ufc7"},"h4":{"weight":"600","style":"normal","size":"20","line_height":"1.1","font_face":"Open Sans","font_family":"sans-serif","color":"#ufc7"},"h5":{"weight":"600","style":"normal","size":"20","line_height":"2","font_face":"Open Sans","font_family":"sans-serif","color":"#ufc2"},"h6":{"weight":"300","style":"normal","size":"14","line_height":"1.5","font_face":"Open Sans","font_family":"sans-serif","color":"#ufc2"},"p":{"weight":"300","style":"normal","size":"16","line_height":"2","font_face":"Open Sans","font_family":"sans-serif","color":"#ufc5"},"a":{"weight":"300","style":"normal","size":false,"line_height":false,"font_face":"Open Sans","font_family":"sans-serif","color":"#ufc0"},"a:hover":{"weight":"300","style":"normal","size":false,"line_height":false,"font_face":"Open Sans","font_family":"sans-serif","color":"#ufc1"},"ul":{"weight":"300","style":"normal","size":"16","line_height":"2","font_face":"Open Sans","font_family":"sans-serif","color":"#ufc5"},"ol":{"weight":"300","style":"normal","size":"16","line_height":"2","font_face":"Open Sans","font_family":"sans-serif","color":"#ufc5"},"blockquote":{"weight":"300","style":"normal","size":"24","line_height":"2","font_face":"Oswald","font_family":"sans-serif","color":"#ufc7"},"blockquote.upfront-quote-alternative":{"weight":"300","style":"normal","size":"24","line_height":"1.458","font_face":"Oswald","font_family":"sans-serif","color":"#ufc7"}}',
	'layout_style' => '/* Headings */
h1, h3, h4, h5 {
    letter-spacing: -0.5px;
}
h2 {
    margin-bottom: 10px !important;
    letter-spacing: -0.5px;
}
h2:after {
    content: "";
    width: 100px;
    height: 20px;
    position: absolute;
    left: 50%;
    bottom: -10px;
    margin-left: -45.5px;
    background: url("UPFRONT_THEME_BASE/ui/wave-line.png") no-repeat transparent;
}
h6 {
    padding-right: 20px;
    padding-left: 20px;
    border-left: 1px solid #e2ded5;
}
/* Blockquotes */
blockquote {
    margin-top: 20px;
    margin-bottom: 20px;
    text-align: center;
}
blockquote:before {
    content: "";
    width: 31px;
    height: 23px;
    display: block;
    position: relative;
    top: -10px;
    left: 10px;
    background: url("UPFRONT_THEME_BASE/ui/sprite.png") no-repeat;
    background-image: url("UPFRONT_THEME_BASE/ui/sprite.svg"), none;
    background-position: -542px -549px;
}
.upfront-object blockquote p, .upfront-output-object blockquote a {
    color: #333333;
    font-size: 24px;
    line-height: 1.458em;
    font-family: "Oswald";
    font-weight: 300;
    font-style: normal;
}
/* Ordered & Unordered Lists */
.upfront-object ul, .upfront-output-object ul, .upfront-object ol, .upfront-uotput-object ol {
    margin-left: 60px;
}',
	'layout_properties' => '[{"name":"version","value":"1.0.0"},{"name":"background_color","value":"rgba(255,255,255,1)"},{"name":"grid","value":{"column_widths":{"desktop":45},"column_paddings":{"desktop":"15"},"baselines":{"desktop":5},"type_paddings":{"desktop":10}}}]',
	'theme_colors' => '{"colors":[{"color":"#69a8a6","prev":"#69a8a6","highlight":"#69a8a6","shade":"#69a8a6","alpha":"1","selected":"","luminance":""},{"color":"#548685","prev":"#548685","highlight":"#548685","shade":"#548685","alpha":"1","selected":"","luminance":""},{"color":"#a89084","prev":"#a89084","highlight":"#a89084","shade":"#a89084","alpha":"1","selected":"","luminance":""},{"color":"#e1e3de","prev":"#e1e3de","highlight":"#e1e3de","shade":"#e1e3de","alpha":"1","selected":"","luminance":""},{"color":"#e2ded5","prev":"#e2ded5","highlight":"#e2ded5","shade":"#e2ded5","alpha":"1","selected":"","luminance":""},{"color":"#666666","prev":"#666666","highlight":"#666666","shade":"#666666","alpha":"1","selected":"","luminance":""},{"color":"#ffffff","prev":"#ffffff","highlight":"#ffffff","shade":"#ffffff","alpha":"1","selected":"","luminance":""},{"color":"#333333","prev":"#333333","highlight":"#333333","shade":"#333333","alpha":"1","selected":"","luminance":""}],"range":"0"}',
	'post_image_variants' => '[{"vid":"variant-1414082154417-1612","label":"Full Width","group":{"margin_left":"0","margin_right":"0","col":"24","row":"60","left":"0","float":"none","height":"300","width_cls":"c24","left_cls":"ml0","clear_cls":""},"image":{"order":"0","col":"24","top":"0","left":"0","row":"51","clear":"true","height":"255","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"},"caption":{"show":"1","order":"1","col":"24","top":"0","left":"0","row":"10","clear":"true","height":"50","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"}},{"vid":"variant-1414082173807-1526","label":"Center","group":{"margin_left":"0","margin_right":"0","col":"16","row":"63","left":"4","float":"none","height":"300","width_cls":"c16","left_cls":"ml0","clear_cls":""},"image":{"order":"0","col":"24","top":"0","left":"0","row":"51","clear":"true","height":"255","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"},"caption":{"show":"1","order":"1","col":"16","top":"0","left":"0","row":"10","clear":"true","height":"50","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"}}]',
	'theme_fonts' => '[{"id":"Open Sans300","font":{"family":"Open Sans","category":"sans-serif","variants":["300","300italic","regular","italic","600","600italic","700","700italic","800","800italic"]},"variant":"300","displayVariant":"300 normal"},{"id":"Open Sans300italic","font":{"family":"Open Sans","category":"sans-serif","variants":["300","300italic","regular","italic","600","600italic","700","700italic","800","800italic"]},"variant":"300italic","displayVariant":"300 italic"},{"id":"Open Sansregular","font":{"family":"Open Sans","category":"sans-serif","variants":["300","300italic","regular","italic","600","600italic","700","700italic","800","800italic"]},"variant":"regular","displayVariant":"regular"},{"id":"Open Sansitalic","font":{"family":"Open Sans","category":"sans-serif","variants":["300","300italic","regular","italic","600","600italic","700","700italic","800","800italic"]},"variant":"italic","displayVariant":"italic"},{"id":"Open Sans600","font":{"family":"Open Sans","category":"sans-serif","variants":["300","300italic","regular","italic","600","600italic","700","700italic","800","800italic"]},"variant":"600","displayVariant":"600 normal"},{"id":"Open Sans600italic","font":{"family":"Open Sans","category":"sans-serif","variants":["300","300italic","regular","italic","600","600italic","700","700italic","800","800italic"]},"variant":"600italic","displayVariant":"600 italic"},{"id":"Open Sans700","font":{"family":"Open Sans","category":"sans-serif","variants":["300","300italic","regular","italic","600","600italic","700","700italic","800","800italic"]},"variant":"700","displayVariant":"700 normal"},{"id":"Open Sans700italic","font":{"family":"Open Sans","category":"sans-serif","variants":["300","300italic","regular","italic","600","600italic","700","700italic","800","800italic"]},"variant":"700italic","displayVariant":"700 italic"},{"id":"Oswald300","font":{"family":"Oswald","category":"sans-serif","variants":["300","regular","700"]},"variant":"300","displayVariant":"300 normal"},{"id":"Oswaldregular","font":{"family":"Oswald","category":"sans-serif","variants":["300","regular","700"]},"variant":"regular","displayVariant":"regular"},{"id":"Oswald700","font":{"family":"Oswald","category":"sans-serif","variants":["300","regular","700"]},"variant":"700","displayVariant":"700 normal"}]',
	'icon_fonts' => '[{"name":"Meg","family":"Meg","files":{"ttf":"Meg.ttf"},"type":"theme-defined","active":true}]',
	'responsive_settings' => '{"breakpoints":[{"name":"Default Desktop","short_name":"Default","default":true,"id":"desktop","width":1080,"columns":24,"enabled":true,"fixed":true,"active":"true","styles":"","column_width":"45","column_padding":"15","baseline":"5","type_padding":"10"},{"name":"Tablet","short_name":"Tablet","id":"tablet","width":570,"columns":12,"enabled":true,"fixed":true,"default":false,"active":"false","styles":""},{"name":"Mobile","short_name":"Mobile","id":"mobile","width":315,"columns":7,"enabled":true,"fixed":true,"default":false,"active":"false","styles":""}]}',
	'button_presets' => '[{\\"bordertype\\":\\"solid\\",\\"borderwidth\\":\\"4\\",\\"bordercolor\\":\\"rgb(66, 127, 237)\\",\\"borderradiuslock\\":\\"yes\\",\\"borderradius1\\":\\"1\\",\\"borderradius2\\":\\"1\\",\\"borderradius3\\":\\"1\\",\\"borderradius4\\":\\"1\\",\\"bgcolor\\":\\"rgba(12, 6, 6, 0)\\",\\"fontsize\\":\\"1\\",\\"fontface\\":\\"Open Sans\\",\\"fontstyle\\":\\"regular\\",\\"fontstyle_weight\\":\\"400\\",\\"fontstyle_style\\":\\"normal\\",\\"lineheight\\":\\"1\\",\\"color\\":\\"#ufc6\\",\\"hov_bordertype\\":\\"solid\\",\\"hov_borderwidth\\":\\"4\\",\\"hov_bordercolor\\":\\"rgb(66, 127, 237)\\",\\"hov_borderradiuslock\\":\\"yes\\",\\"hov_borderradius1\\":\\"100\\",\\"hov_borderradius2\\":\\"100\\",\\"hov_borderradius3\\":\\"100\\",\\"hov_borderradius4\\":\\"100\\",\\"hov_bgcolor\\":\\"rgb(66, 127, 237)\\",\\"hov_fontsize\\":\\"16\\",\\"hov_fontface\\":\\"Arial\\",\\"hov_fontstyle\\":\\"600 normal\\",\\"hov_fontstyle_weight\\":\\"600\\",\\"hov_fontstyle_style\\":\\"normal\\",\\"hov_lineheight\\":\\"3\\",\\"hov_color\\":\\"rgb(255, 255, 255)\\",\\"hov_duration\\":\\"0.3\\",\\"hov_transition\\":\\"linear\\",\\"hov_easing\\":\\"ease-in-out\\",\\"focus_bordertype\\":\\"solid\\",\\"focus_borderwidth\\":\\"4\\",\\"focus_bordercolor\\":\\"rgb(66, 127, 237)\\",\\"focus_borderradiuslock\\":\\"yes\\",\\"focus_borderradius1\\":\\"100\\",\\"focus_borderradius2\\":\\"100\\",\\"focus_borderradius3\\":\\"100\\",\\"focus_borderradius4\\":\\"100\\",\\"focus_bgcolor\\":\\"rgb(66, 127, 237)\\",\\"focus_fontsize\\":\\"16\\",\\"focus_fontface\\":\\"Arial\\",\\"focus_fontstyle\\":\\"600 normal\\",\\"focus_fontstyle_weight\\":\\"600\\",\\"focus_fontstyle_style\\":\\"normal\\",\\"focus_lineheight\\":\\"3\\",\\"focus_color\\":\\"rgb(255, 255, 255)\\",\\"id\\":\\"arrow-down\\",\\"name\\":\\"arrow down\\",\\"radius\\":\\"1\\",\\"radius_number\\":\\"1\\",\\"preset_style\\":\\"#page .arrow-down .upfront_cta {@n    width: 60px;@n    height: 60px;@n    display: block;@n    margin: 0 auto;@n    background: url(\\\\\\\\\\\\\\"UPFRONT_THEME_BASE\\\\/ui\\\\/sprite.png\\\\\\\\\\\\\\") no-repeat transparent;@n    background-image: url(\\\\\\\\\\\\\\"UPFRONT_THEME_BASE\\\\/ui\\\\/sprite.svg\\\\\\\\\\\\\\"), none;@n    background-position: -50px -50px;@n    text-indent: -9999px;@n}@n#page .arrow-down .upfront_cta:hover {@n    background-position: -210px -50px;@n}@n\\",\\"migrated\\":\\"true\\"},{\\"bordertype\\":\\"solid\\",\\"borderwidth\\":\\"1\\",\\"bordercolor\\":\\"rgb(66, 127, 237)\\",\\"useradius\\":\\"yes\\",\\"borderradiuslock\\":\\"yes\\",\\"borderradius1\\":\\"4\\",\\"borderradius2\\":\\"4\\",\\"borderradius3\\":\\"4\\",\\"borderradius4\\":\\"4\\",\\"bgcolor\\":\\"#ufc0\\",\\"fontsize\\":\\"16\\",\\"fontface\\":\\"Oswald\\",\\"fontstyle\\":\\"300 normal\\",\\"fontstyle_weight\\":\\"300\\",\\"fontstyle_style\\":\\"normal\\",\\"lineheight\\":\\"1.8\\",\\"color\\":\\"#ufc6\\",\\"hov_bordertype\\":\\"solid\\",\\"hov_borderwidth\\":\\"4\\",\\"hov_bordercolor\\":\\"rgb(66, 127, 237)\\",\\"hov_borderradiuslock\\":\\"yes\\",\\"hov_borderradius1\\":\\"100\\",\\"hov_borderradius2\\":\\"100\\",\\"hov_borderradius3\\":\\"100\\",\\"hov_borderradius4\\":\\"100\\",\\"hov_bgcolor\\":\\"#ufc1\\",\\"hov_fontsize\\":\\"16\\",\\"hov_fontface\\":\\"Oswald\\",\\"hov_fontstyle\\":\\"600 normal\\",\\"hov_fontstyle_weight\\":\\"600\\",\\"hov_fontstyle_style\\":\\"normal\\",\\"hov_lineheight\\":\\"1\\",\\"hov_color\\":\\"#ufc6\\",\\"hov_duration\\":\\"0.3\\",\\"hov_transition\\":\\"ease-in-out\\",\\"hov_easing\\":\\"ease-in-out\\",\\"focus_bordertype\\":\\"solid\\",\\"focus_borderwidth\\":\\"4\\",\\"focus_bordercolor\\":\\"rgb(66, 127, 237)\\",\\"focus_borderradiuslock\\":\\"yes\\",\\"focus_borderradius1\\":\\"100\\",\\"focus_borderradius2\\":\\"100\\",\\"focus_borderradius3\\":\\"100\\",\\"focus_borderradius4\\":\\"100\\",\\"focus_bgcolor\\":\\"#ufc1\\",\\"focus_fontsize\\":\\"16\\",\\"focus_fontface\\":\\"Arial\\",\\"focus_fontstyle\\":\\"600 normal\\",\\"focus_fontstyle_weight\\":\\"600\\",\\"focus_fontstyle_style\\":\\"normal\\",\\"focus_lineheight\\":\\"3\\",\\"focus_color\\":\\"rgb(255, 255, 255)\\",\\"id\\":\\"default\\",\\"name\\":\\"default\\",\\"migrated\\":\\"true\\",\\"preset_style\\":\\"#page .default .upfront_cta {@n    border-bottom: 2px solid #548685;@n}@n\\",\\"theme_preset\\":\\"true\\",\\"radius\\":\\"4\\",\\"radius_number\\":\\"4\\",\\"hov_usebgcolor\\":\\"yes\\",\\"hov_use_animation\\":\\"yes\\",\\"focus_usebgcolor\\":\\"yes\\"}]',
	'nav_presets' => '[{\\"static-font-size\\":\\"12\\",\\"static-font-family\\":\\"Oswald\\",\\"static-font-color\\":\\"#ufc2\\",\\"static-font-style\\":\\"regular\\",\\"static-weight\\":\\"400\\",\\"static-style\\":\\"normal\\",\\"static-line-height\\":\\"1.6\\",\\"static-nav-bg\\":\\"rgba(12, 6, 6, 0)\\",\\"hover-font-size\\":\\"12\\",\\"hover-font-family\\":\\"Oswald\\",\\"hover-font-color\\":\\"#ufc5\\",\\"hover-font-style\\":\\"regular\\",\\"hover-weight\\":\\"400\\",\\"hover-style\\":\\"normal\\",\\"hover-line-height\\":\\"1.6\\",\\"hover-transition-duration\\":\\"0.3\\",\\"hover-transition-easing\\":\\"ease-in-out\\",\\"hover-nav-bg\\":\\"rgba(255, 255, 255, 0)\\",\\"focus-font-size\\":\\"16\\",\\"focus-font-family\\":\\"Arial\\",\\"focus-font-color\\":\\"rgba(26, 124, 252, 1)\\",\\"focus-font-style\\":\\"400 normal\\",\\"focus-weight\\":\\"400\\",\\"focus-style\\":\\"normal\\",\\"focus-line-height\\":\\"1.6\\",\\"focus-nav-bg\\":\\"rgba(255, 255, 255, 0)\\",\\"id\\":\\"footer-menu\\",\\"name\\":\\"footer menu\\",\\"hover-use-typography\\":\\"yes\\",\\"breakpoint\\":{\\"desktop\\":{\\"menu_alignment\\":\\"left\\",\\"burger_alignment\\":\\"left\\",\\"menu_style\\":\\"horizontal\\"}}},{\\"static-font-size\\":\\"16\\",\\"static-font-family\\":\\"Oswald\\",\\"static-font-color\\":\\"#ufc6\\",\\"static-font-style\\":\\"300 normal\\",\\"static-weight\\":\\"300\\",\\"static-style\\":\\"normal\\",\\"static-line-height\\":\\"3.3\\",\\"static-nav-bg\\":\\"rgba(12, 6, 6, 0)\\",\\"hover-font-size\\":\\"16\\",\\"hover-font-family\\":\\"Arial\\",\\"hover-font-color\\":\\"rgba(26, 124, 252, 1)\\",\\"hover-font-style\\":\\"400 normal\\",\\"hover-weight\\":\\"400\\",\\"hover-style\\":\\"normal\\",\\"hover-line-height\\":\\"1.6\\",\\"hover-transition-duration\\":\\"0.3\\",\\"hover-transition-easing\\":\\"ease-in-out\\",\\"hover-nav-bg\\":\\"#ufc1\\",\\"focus-font-size\\":\\"16\\",\\"focus-font-family\\":\\"Arial\\",\\"focus-font-color\\":\\"rgba(26, 124, 252, 1)\\",\\"focus-font-style\\":\\"400 normal\\",\\"focus-weight\\":\\"400\\",\\"focus-style\\":\\"normal\\",\\"focus-line-height\\":\\"1.6\\",\\"focus-nav-bg\\":\\"#ufc1\\",\\"id\\":\\"default\\",\\"name\\":\\"default\\",\\"preset_style\\":\\"#page .default [data-style=\\\\\\\\\\\\\\"horizontal\\\\\\\\\\\\\\"] ul.menu > li.menu-item > a, #page .default div[data-style=\\\\\\\\\\\\\\"vertical\\\\\\\\\\\\\\"] ul.menu > li.menu-item > a {@n    transition: 0.4s ease;@n}@n\\",\\"migrated\\":\\"true\\",\\"breakpoint\\":{\\"desktop\\":{\\"menu_alignment\\":\\"center\\",\\"burger_alignment\\":\\"left\\",\\"menu_style\\":\\"horizontal\\"}},\\"hover-use-color\\":\\"yes\\",\\"theme_preset\\":\\"true\\",\\"focus-use-color\\":\\"yes\\"}]',
	'menus' => '[{"id":false,"slug":"main-menu","name":"Main Menu","description":"","items":[{"ID":48,"post_author":"1","post_date":"2016-01-20 03:43:05","post_date_gmt":"2016-01-20 03:43:05","post_content":"","post_title":"SERVICES","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"services","to_ping":"","pinged":"","post_modified":"2016-01-20 03:49:58","post_modified_gmt":"2016-01-20 03:49:58","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/spirit.upfront.one\\/2016\\/01\\/20\\/services\\/","menu_order":1,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":48,"menu_item_parent":"0","object_id":"48","object":"custom","type":"custom","type_label":"Custom Link","title":"SERVICES","url":"#","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":49,"post_author":"1","post_date":"2016-01-20 03:43:05","post_date_gmt":"2016-01-20 03:43:05","post_content":"","post_title":"ABOUT","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"about","to_ping":"","pinged":"","post_modified":"2016-01-20 03:43:05","post_modified_gmt":"2016-01-20 03:43:05","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/spirit.upfront.one\\/2016\\/01\\/20\\/about\\/","menu_order":2,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":49,"menu_item_parent":"0","object_id":"49","object":"custom","type":"custom","type_label":"Custom Link","title":"ABOUT","url":"#","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":50,"post_author":"1","post_date":"2016-01-20 03:43:05","post_date_gmt":"2016-01-20 03:43:05","post_content":"","post_title":"TESTIMONIALS","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"testimonials","to_ping":"","pinged":"","post_modified":"2016-01-20 03:43:05","post_modified_gmt":"2016-01-20 03:43:05","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/spirit.upfront.one\\/2016\\/01\\/20\\/testimonials\\/","menu_order":3,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":50,"menu_item_parent":"0","object_id":"50","object":"custom","type":"custom","type_label":"Custom Link","title":"TESTIMONIALS","url":"#","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":51,"post_author":"1","post_date":"2016-01-20 03:43:05","post_date_gmt":"2016-01-20 03:43:05","post_content":"","post_title":"GALLERY","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"gallery","to_ping":"","pinged":"","post_modified":"2016-01-20 03:43:05","post_modified_gmt":"2016-01-20 03:43:05","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/spirit.upfront.one\\/2016\\/01\\/20\\/gallery\\/","menu_order":4,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":51,"menu_item_parent":"0","object_id":"51","object":"custom","type":"custom","type_label":"Custom Link","title":"GALLERY","url":"#","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":52,"post_author":"1","post_date":"2016-01-20 03:43:05","post_date_gmt":"2016-01-20 03:43:05","post_content":"","post_title":"BLOG","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"blog","to_ping":"","pinged":"","post_modified":"2016-01-20 03:43:05","post_modified_gmt":"2016-01-20 03:43:05","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/spirit.upfront.one\\/2016\\/01\\/20\\/blog\\/","menu_order":5,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":52,"menu_item_parent":"0","object_id":"52","object":"custom","type":"custom","type_label":"Custom Link","title":"BLOG","url":"#","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":53,"post_author":"1","post_date":"2016-01-20 03:43:06","post_date_gmt":"2016-01-20 03:43:06","post_content":"","post_title":"CONTACT US","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"contact-us","to_ping":"","pinged":"","post_modified":"2016-01-20 03:43:06","post_modified_gmt":"2016-01-20 03:43:06","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/spirit.upfront.one\\/2016\\/01\\/20\\/contact-us\\/","menu_order":6,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":53,"menu_item_parent":"0","object_id":"53","object":"custom","type":"custom","type_label":"Custom Link","title":"CONTACT US","url":"#","target":"","attr_title":"","description":"","classes":[""],"xfn":""}]},{"id":false,"slug":"footer-menu","name":"Footer Menu","description":"","items":[{"ID":58,"post_author":"1","post_date":"2016-01-21 06:34:41","post_date_gmt":"2016-01-21 06:34:41","post_content":"","post_title":"TERMS & PRIVACY","post_excerpt":"","post_status":"publish","comment_status":"closed","ping_status":"closed","post_password":"","post_name":"asdadasd","to_ping":"","pinged":"","post_modified":"2016-01-21 06:35:40","post_modified_gmt":"2016-01-21 06:35:40","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/spirit.upfront.one\\/?p=58","menu_order":1,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":58,"menu_item_parent":"0","object_id":"58","object":"custom","type":"custom","type_label":"Custom Link","title":"TERMS & PRIVACY","url":"#","target":"","attr_title":"","description":"","classes":[""],"xfn":""}]}]',
	'text_presets' => '[{\\"bg_color\\":\\"rgb(0, 0, 0, 0)\\",\\"useborder\\":\\"\\",\\"border_width\\":\\"2\\",\\"border_style\\":\\"solid\\",\\"border_color\\":\\"rgba(0, 0, 0, 1)\\",\\"usetypography\\":\\"\\",\\"fontface\\":\\"Arial\\",\\"fontstyle\\":\\"400 normal\\",\\"weight\\":\\"400\\",\\"style\\":\\"normal\\",\\"fontsize\\":\\"14\\",\\"lineheight\\":\\"1\\",\\"color\\":\\"rgb(0, 0, 0)\\",\\"id\\":\\"default\\",\\"name\\":\\"default\\",\\"preset_style\\":\\"\\",\\"migrated\\":\\"true\\",\\"theme_preset\\":\\"true\\"},{\\"bg_color\\":\\"rgba(0, 0, 0, 0)\\",\\"useborder\\":\\"\\",\\"border_width\\":\\"2\\",\\"border_style\\":\\"solid\\",\\"border_color\\":\\"rgba(0, 0, 0, 1)\\",\\"usetypography\\":\\"yes\\",\\"fontface\\":\\"Arial\\",\\"fontstyle\\":\\"400 normal\\",\\"weight\\":\\"400\\",\\"style\\":\\"normal\\",\\"fontsize\\":\\"14\\",\\"lineheight\\":\\"1\\",\\"color\\":\\"rgb(0, 0, 0)\\",\\"id\\":\\"copyright\\",\\"name\\":\\"copyright\\",\\"h1-fontface\\":\\"\\",\\"h1-fontstyle\\":\\"\\",\\"h1-weight\\":\\"400\\",\\"h1-style\\":\\"normal\\",\\"h1-fontsize\\":\\"\\",\\"h1-lineheight\\":\\"\\",\\"h1-color\\":\\"\\",\\"h2-fontface\\":\\"\\",\\"h2-fontstyle\\":\\"\\",\\"h2-weight\\":\\"400\\",\\"h2-style\\":\\"normal\\",\\"h2-fontsize\\":\\"\\",\\"h2-lineheight\\":\\"\\",\\"h2-color\\":\\"\\",\\"h3-fontface\\":\\"\\",\\"h3-fontstyle\\":\\"\\",\\"h3-weight\\":\\"400\\",\\"h3-style\\":\\"normal\\",\\"h3-fontsize\\":\\"\\",\\"h3-lineheight\\":\\"\\",\\"h3-color\\":\\"\\",\\"h4-fontface\\":\\"\\",\\"h4-fontstyle\\":\\"\\",\\"h4-weight\\":\\"400\\",\\"h4-style\\":\\"normal\\",\\"h4-fontsize\\":\\"\\",\\"h4-lineheight\\":\\"\\",\\"h4-color\\":\\"\\",\\"h5-fontface\\":\\"\\",\\"h5-fontstyle\\":\\"\\",\\"h5-weight\\":\\"400\\",\\"h5-style\\":\\"normal\\",\\"h5-fontsize\\":\\"\\",\\"h5-lineheight\\":\\"\\",\\"h5-color\\":\\"\\",\\"h6-fontface\\":\\"\\",\\"h6-fontstyle\\":\\"\\",\\"h6-weight\\":\\"400\\",\\"h6-style\\":\\"normal\\",\\"h6-fontsize\\":\\"\\",\\"h6-lineheight\\":\\"\\",\\"h6-color\\":\\"\\",\\"p-fontface\\":\\"Oswald\\",\\"p-fontstyle\\":\\"regular\\",\\"p-weight\\":\\"400\\",\\"p-style\\":\\"normal\\",\\"p-fontsize\\":\\"12\\",\\"p-lineheight\\":\\"2.8\\",\\"p-color\\":\\"\\",\\"a-fontface\\":\\"\\",\\"a-fontstyle\\":\\"\\",\\"a-weight\\":\\"400\\",\\"a-style\\":\\"normal\\",\\"a-fontsize\\":\\"\\",\\"a-lineheight\\":\\"\\",\\"a-color\\":\\"\\",\\"a-hover-fontface\\":\\"\\",\\"a-hover-fontstyle\\":\\"\\",\\"a-hover-weight\\":\\"400\\",\\"a-hover-style\\":\\"normal\\",\\"a-hover-fontsize\\":\\"\\",\\"a-hover-lineheight\\":\\"\\",\\"a-hover-color\\":\\"\\",\\"ul-fontface\\":\\"\\",\\"ul-fontstyle\\":\\"\\",\\"ul-weight\\":\\"400\\",\\"ul-style\\":\\"normal\\",\\"ul-fontsize\\":\\"\\",\\"ul-lineheight\\":\\"\\",\\"ul-color\\":\\"\\",\\"ol-fontface\\":\\"\\",\\"ol-fontstyle\\":\\"\\",\\"ol-weight\\":\\"400\\",\\"ol-style\\":\\"normal\\",\\"ol-fontsize\\":\\"\\",\\"ol-lineheight\\":\\"\\",\\"ol-color\\":\\"\\",\\"blockquote-fontface\\":\\"\\",\\"blockquote-fontstyle\\":\\"\\",\\"blockquote-weight\\":\\"400\\",\\"blockquote-style\\":\\"normal\\",\\"blockquote-fontsize\\":\\"\\",\\"blockquote-lineheight\\":\\"\\",\\"blockquote-color\\":\\"\\",\\"blockquote-alternative-fontface\\":\\"\\",\\"blockquote-alternative-fontstyle\\":\\"\\",\\"blockquote-alternative-weight\\":\\"400\\",\\"blockquote-alternative-style\\":\\"normal\\",\\"blockquote-alternative-fontsize\\":\\"\\",\\"blockquote-alternative-lineheight\\":\\"\\",\\"blockquote-alternative-color\\":\\"\\",\\"static-element-type\\":\\"p\\",\\"theme_preset\\":\\"true\\",\\"preset_style\\":\\"#page .copyright .plain-text-container p {@n    padding-right: 20px;@n    padding-left: 20px;@n}@n\\"},{\\"bg_color\\":\\"rgba(0, 0, 0, 0)\\",\\"useborder\\":\\"\\",\\"border_width\\":\\"2\\",\\"border_style\\":\\"solid\\",\\"border_color\\":\\"rgba(0, 0, 0, 1)\\",\\"usetypography\\":\\"yes\\",\\"fontface\\":\\"Arial\\",\\"fontstyle\\":\\"400 normal\\",\\"weight\\":\\"400\\",\\"style\\":\\"normal\\",\\"fontsize\\":\\"14\\",\\"lineheight\\":\\"1\\",\\"color\\":\\"rgb(0, 0, 0)\\",\\"id\\":\\"breadcrumbs\\",\\"name\\":\\"breadcrumbs\\",\\"h1-fontface\\":\\"\\",\\"h1-fontstyle\\":\\"\\",\\"h1-weight\\":\\"400\\",\\"h1-style\\":\\"normal\\",\\"h1-fontsize\\":\\"\\",\\"h1-lineheight\\":\\"\\",\\"h1-color\\":\\"\\",\\"h2-fontface\\":\\"\\",\\"h2-fontstyle\\":\\"\\",\\"h2-weight\\":\\"400\\",\\"h2-style\\":\\"normal\\",\\"h2-fontsize\\":\\"\\",\\"h2-lineheight\\":\\"\\",\\"h2-color\\":\\"\\",\\"h3-fontface\\":\\"\\",\\"h3-fontstyle\\":\\"\\",\\"h3-weight\\":\\"400\\",\\"h3-style\\":\\"normal\\",\\"h3-fontsize\\":\\"\\",\\"h3-lineheight\\":\\"\\",\\"h3-color\\":\\"\\",\\"h4-fontface\\":\\"\\",\\"h4-fontstyle\\":\\"\\",\\"h4-weight\\":\\"400\\",\\"h4-style\\":\\"normal\\",\\"h4-fontsize\\":\\"\\",\\"h4-lineheight\\":\\"\\",\\"h4-color\\":\\"\\",\\"h5-fontface\\":\\"\\",\\"h5-fontstyle\\":\\"\\",\\"h5-weight\\":\\"400\\",\\"h5-style\\":\\"normal\\",\\"h5-fontsize\\":\\"\\",\\"h5-lineheight\\":\\"\\",\\"h5-color\\":\\"\\",\\"h6-fontface\\":\\"\\",\\"h6-fontstyle\\":\\"\\",\\"h6-weight\\":\\"400\\",\\"h6-style\\":\\"normal\\",\\"h6-fontsize\\":\\"\\",\\"h6-lineheight\\":\\"\\",\\"h6-color\\":\\"\\",\\"p-fontface\\":\\"Oswald\\",\\"p-fontstyle\\":\\"regular\\",\\"p-weight\\":\\"400\\",\\"p-style\\":\\"normal\\",\\"p-fontsize\\":\\"13\\",\\"p-lineheight\\":\\"\\",\\"p-color\\":\\"#ufc2\\",\\"a-fontface\\":\\"Oswald\\",\\"a-fontstyle\\":\\"regular\\",\\"a-weight\\":\\"400\\",\\"a-style\\":\\"normal\\",\\"a-fontsize\\":\\"13\\",\\"a-lineheight\\":\\"2\\",\\"a-color\\":\\"#ufc5\\",\\"a-hover-fontface\\":\\"Oswald\\",\\"a-hover-fontstyle\\":\\"regular\\",\\"a-hover-weight\\":\\"400\\",\\"a-hover-style\\":\\"normal\\",\\"a-hover-fontsize\\":\\"13\\",\\"a-hover-lineheight\\":\\"2\\",\\"a-hover-color\\":\\"#ufc2\\",\\"ul-fontface\\":\\"\\",\\"ul-fontstyle\\":\\"\\",\\"ul-weight\\":\\"400\\",\\"ul-style\\":\\"normal\\",\\"ul-fontsize\\":\\"\\",\\"ul-lineheight\\":\\"\\",\\"ul-color\\":\\"\\",\\"ol-fontface\\":\\"\\",\\"ol-fontstyle\\":\\"\\",\\"ol-weight\\":\\"400\\",\\"ol-style\\":\\"normal\\",\\"ol-fontsize\\":\\"\\",\\"ol-lineheight\\":\\"\\",\\"ol-color\\":\\"\\",\\"blockquote-fontface\\":\\"\\",\\"blockquote-fontstyle\\":\\"\\",\\"blockquote-weight\\":\\"400\\",\\"blockquote-style\\":\\"normal\\",\\"blockquote-fontsize\\":\\"\\",\\"blockquote-lineheight\\":\\"\\",\\"blockquote-color\\":\\"\\",\\"blockquote-alternative-fontface\\":\\"\\",\\"blockquote-alternative-fontstyle\\":\\"\\",\\"blockquote-alternative-weight\\":\\"400\\",\\"blockquote-alternative-style\\":\\"normal\\",\\"blockquote-alternative-fontsize\\":\\"\\",\\"blockquote-alternative-lineheight\\":\\"\\",\\"blockquote-alternative-color\\":\\"\\",\\"static-element-type\\":\\"a-hover\\"}]',
	'image_presets' => '[{\\"image-style\\":\\"default\\",\\"useradius\\":\\"\\",\\"borderradiuslock\\":\\"yes\\",\\"borderradius1\\":\\"5\\",\\"borderradius2\\":\\"5\\",\\"borderradius3\\":\\"5\\",\\"borderradius4\\":\\"5\\",\\"useborder\\":\\"\\",\\"bordertype\\":\\"solid\\",\\"borderwidth\\":\\"1\\",\\"bordercolor\\":\\"rgb(0, 0, 0)\\",\\"caption-text\\":\\"rgba(0, 0, 0, 0.9)\\",\\"caption-bg\\":\\"rgba(255, 255, 255, 0.8)\\",\\"caption-position-value\\":\\"bottomOver\\",\\"caption-trigger\\":\\"always_show\\",\\"caption-position\\":\\"over_image\\",\\"caption-alignment\\":\\"bottom\\",\\"id\\":\\"default\\",\\"name\\":\\"default\\",\\"preset_style\\":\\"\\",\\"migrated\\":\\"true\\",\\"theme_preset\\":\\"true\\"},{\\"image-style\\":\\"default\\",\\"useradius\\":\\"yes\\",\\"borderradiuslock\\":\\"yes\\",\\"borderradius1\\":\\"100\\",\\"borderradius2\\":\\"100\\",\\"borderradius3\\":\\"100\\",\\"borderradius4\\":\\"100\\",\\"bordertype\\":\\"solid\\",\\"borderwidth\\":\\"1\\",\\"bordercolor\\":\\"rgb(0, 0, 0)\\",\\"caption-text\\":\\"rgba(0, 0, 0, 0.9)\\",\\"caption-bg\\":\\"rgba(255, 255, 255, 0.8)\\",\\"caption-position-value\\":\\"bottomOver\\",\\"caption-trigger\\":\\"always_show\\",\\"caption-position\\":\\"over_image\\",\\"caption-alignment\\":\\"bottom\\",\\"id\\":\\"circle-image\\",\\"name\\":\\"circle image\\",\\"imagestyle\\":\\"square\\",\\"radius\\":\\"100\\",\\"radius_number\\":\\"100\\",\\"theme_preset\\":\\"true\\"}]',
	'posts_presets' => '[{\\"id\\":\\"archive\\",\\"name\\":\\"archive\\",\\"preset_style\\":\\"#page .archive.uposts-object ul {@n    margin-left: 0;@n}@n#page .archive.uposts-object li {@n    margin-bottom: 30px;@n}@n#page .archive.uposts-object li:last-child {@n    margin-bottom: 0;@n}@n#page .archive.uposts-object li > article {@n    overflow: hidden;@n}@n#page .archive.uposts-object li .date_posted {@n    float: right;@n    margin: 0;@n}@n#page .archive.uposts-object li .date_posted .date {@n    display: block;@n    color: #a89084;@n    line-height: 35px;@n    font-family: \\\\\\\\\\\\\\"Oswald\\\\\\\\\\\\\\";@n    font-weight: 400;@n    font-style: normal;@n    text-align: center;@n    text-transform: uppercase;@n}@n#page .archive.uposts-object li .date_posted .date-day {@n    margin-top: 3px;@n    font-size: 30px;@n    font-weight: 300;@n    letter-spacing: 0;@n}@n#page .archive.uposts-object li .date_posted .date-month {@n    margin-top: -5px;@n    font-size: 13px;@n    font-weight: 300;@n    letter-spacing: 0;@n}@n#page .archive.uposts-object li .author {@n    position: relative;@n    margin-bottom: 10px;@n}@n#page .archive.uposts-object li .author:after {@n    content: \\\\\\\\\\\\\\"\\\\\\\\\\\\\\";@n    width: 100%;@n    height: 1px;@n    display: block;@n    margin: 15px 0 0;@n    background: #e2ded5;@n}@n#page .archive.uposts-object li .author, #page .archive.uposts-object li .author a {@n    margin-top: -10px;@n    color: #a89084;@n    font-size: 15px;@n    line-height: 25px;@n    font-family: \\\\\\\\\\\\\\"Oswald\\\\\\\\\\\\\\";@n    font-weight: 300;@n    text-transform: uppercase;@n    letter-spacing: 0.5px;@n}@n#page .archive.uposts-object li .author a:hover {@n    color: #333333;@n}@n#page .archive.uposts-object li .content {@n    margin-bottom: 10px;@n}@n#page .archive.uposts-object li .content p {@n    font-size: 15px;@n    line-height: 25px;@n}@n#page .archive.uposts-object li .content p:last-child {@n    margin-bottom: 0;@n}@n#page .archive.uposts-object li .read_more {@n    margin: 0;@n}@n#page .archive.uposts-object li .read_more a {@n    font-size: 14px;@n    line-height: 25px;@n}@n#page .archive.uposts-object li .thumbnail {@n    max-height: 250px;@n    position: relative;@n}@n#page .archive.uposts-object li .thumbnail:after {@n    content: \\\\\\\\\\\\\\"\\\\\\\\\\\\\\";@n    width: 100%;@n    height: 100%;@n    display: block;@n    position: absolute;@n    top: 0;@n    right: 0;@n    bottom: 0;@n    left: 0;@n    margin: auto;@n    background-color: #ffffff;@n    opacity: 0;@n    pointer-events: none;@n    transition: opacity 0.2s;@n    -ms-transition: opacity 0.2s;@n    -moz-transition: opacity 0.2s;@n    -webkit-transition: opacity 0.2s;@n}@n#page .archive.uposts-object li .thumbnail:hover:after {@n    opacity: 0.2;@n}@n#page .archive.uposts-object li .title, #page .archive.uposts-object li .title a {@n    color: #333333;@n    font-size: 25px;@n    line-height: 1.3em;@n    font-weight: 700;@n    letter-spacing: -0.2px;@n    text-transform: uppercase;@n}@n#page .archive.uposts-object li .title a:hover {@n    color: #666666;@n}@n#page .archive .uf-pagination {@n    overflow: hidden;@n    margin: 60px 15px 0;@n    padding-top: 20px;@n    text-align: center;@n}@n#page .archive .uf-pagination .page-numbers {@n    width: 40px;@n    height: 40px;@n    display: inline-block;@n    color: #666666;@n    line-height: 39px;@n    font-family: \\\\\\\\\\\\\\"Open Sans\\\\\\\\\\\\\\";@n    font-style: normal;@n    font-weight: 300;@n}@n#page .archive .uf-pagination .page-numbers:hover {@n    border: 2px solid #e1e3de;@n    border-radius: 50%;@n    -moz-border-radius: 50%;@n    -webkit-border-radius: 50%;@n    color: #a89084;@n}@n#page .archive .uf-pagination .page-numbers.current {@n    border: 2px solid #69a8a6;@n    border-radius: 50%;@n    -moz-border-radius: 50%;@n    -webkit-border-radius: 50%;@n    color: #69a8a6;@n}@n#page .archive .uf-pagination .prev.page-numbers, #page .archive .uf-pagination .next.page-numbers {@n    width: auto;@n    height: auto;@n    margin: 10px 0 0;@n    line-height: 25px;@n    font-weight: 400;@n}@n#page .archive .uf-pagination .prev.page-numbers:hover, #page .archive .uf-pagination .next.page-numbers:hover, #page .archive .uf-pagination .page-numbers.dots:hover {@n    padding-top: 0;@n    border: 0;@n    border-radius: none;@n    -moz-border-radius: none;@n    -webkit-border-radius: none;@n    color: #a89084;@n}@n#page .archive .uf-pagination .prev.page-numbers {@n    float: left;@n}@n#page .archive .uf-pagination .next.page-numbers {@n    float: right;@n}@n\\",\\"theme_preset\\":\\"true\\"}]',
);