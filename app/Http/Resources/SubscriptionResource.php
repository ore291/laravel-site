<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SubscriptionResource extends JsonResource
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
            'plan_name' => $this->name,
            "plan_id" => $this->plan_id,
            'email' => $this->email,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            "updated_at => $this->updated_at"
            
           
        ];
    }
}
