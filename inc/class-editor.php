<?php
namespace Theme;
if (!defined('ABSPATH')) {
  exit;
}

class Editor
{
  public static function init()
  {
    add_filter('tiny_mce_before_init', [self::class, 'insert_custom_formats']);
    add_filter('acf/fields/wysiwyg/toolbars', [self::class, 'acf_custom_toolbar']);
  }

  public static function insert_custom_formats($init_array)
  {
    $style_formats = [
      [
        'title' => 'Heading 1',
        'classes' => 'h1',
        'selector' => 'h1,h2,h3,h4,h5,h6,p,li',
        'wrapper' => false,
      ],
      [
        'title' => 'Heading 2',
        'classes' => 'h2',
        'selector' => 'h1,h2,h3,h4,h5,h6,p,li',
        'wrapper' => false,
      ],
      [
        'title' => 'Heading 3',
        'classes' => 'h3',
        'selector' => 'h1,h2,h3,h4,h5,h6,p,li',
        'wrapper' => false,
      ],
      [
        'title' => 'Heading 4',
        'classes' => 'h4',
        'selector' => 'h1,h2,h3,h4,h5,h6,p,li',
        'wrapper' => false,
      ],
      [
        'title' => 'Heading 5',
        'classes' => 'h5',
        'selector' => 'h1,h2,h3,h4,h5,h6,p,li',
        'wrapper' => false,
      ],
      [
        'title' => 'Heading 6',
        'classes' => 'h6',
        'selector' => 'h1,h2,h3,h4,h5,h6,p,li',
        'wrapper' => false,
      ],
      [
        'title' => 'Primary button',
        'classes' => 'button button_primary',
        'selector' => 'a',
        'wrapper' => false,
      ],
      [
        'title' => 'Secondary button',
        'classes' => 'button button_secondary',
        'selector' => 'a',
        'wrapper' => false,
      ],
    ];
    $init_array['style_formats'] = json_encode($style_formats);
    return $init_array;
  }

  public static function acf_custom_toolbar($toolbars)
  {
    $toolbars['Full'][1][] = 'styleselect';
    return $toolbars;
  }
}