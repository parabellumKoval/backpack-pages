<?php

namespace App\PageTemplates\Traits;

trait AboutUsTrait
{
  private static function about_us($crud)
  {
                           
    // Block 1
    $crud->addField([
      'name' => 'text_separator_1',
      'type' => 'custom_html',
      'value' => '<br><h4>Первый блок</h4><hr>',
      'tab' => 'Основное',
    ]);

    $crud->addField([
      'name' => 'title_1',
      'label' => 'Заголовок',
      'fake' => true,
      'store_in' => 'extras',
      'tab' => 'Основное',
    ]);

    $crud->addField([
      'name' => 'text_1',
      'label' => 'Текст',
      'type' => 'ckeditor',
      'placeholder' => 'Текст',
      'fake' => true,
      'store_in' => 'extras',
      'attributes' => [
        'rows' => 8
      ],
      'tab' => 'Основное',
    ]);

    $crud->addField([
      'name' => 'q_1',
      'label' => 'Цитата',
      'type' => 'ckeditor',
      'fake' => true,
      'store_in' => 'extras',
      'tab' => 'Основное',
    ]);
      
    
    // Block 2
    $crud->addField([
      'name' => 'text_separator_2',
      'type' => 'custom_html',
      'value' => '<br><h4>Второй блок</h4><hr>',
      'tab' => 'Основное',
    ]);

    $crud->addField([
      'name' => 'title_2',
      'label' => 'Заголовок',
      'fake' => true,
      'store_in' => 'extras',
      'tab' => 'Основное',
    ]);

    $crud->addField([
        'name' => 'text_2',
        'label' => 'Текст',
        'type' => 'ckeditor',
        'placeholder' => 'Текст',
        'fake' => true,
        'store_in' => 'extras',
        'attributes' => [
            'rows' => 8
        ],
        'tab' => 'Основное',
    ]);

    // Block 3
    $crud->addField([
        'name' => 'text_separator_3',
        'type' => 'custom_html',
        'value' => '<br><h4>Третий блок</h4><hr>',
        'tab' => 'Основное',
    ]);

    $crud->addField([
        'name' => 'text_3',
        'label' => 'Текст',
        'type' => 'ckeditor',
        'placeholder' => 'Текст',
        'fake' => true,
        'store_in' => 'extras',
        'attributes' => [
            'rows' => 8
        ],
        'tab' => 'Основное',
    ]);
  }
}