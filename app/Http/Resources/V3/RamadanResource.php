<?php

namespace App\Http\Resources\V3;

use Illuminate\Http\Resources\Json\JsonResource;

class RamadanResource extends JsonResource
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
            'date' => $this->date,
            'sehrTime' => $this->sehrTime,
            'fajrTime' => $this->fajrTime,
            'iftarTime' => $this->iftarTime,
            'areaCode' => $this->areaCode,

        ];
    }
}
