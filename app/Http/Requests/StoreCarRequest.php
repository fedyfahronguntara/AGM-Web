<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'required|integer',
            'duration' => 'required',
            'image1' => 'required|image',
            'image2' => 'required|image',
            'image3' => 'required|image',
            'status'=>'required',
            'description'=> 'required'
        ];
    }
}
