<?php

namespace App\Http\Controllers\Admin\Crud;

use Backpack\Pages\app\Interfaces\PageCrudInterface;

class PageCrudExtended implements PageCrudInterface {
  
  // Extends of SetupCreateOperation
  public static function setupCreateOperation($crud) {}

  // Extends of setupUpdateOperation
  public static function setupUpdateOperation($crud){}

  // Extends of setupListOperation
  public static function setupListOperation($crud){}

}