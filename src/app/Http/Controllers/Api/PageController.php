<?php

namespace Backpack\Pages\app\Http\Controllers\Api;

use Illuminate\Http\Request;
use \Illuminate\Database\Eloquent\ModelNotFoundException;

use Backpack\Pages\app\Models\Page;

class PageController extends \App\Http\Controllers\Controller
{ 

  protected $large_resource;

  function __construct() {
    $this->large_resource = config('parabellumkoval.pages.resource.large', 'Backpack\Pages\app\Http\Resources\PageLargeResource');
  }

  public function show(Request $request, $slug_or_template) {
    try{
      $article = Page::active()
                    ->where('slug', $slug_or_template)
                    ->orWhere('template', $slug_or_template)
                    ->firstOrFail();

    }catch(ModelNotFoundException $e) {
      return response()->json($e->getMessage(), 404);
    }

    return new $this->large_resource($article);
  }

}
