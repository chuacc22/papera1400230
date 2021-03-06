<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PartyResource extends Resource
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
            'id'=>$this->id,
            'name'=>$this->name,
            'party'=>CandidateResource::Collection($this->whenLoaded('candidates'))
        ];
    }
}
