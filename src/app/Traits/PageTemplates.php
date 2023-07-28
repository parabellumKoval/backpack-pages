<?php

namespace Backpack\Pages\app\Traits;

trait PageTemplates
{
    /*
    |--------------------------------------------------------------------------
    | Page Templates for Backpack\PageManager
    |--------------------------------------------------------------------------
    |
    | Each page template has its own method, that define what fields should show up using the Backpack\CRUD API.
    | Use snake_case for naming and PageManager will make sure it looks pretty in the create/update form
    | template dropdown.
    |
    | Any fields defined here will show up after the standard page fields:
    | - select template
    | - page name (only seen by admins)
    | - page title
    | - page slug
    */

    private function services()
    {
        $this->crud->addField([   // CustomHTML
            'name' => 'metas_separator',
            'type' => 'custom_html',
            'value' => '<br><h2>'.trans('pages.metas').'</h2><hr>',
        ]);
        $this->crud->addField([
            'name' => 'meta_title',
            'label' => trans('pages.meta_title'),
            'fake' => true,
            'store_in' => 'seo',
        ]);
        $this->crud->addField([
            'name' => 'meta_description',
            'label' => trans('pages.meta_description'),
            'fake' => true,
            'store_in' => 'seo',
        ]);
        $this->crud->addField([   // CustomHTML
            'name' => 'content_separator',
            'type' => 'custom_html',
            'value' => '<br><h2>'.trans('pages.content').'</h2><hr>',
        ]);
        $this->crud->addField([
            'name' => 'content',
            'label' => trans('pages.content'),
            'type' => 'summernote',
            'placeholder' => trans('pages.content_placeholder'),
        ]);
    }

    private function about_us()
    {
        $this->crud->addField([
            'name' => 'content',
            'label' => trans('pages.content'),
            'type' => 'summernote',
            'placeholder' => trans('pages.content_placeholder'),
        ]);
    }
}