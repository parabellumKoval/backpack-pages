<?php

namespace App\PageTemplates\Traits;

trait HomeTrait
{
  private static function home($crud)
  {

    // ABOUT KRATOM
    $crud->addField([
        'name' => 'content_separator_1',
        'type' => 'custom_html',
        'value' => '<br><h4>О нашем кратоме</h4><hr>',
        'tab' => 'Основное',
    ]);  

    $crud->addField([
        'name' => 'about_title',
        'label' => 'Заголовок',
        'fake' => true,
        'store_in' => 'extras',
        'tab' => 'Основное',
    ]);

    $crud->addField([
        'name' => 'about_text',
        'label' => 'Текст',
        'type' => 'ckeditor',
        'fake' => true,
        'store_in' => 'extras',
        'tab' => 'Основное',
    ]);

    // KRATOM TYPES
    $crud->addField([
        'name' => 'content_separator_2',
        'type' => 'custom_html',
        'value' => '<br><h4>Типы кратома</h4><hr>',
        'tab' => 'Основное',
    ]);  

    $crud->addField([
        'name' => 'types_title',
        'label' => 'Заголовок',
        'fake' => true,
        'store_in' => 'extras',
        'tab' => 'Основное',
    ]);

    $crud->addField([
        'name' => 'types_text',
        'label' => 'Подзаголовок',
        'type' => 'ckeditor',
        'fake' => true,
        'store_in' => 'extras',
        'tab' => 'Основное',
    ]);

    $crud->addField([
        'name' => 'types_items',
        'label' => 'Типы',
        'type'  => 'repeatable',
        'fake' => true,
        'store_in' => 'extras',
        'tab' => 'Основное',
        'fields' => [
          [
              'name'    => 'image',
              'type'    => 'browse',
              'label'   => 'Картинка',
          ],
          [
              'name'    => 'title',
              'type'    => 'text',
              'label'   => 'Название',
          ],
          [
              'name'    => 'text',
              'type'    => 'ckeditor',
              'label'   => 'Position',
          ],
      ],
    ]);

    // Our advantages
    $crud->addField([
      'name' => 'content_separator_3',
      'type' => 'custom_html',
      'value' => '<br><h4>Наши преимущества</h4><hr>',
      'tab' => 'Основное',
    ]);

    $crud->addField([
        'name' => 'advantages_title',
        'label' => 'Заголовок',
        'fake' => true,
        'store_in' => 'extras',
        'tab' => 'Основное',
    ]);

    $crud->addField([
        'name' => 'advantages_items',
        'label' => 'Типы',
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
              'label'   => 'Название',
          ],
          [
              'name'    => 'text',
              'type'    => 'ckeditor',
              'label'   => 'Position',
          ],
      ],
    ]);


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