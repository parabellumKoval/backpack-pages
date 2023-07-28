<?php

namespace App\PageTemplates;

use App\PageTemplates\Traits\HomeTrait;
use App\PageTemplates\Traits\AdvantagesTrait;
use App\PageTemplates\Traits\AboutUsTrait;
use App\PageTemplates\Traits\RewardsTrait;
use App\PageTemplates\Traits\ContactsTrait;
use App\PageTemplates\Traits\FaqTrait;

class Template {

  use HomeTrait;
  use AdvantagesTrait;
  use AboutUsTrait;
  use RewardsTrait;
  use ContactsTrait;
  use FaqTrait;

  public static $templates = [
    'common' => 'Общий',
    'home' => 'Главная страница',
    'advantages' => 'Преимущества',
    'about_us' => 'О Нас',
    'rewards' => 'Зарабатывайте с нами',
    'contacts' => 'Контакты',
    'faq' => 'Вопрос-ответ'
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
        'tab' => 'Основное',
      ]);
  }
}