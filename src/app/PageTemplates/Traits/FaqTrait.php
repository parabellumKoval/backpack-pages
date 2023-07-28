<?php

namespace App\PageTemplates\Traits;

trait FaqTrait
{
  private static function faq($crud)
  {

    $crud->addField([
        'name' => 'text',
        'label' => 'Подзаголовок',
        'type' => 'ckeditor',
        'fake' => true,
        'store_in' => 'extras',
        'tab' => 'Основное',
    ]);

    $crud->addField([
        'name' => 'items',
        'label' => 'Вопросы и Ответы',
        'type'  => 'repeatable',
        'fake' => true,
        'store_in' => 'extras',
        'tab' => 'Основное',
        'fields' => [
          [
              'name'    => 'q',
              'type'    => 'text',
              'label'   => 'Вопрос',
          ],
          [
              'name'    => 'a',
              'type'    => 'ckeditor',
              'label'   => 'Ответ',
          ],
      ],
    ]);
  }
}