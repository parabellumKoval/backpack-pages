<?php

namespace App\PageTemplates\Traits;

trait HomeTrait
{
  private static function home($crud)
  {

    // Seo
    $crud->addField([
      'name' => 'content_separator_4',
      'type' => 'custom_html',
      'value' => '<br><h4>Seo</h4><hr>',
      'tab' => 'Основное',
    ]);
      
    $crud->addField([
        'name' => 'seo_title',
        'label' => 'Заголовок',
        'fake' => true,
        'store_in' => 'extras',
        'tab' => 'Основное',
    ]);  
      
    $crud->addField([
        'name' => 'seo_text',
        'label' => 'Текст',
        'type' => 'ckeditor',
        'fake' => true,
        'store_in' => 'extras',
        'tab' => 'Основное',
    ]);  

  }
}