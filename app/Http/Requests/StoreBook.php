<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBook extends FormRequest
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
            'image' => 'required',
            'title' => 'required',
            'price' => 'required',
            'year' => 'required',
            'page' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'category' => 'required',
        ];
    }
}
