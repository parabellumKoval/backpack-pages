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
		    'template' => $this->template,
		    'is_active' => $this->is_active,
		    'extras' => $this->extras,
        'seo' => $this->seo
      ];
    }
}
