<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBeer extends FormRequest
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
            'name' => 'required|min:3|string',
            'description' => 'required|min:10|string',
            'price' => 'required|min:0|numeric',
            'alcohol' => 'required|min:0|numeric|max:99',
            'image_base64_uri' => 'image|mimes:jpeg,jpg|max:2048',
        ];
    }
}
