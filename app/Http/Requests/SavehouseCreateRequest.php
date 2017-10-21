<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavehouseCreateRequest extends FormRequest
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
        'name'=>'required',
        'description'=>'required',
        'address'=>'required',
        'category_id' => 'required',
        'city_id'=>'required',
        'lat' => 'required',
        'lng' => 'required',
        'phones' => 'required|min:1',
        'image' => 'required|mimes:jpeg,bmp,png,jpg'
        ];
    }
}
