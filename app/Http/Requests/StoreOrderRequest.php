<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'customer' => 'required',
            'no_wa' => 'required',
            'pickupdate' => 'required',
            'pickuptime' => 'required',
            'location' => 'required',
            'cartype' => 'required',
            'Status' => 'required',
            'order_id'=>'required',
            'car_id'=>'required',
            'buktitf' => 'required',
            'tnc'=>'required',
            'goingto'=>'required',
            'servicetype'=> 'required'

        ];
    }
}
