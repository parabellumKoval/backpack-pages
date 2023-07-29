<?php

namespace App\PageTemplates;

use App\PageTemplates\Traits\HomeTrait;

class Template {

  use HomeTrait;

  public static $templates = [
    'common' => 'Общий',
    'home' => 'Главная страница'
  ];

  public static function useTemplate($name, $crud) {
    self::{$name}($crud);
  }

  private static function common($crud)
  {
      $crud->addField([
        'name' => 'content',
        'label' => trans('pages.content'),
        'type' => 'ckeditor',
        'placeholder' => trans('pages.content_placeholder'),
        'fake' => true,
        'store_in' => 'extras',
        'tab' => 'Основное',
      ]);
  }
}