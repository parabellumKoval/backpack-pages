<?php

namespace Backpack\Pages\app\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PageLargeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      return [
		    'id' => $this->id,
		    'title' => $this->title,
		    'slug' => $this->slug,
		    'excerpt' => $this->excerpt,
		    'content' => $this->content,
		    'image' => $this->image,
        'seo' => $this->seo
      ];
    }
}
