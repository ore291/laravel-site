<?php

namespace Modules\Predictions\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class PredictionResource extends JsonResource
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
            'league_name' => $this->country,
            'team_a'    => $this->team_a,
            'team_b' => $this->team_b,
            'tips' => $this->tips,
            'odds' => $this->odds,
            'date_t' => $this->date_t,
            'time_t' => $this->time_t,
            'score_a' => $this->score_a,
            'score_b' => $this->score_b,
            'logo' => $this->emblem,
            'sport_name'    =>  $this->sport_name,
            'category' => $this->cat,
            'league' => $this->leag,
            'status' => $this->status
        ];
    }
}
