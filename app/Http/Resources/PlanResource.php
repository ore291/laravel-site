<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Akaunting\Money\Money;

class PlanResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'n_weekly_f' => Money::NGN($this->n_weekly, true)->format(),
            'n_per_month_f' => Money::NGN($this->n_per_month, true)->format(),
            'n_per_6months_f' => Money::NGN($this->n_per_6months, true)->format(),
            'n_per_year_f' => Money::NGN($this->n_per_year, true)->format(),
            'k_per_month_f' => Money::KES($this->k_per_month, true)->format(),
            'k_per_6months_f' => Money::KES($this->k_per_6months, true)->format(),
            'k_per_year_f' => Money::KES($this->k_per_year, true)->format(),
            'd_per_month_f' => Money::USD($this->d_per_month, true)->format(),
            'd_per_6months_f' => Money::USD($this->d_per_6months, true)->format(),
            'd_per_year_f' => Money::USD($this->d_per_year, true)->format(),
            'n_weekly' => $this->n_weekly,
            'n_per_month' => $this->n_per_month,
            'n_per_6months' => $this->n_per_6months,
            'n_per_year' => $this->n_per_year,
            'k_per_month' => $this->k_per_month,
            'k_per_6months' => $this->k_per_6months,
            'k_per_year' => $this->k_per_year,
            'd_per_month' => $this->d_per_month,
            'd_per_6months' => $this->d_per_6months,
            'd_per_year' => $this->d_per_year,
            'content' => $this->content,
            'n_only' => $this->n_only,
            'sms_plan' => $this->sms_plan,




        ];
    }
}
