<?php

namespace Backpack\Pages\app\Http\Controllers\Api;

use Illuminate\Http\Request;
use \Illuminate\Database\Eloquent\ModelNotFoundException;

use Backpack\Pages\app\Models\Page;
use Backpack\Pages\app\Http\Resources\PageSmallResource;

class PageController extends \App\Http\Controllers\Controller
{ 

  protected $large_resource;

  function __construct() {
    $this->large_resource = config('backpack.pages.resource.large', 'Backpack\Pages\app\Http\Resources\ArticleLargeResource');
  }

  public function show(Request $request, $slug) {
    try{
      $article = Page::published()->where('slug', $slug)->firstOrFail();
    }catch(ModelNotFoundException $e) {
      return response()->json($e->getMessage(), 404);
    }

    return new $this->large_resource($article);
  }

  public function random(Request $request) {
    $limit = request('limit') ?? 4;
    
    $pages = Page::published()
                  ->when(request('not_id'), function($query) {
                    $query->where('id', '!=', request('not_id'));
                  })
                  ->inRandomOrder()
                  ->limit($limit)
                  ->get();

    $pages = $this->small_resource::collection($pages);

    return $pages;
  }

}
