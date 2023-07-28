<?php
namespace Backpack\Pages\app\Interfaces;

interface PageCrudInterface
{
  public static function setupCreateOperation($crud);
  public static function setupUpdateOperation($crud);
  public static function setupListOperation($crud);
}