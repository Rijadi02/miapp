<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "slug" => $this->slug,
            "name" => $this->name,
            "description" => $this->description,
            "city" => $this->city,
            "photo" => $this->photo,
            "gallery" => $this->gallery,
            "address" => $this->address,
            "phone" => $this->phone,
            "tags" => $this->tags,
            "media" => $this->media,
            "linku" => route('ad',$this->slug),
        ];
    }
}
