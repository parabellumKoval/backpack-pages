<?php

namespace App\PageTemplates\Traits;

trait RewardsTrait
{
  private static function rewards($crud)
  {
    $crud->addField([   // CustomHTML
          'name' => 'content_separator_0',
          'type' => 'custom_html',
          'value' => '<br><h2>SEO</h2><hr>',
          'tab' => 'Основное',
      ]);
            
                  
      // Compensation
                  
      $crud->addField([   // CustomHTML
          'name' => 'content_separator_1',
          'type' => 'custom_html',
          'value' => '<br><h2>Compensation</h2><hr>',
          'tab' => 'Основное',
      ]);
      
      $crud->addField([
          'name' => 'compensation_mt_1',
          'label' => 'Compensation main title',
          'fake' => true,
          'store_in' => 'extras',
          'tab' => 'Основное',
      ]);
      $crud->addField([
          'name' => 'compensation_t_1',
          'label' => 'Compensation title 1',
          'fake' => true,
          'store_in' => 'extras',
          'tab' => 'Основное',
      ]);
      $crud->addField([
          'name' => 'compensation_c_1',
          'label' => 'Compensation content 1',
          'type' => 'wysiwyg',
          'fake' => true,
          'store_in' => 'extras',
          'tab' => 'Основное',
      ]);
      
      $crud->addField([
          'name' => 'compensation_t_2',
          'label' => 'Compensation title 2',
          'fake' => true,
          'store_in' => 'extras',
          'tab' => 'Основное',
      ]);
      $crud->addField([
          'name' => 'compensation_c_2',
          'label' => 'Compensation content 2',
          'type' => 'wysiwyg',
          'fake' => true,
          'store_in' => 'extras',
          'tab' => 'Основное',
      ]);
      
      $crud->addField([
          'name' => 'compensation_t_3',
          'label' => 'Compensation title 3',
          'fake' => true,
          'store_in' => 'extras',
          'tab' => 'Основное',
      ]);
      $crud->addField([
          'name' => 'compensation_c_3',
          'label' => 'Compensation content 3',
          'type' => 'wysiwyg',
          'fake' => true,
          'store_in' => 'extras',
          'tab' => 'Основное',
      ]);
      
      // Partner Program
      $crud->addField([   // CustomHTML
          'name' => 'content_separator_2',
          'type' => 'custom_html',
          'value' => '<br><h2>Partner Program</h2><hr>',
          'tab' => 'Основное',
      ]);
      $crud->addField([
          'name' => 'program_mt_1',
          'label' => 'Program main title',
          'fake' => true,
          'store_in' => 'extras',
          'tab' => 'Основное',
      ]);
      $crud->addField([
          'name' => 'partner_program_info',
          'label' => 'Partner Program info',
          'type' => 'wysiwyg',
          'fake' => true,
          'store_in' => 'extras',
          'tab' => 'Основное',
      ]);
      
      // How it works?
      $crud->addField([   // CustomHTML
          'name' => 'content_separator_3',
          'type' => 'custom_html',
          'value' => '<br><h2>How it works?</h2><hr>',
          'tab' => 'Основное',
      ]);
      
      $crud->addField([
          'name' => 'htw_mt_1',
          'label' => 'How it works main title',
          'fake' => true,
          'store_in' => 'extras',
          'tab' => 'Основное',
      ]);
      $crud->addField([
          'name' => 'program_t_1',
          'label' => 'Program title 1',
          'fake' => true,
          'store_in' => 'extras',
          'tab' => 'Основное',
      ]);
      $crud->addField([
          'name' => 'program_c_1',
          'label' => 'Program content 1',
          'type' => 'wysiwyg',
          'fake' => true,
          'store_in' => 'extras',
          'tab' => 'Основное',
      ]);
      
      $crud->addField([
          'name' => 'program_t_2',
          'label' => 'Program title 2',
          'fake' => true,
          'store_in' => 'extras',
          'tab' => 'Основное',
      ]);
      $crud->addField([
          'name' => 'program_c_2',
          'label' => 'Program content 2',
          'type' => 'wysiwyg',
          'fake' => true,
          'store_in' => 'extras',
          'tab' => 'Основное',
      ]);
      
      $crud->addField([
          'name' => 'program_t_3',
          'label' => 'Program title 3',
          'fake' => true,
          'store_in' => 'extras',
          'tab' => 'Основное',
      ]);
      $crud->addField([
          'name' => 'program_c_3',
          'label' => 'Program content 3',
          'type' => 'wysiwyg',
          'fake' => true,
          'store_in' => 'extras',
          'tab' => 'Основное',
      ]);
      
      $crud->addField([
          'name' => 'htw_info',
          'label' => 'How it works info',
          'type' => 'wysiwyg',
          'fake' => true,
          'store_in' => 'extras',
          'tab' => 'Основное',
      ]);
      
      
  }
}