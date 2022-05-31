<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'product' => 'required|min:5|max:50',
            'type' => 'required|min:5|max:20',
            "product_description" => "required",
            "price" => 'between:3,7',
            "gender" => "required",
            "photos" => "required",
            "size" => "required|min:1|max:5",
            "color" => "required|min:2|max:10",
            "count" => 'required|numeric',
        ];
    }
}
