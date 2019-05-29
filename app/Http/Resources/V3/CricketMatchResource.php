<?php

namespace App\Http\Resources\V3;

use Illuminate\Http\Resources\Json\JsonResource;

class CricketMatchResource extends JsonResource
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
            'start_date' => $this->start_date,
            'start_time' => $this->start_time,
            'team_a' => new CricketTeamResource($this->teamA),
            'team_b' => new CricketTeamResource($this->teamB),
            'stadium' => new CricketStadiumResource($this->stadium),
        ];
    }
}
