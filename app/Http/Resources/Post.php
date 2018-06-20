<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Post extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'author_id' =>  $this->author_id,
            'category_id' =>  $this->category_id,
            'title' => $this->title,
            'seo_title' => $this->seo_title,
            'excerpt' => $this->excerpt,
            'body' => $this->body,
            'image' => $this->image,
            'slug' => $this->slug,
            'meta_description' => $this->meta_description,
            'meta_keywords' => $this->meta_keywords,
            'status' => $this->status,
            'featured' => $this->featured,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
