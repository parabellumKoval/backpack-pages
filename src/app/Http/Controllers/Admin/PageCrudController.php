<?php

namespace Backpack\Pages\app\Http\Controllers\Admin;

use Backpack\Pages\app\Http\Requests\PageRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;


use App\Http\Controllers\Admin\Crud\PageCrud;
use App\PageTemplates\Template;
use Backpack\Pages\app\Interfaces\PageCrudInterface;
// use PageCrud;

use Str;
/**
 * Class BannerCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class PageCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    
    public function setup()
    {
        $this->crud->setModel('Backpack\Pages\app\Models\Page');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/page');
        $this->crud->setEntityNameStrings('страница', 'cтраницы');
    }

    protected function setupListOperation()
    {   
      $this->crud->addColumn([
          'name' => 'title',
          'label' => trans('parabellumkoval::pages.name'),
      ]);
      
      $this->crud->addColumn([
          'name' => 'template',
          'label' => trans('parabellumkoval::pages.template'),
          'type' => 'model_function',
          'function_name' => 'getTemplateName',
      ]);

      $this->crud->addColumn([
          'name' => 'slug',
          'label' => trans('parabellumkoval::pages.slug'),
      ]);

      if($this->isPageCrudClass()){
        PageCrud::setupListOperation($this->crud);
      }
    }

    protected function setupCreateOperation()
    {
      // Note:
      // - default fields, that all templates are using, are set using $this->addDefaultPageFields();
      // - template-specific fields are set per-template, in the PageTemplates trait;

      $template = \Request::input('template') ?? 'common';

      $this->addDefaultPageFields(\Request::input('template'));
      $this->useTemplate($template);

      $this->crud->setValidation(PageRequest::class);

      if($this->isPageCrudClass()){
        PageCrud::setupCreateOperation($this->crud);
      }
    }

    protected function setupUpdateOperation()
    {
      // if the template in the GET parameter is missing, figure it out from the db
      $template = \Request::input('template') ?? $this->crud->getCurrentEntry()->template;

      $this->addDefaultPageFields($template);
      $this->useTemplate($template);

      $this->crud->setValidation(PageRequest::class);

      if($this->isPageCrudClass()){
        PageCrud::setupUpdateOperation($this->crud);
      }
    }

    // -----------------------------------------------
    // Methods that are particular to the PageManager.
    // -----------------------------------------------

    /**
     * Populate the create/update forms with basic fields, that all pages need.
     *
     * @param  string  $template  The name of the template that should be used in the current form.
     */
    public function addDefaultPageFields($template = false)
    {
      if($this->isTemplatesClass() && count($this->getTemplatesArray())){
        $this->crud->addField([
          'name' => 'template',
          'label' => trans('parabellumkoval::pages.template'),
          'type' => 'select_page_template',
          'view_namespace' => file_exists(resource_path('views/vendor/backpack/crud/fields/select_page_template.blade.php')) ? null : 'backpack-pages::crud.fields',
          'options' => $this->getTemplatesArray(),
          'value' => $template,
          'allows_null' => false,
          'tab' => 'Основное'
        ]);
      }

      $this->crud->addField([
        'name' => 'is_active',
        'label' => trans('parabellumkoval::pages.page_is_active'),
        'type' => 'checkbox',
        'tab' => 'Основное'
      ]);

      $this->crud->addField([
        'name' => 'title',
        'label' => trans('parabellumkoval::pages.page_title'),
        'type' => 'text',
        'tab' => 'Основное'
      ]);

      $this->crud->addField([
        'name' => 'slug',
        'label' => trans('parabellumkoval::pages.page_slug'),
        'type' => 'text',
        'hint' => trans('parabellumkoval::pages.page_slug_hint'),
        'tab' => 'Основное'
      ]);


      $this->crud->addField([
        'name' => 'meta_title',
        'label' => trans('parabellumkoval::pages.meta_title'),
        'fake' => true,
        'store_in' => 'seo',
        'tab' => 'SEO'
      ]);

      $this->crud->addField([
        'name' => 'meta_description',
        'label' => trans('parabellumkoval::pages.meta_description'),
        'type' => 'textarea',
        'fake' => true,
        'store_in' => 'seo',
        'tab' => 'SEO'
      ]);
    }

    /**
     * Add the fields defined for a specific template.
     *
     * @param  string  $template_name  The name of the template that should be used in the current form.
     */
    public function useTemplate($template_name = false)
    {
      if($this->isTemplatesClass()){
        Template::useTemplate($template_name, $this->crud);
      }
    }

    /**
     * Get all defined template as an array.
     *
     * Used to populate the template dropdown in the create/update forms.
     */
    public function getTemplatesArray()
    {
      if($this->isTemplatesClass()){
        return Template::$templates;
      }
    }


    public function isTemplatesClass() {
      return file_exists(base_path('/app/PageTemplates/Template.php')) && 
              class_exists('App\PageTemplates\Template');
    }

    public function isPageCrudClass() {
      return file_exists(base_path('/app/Http/Controllers/Admin/Crud/PageCrud.php')) && 
              class_exists('App\Http\Controllers\Admin\Crud\PageCrud') && 
              isset(class_implements(new PageCrud)['Backpack\Pages\app\Interfaces\PageCrudInterface']);
    }
}
