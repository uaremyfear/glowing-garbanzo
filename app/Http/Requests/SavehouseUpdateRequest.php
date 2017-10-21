<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavehouseUpdateRequest extends FormRequest
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
        $rules = [
        'name'=>'required',
        'description'=>'required',
        'address'=>'required',
        'category_id' => 'required',
        'city_id'=>'required',
        'lat' => 'required',
        'lng' => 'required',
        'phones' => 'required|min:1',
        'image' => 'nullable|mimes:jpeg,png,jpg'
        ];

        // if(count($this->files))
        // {
        //     $rules['image'] = 'required|mimes:jpeg,bmp,png,jpg';
        // }
        
        return $rules;
    }
}
