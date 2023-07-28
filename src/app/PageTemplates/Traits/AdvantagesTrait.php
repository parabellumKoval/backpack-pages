<?php

namespace App\PageTemplates\Traits;

trait AdvantagesTrait
{
  private static function advantages($crud)
  {   
    $crud->addField([
      'name' => 'items',
      'label' => 'Преимущества',
      'type'  => 'repeatable',
      'fake' => true,
      'store_in' => 'extras',
      'tab' => 'Основное',
      'fields' => [
        [
            'name'    => 'icon',
            'type'    => 'browse',
            'label'   => 'Иконка (название иконки)',
            'hint'    => 'Подобрать иконку и узнать ее название можно тут: https://iconify.design/'
        ],
        [
            'name'    => 'title',
            'type'    => 'text',
            'label'   => 'Заголовок',
        ],
        [
            'name'    => 'text',
            'type'    => 'ckeditor',
            'label'   => 'Текст',
        ],
      ],
    ]); 
  }
}