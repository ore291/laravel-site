<?php

namespace App\Http\Resources;

use Exception;
use App\Models\Price;
use Akaunting\Money\Money;
use Akaunting\Money\Currency;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Http\Resources\Json\JsonResource;

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


        // $ip = '62.173.32.0'; //For static IP address get 
        $ip = request()->ip(); //Dynamic IP address get
        $location = \Location::get($ip);


        $countryName = $location->countryName ?? "Nigeria";




        $test1 = null;
        $test2 = null;
        $test3 = null;
        $price = null;

        if ($countryName == "Nigeria") {
            $test1 = null;
            $test2 = null;
            $test3 = null;
        } else {
            $price = Price::where('plan_id', $this->id)->where('country_name', $countryName)->first();
            if (isset($price)) {
                $test1 = new Money($price->monthly, new Currency($price->curr_code), true);
                $test2 = new Money($price['6months'], new Currency($price->curr_code), true);
                $test3 = new Money($price->yearly, new Currency($price->curr_code), true);
            }
        }



        if ($test1 != null) {
            $test1 = $test1->format();
            $test2 = $test2->format();
            $test3 = $test3->format();
        }


        $curr = "USD";



        return [
            'currency' => $price->curr_code ?? $curr,
            'id' => $this->id,
            'name' => $this->name,
            'n_weekly_f' => Money::NGN($this->n_weekly, true)->format(),
            'n_per_month_f' => Money::NGN($this->n_per_month, true)->format(),
            'n_per_6months_f' => Money::NGN($this->n_per_6months, true)->format(),
            'n_per_year_f' => Money::NGN($this->n_per_year, true)->format(),
            'k_per_month_f' => $test1 ?? 0,
            'k_per_6months_f' => $test2 ?? 0,
            'k_per_year_f' =>  $test3 ?? 0,
            'd_per_month_f' => $test1 ?? Money::USD($this->d_per_month, true)->format(),
            'd_per_6months_f' => $test1 ?? Money::USD($this->d_per_6months, true)->format(),
            'd_per_year_f' => $test1 ?? Money::USD($this->d_per_year, true)->format(),
            'n_weekly' => $this->n_weekly,
            'n_per_month' => $this->n_per_month,
            'n_per_6months' => $this->n_per_6months,
            'n_per_year' => $this->n_per_year,
            'k_per_month' => $price->monthly ?? $this->d_per_month,
            'k_per_6months' => $price['6months'] ?? $this->d_per_month,
            'k_per_year' => $price->yearly ?? $this->d_per_month,
            'd_per_month' => $price->monthly ?? $this->d_per_month,
            'd_per_6months' => $price['6months'] ?? $this->d_per_6months,
            'd_per_year' => $price->yearly ?? $this->d_per_year,
            'content' => $this->content,
            'n_only' => $this->n_only,
            'sms_plan' => $this->sms_plan,


        ];
    }
}



 // $currencies = array("Ghana" => ["cur" => "GHS", "con" => 0.081], "Rwanda" => ["cur" => "RWF", "con" => 8.60], "Cameroon" => ["cur" => "XAF", "con" => 5.44], "South Africa" => ["cur" => "ZAR", "con" => 0.14], "Zambia" => ["cur" => "ZMW", "con" => 0.13], "Zimbabwe" => ["cur" => "ZWL", "con" => 0.0083], "Uganda" => ["cur" => "UGX", "con" => 32.10], "Kenya" => ["cur" => "KES", "con" => 1], "Tanzania" => ["cur" => "TZS", "con" => 19.47], "Cote D'ivoire" => ["cur" => "XOF", "con" => 5.46], "Burkina Faso" => ["cur" => "XOF", "con" => 5.46], "Senegal" => ["cur" => "XOF", "con" => 5.46], "Mali" => ["cur" => "XOF", "con" => 5.46], "Gabon" => ["cur" => "XAF", "con" => 5.44], "Mauritius" => ["cur" => "MUR", "con" => 0.38]);


   // if ($countryName == "Nigeria") {
        //     $test1 = null;
        //     $test2 = null;
        //     $test3 = null;
        // } else if (in_array($countryName, $africa)) {
        //     $price = Price::where('plan_id', $this->id)->where('country_name', $countryName)->first();
        //     if (isset($price)) {
        //         $test1 = new Money($price->monthly, $price->curr_code, true);
        //         $test2 = new Money($price['6months'], $price->curr_code, true);
        //         $test3 = new Money($price->yearly, $price->curr_code, true);
        //     }
        // } else {
        //     $price = Price::where('plan_id', $this->id)->where('country_name', $countryName)->first();
        //     if (isset($price)) {
        //         $test1 = new Money($price->monthly, $price->curr_code, true);
        //         $test2 = new Money($price['6months'], $price->curr_code, true);
        //         $test3 = new Money($price->yearly, $price->curr_code, true);
        //     }
        // }





        // if ($location)



    // $africa = array("Ghana", "Rwanda", "Cameroon", "South Africa", "Zambia", "Zimbabwe", "Uganda", "Kenya", "Tanzania", "Cote D'ivoire", "Burkina Faso", "Senegal", "Mali", "Gabon", "Mauritius");



        //     if ($test1 != null) {
        //         try {
        //             $test1 = new Money($this->k_per_month * $currencies[$countryName]['con'], new Currency($currencies[$countryName ?? "Kenya"]['cur']), true);
        //             $test2 = new Money($this->k_per_6months * $currencies[$countryName]['con'], new Currency($currencies[$countryName ?? "Kenya"]['cur']), true);
        //             $test3 = new Money($this->k_per_year * $currencies[$countryName]['con'], new Currency($currencies[$countryName ?? "Kenya"]['cur']), true);

        //             $test1 = $test1->format();
        //             $test2 = $test2->format();
        //             $test3 = $test3->format();
        //         } catch (Exception $e) {
        //             $error =  'Message: ' . $e->getMessage();
        //         }
        //     }

         // $conv = 1;

        // // if (in_array($countryName, $africa)) {
        // //     $curr = $currencies[$countryName]['cur'];
        // //     $conv = $currencies[$countryName]['con'];
        // // }
