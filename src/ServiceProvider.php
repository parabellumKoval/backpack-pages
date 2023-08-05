<?php

namespace Backpack\Pages;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/config/pages.php';

    public function boot()
    {
      // Translations
      $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'ak_pages');

      $this->publishes([
          __DIR__.'/resources/lang' => resource_path('lang/vendor/parabellumkoval'),
      ], 'trans');
    
	    // Migrations
	    $this->loadMigrationsFrom(__DIR__.'/database/migrations');
  
      $this->publishes([
          __DIR__.'/database/migrations' => resource_path('database/migrations'),
      ], 'migrations');
	    
	    // Routes
    	$this->loadRoutesFrom(__DIR__.'/routes/backpack/routes.php');
    	$this->loadRoutesFrom(__DIR__.'/routes/api/pages.php');
  
      $this->publishes([
          __DIR__.'/routes/backpack/routes.php' => resource_path('/routes/backpack/pages/backpack.php'),
          __DIR__.'/routes/api/pages.php' => resource_path('/routes/backpack/pages/pages.php'),
      ], 'routes');

		  // Config
      $this->publishes([
        self::CONFIG_PATH => config_path('/parabellumkoval/pages.php'),
      ], 'config');
      
      // Views
      $this->loadViewsFrom(__DIR__.'/resources/views/vendor/backpack', 'backpack-pages');
      
      $this->publishes([
          __DIR__.'/resources/views' => resource_path('views'),
      ], 'views');

      // stub
      $this->publishes([
        __DIR__.'/app/Http/Controllers/Admin/Stubs' => base_path('app/Http/Controllers/Admin/Crud'),
      ], 'stub');

      // template
      $this->publishes([
        __DIR__.'/app/PageTemplates' => base_path('app/PageTemplates'),
      ], 'temps');

    }

    public function register()
    {
      // Apply package local config
      $this->mergeConfigFrom(__DIR__.'/config/pages.php', 'parabellumkoval.pages');
    }
}
