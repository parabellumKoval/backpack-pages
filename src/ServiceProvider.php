<?php

namespace Backpack\Pages;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/config/pages.php';

    public function boot()
    {
      $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'pages');
    
	    // Migrations
	    $this->loadMigrationsFrom(__DIR__.'/database/migrations');
	    
	    // Routes
    	$this->loadRoutesFrom(__DIR__.'/routes/backpack/routes.php');
    	$this->loadRoutesFrom(__DIR__.'/routes/api/pages.php');
    
      $this->loadViewsFrom(realpath(__DIR__.'/resources/views/vendor/backpack/crud'), 'pagemanager');

		  // Config
      $this->publishes([
        self::CONFIG_PATH => config_path('/backpack/pages.php'),
      ], 'config');
      
      $this->publishes([
          __DIR__.'/resources/views' => resource_path('views'),
      ], 'views');

      // localizations
      $this->publishes([
          __DIR__.'/resources/lang' => resource_path('lang'),
      ], 'langs');
  
      $this->publishes([
          __DIR__.'/database/migrations' => resource_path('database/migrations'),
      ], 'migrations');
  
      $this->publishes([
          __DIR__.'/routes/backpack/routes.php' => resource_path('/routes/backpack/pages/backpack.php'),
          __DIR__.'/routes/api/pages.php' => resource_path('/routes/backpack/pages/pages.php'),
      ], 'routes');

      $this->publishes([
        __DIR__.'/app/Http/Controllers/Admin/Stubs' => base_path('app/Http/Controllers/Admin/Crud'),
      ], 'traits');

      // if(class_exists('App\Http\Controllers\Admin\Traits\PageCrud')){
      // dd('exist App\Http\Controllers\Admin\Traits\PageCrud');
      // }

      echo 'boot !!!';
      //App::bind('App\Http\Controllers\Admin\Traits\PageCrud', 'PageCrud');
    }

    public function register()
    {
    }
}
