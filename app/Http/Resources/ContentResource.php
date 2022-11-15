<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContentResource extends JsonResource
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
            'title' =>  $this->title,
            'number' =>  $this->number,
            'content' =>  $this->content,
            'transliteration' => $this->transliteration,
            'arabic' =>  $this->arabic,
            'reference' =>  $this->reference,
            'hadith' =>  $this->hadith,
            'audio' =>  $this->audio,
        ];
    }
}
