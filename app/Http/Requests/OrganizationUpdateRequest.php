<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrganizationUpdateRequest extends FormRequest
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
        'organization_name'=>'required',
        'description'=>'required',
        'address'=>'required',
        'category_id' => 'required',
        'phones' => 'required|min:1',
        'image' => 'nullable|mimes:jpeg,bmp,png,jpg'
        ];
    }
}
