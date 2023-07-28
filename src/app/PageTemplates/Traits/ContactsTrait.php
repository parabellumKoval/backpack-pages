<?php

namespace App\PageTemplates\Traits;

trait ContactsTrait
{
  private static function contacts($crud)
  {
    $crud->addField([
      'name' => 'content_1',
      'label' => 'Текст',
      'type' => 'ckeditor',
      'placeholder' => 'Текст',
      'fake' => true,
      'store_in' => 'extras',
      'tab' => 'Основное',
    ]);
  }
}