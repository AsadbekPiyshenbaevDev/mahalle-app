<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStreetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'street_name' => 'required',
            'house_count'=>'required|min:0',
            'population'=>'required|min:0'

        ];
    }

    public function messages()
    {
        return[
          'street_name.required'=>'Kóshe atın kiritiń!!!',
          'house_count.required'=>'Xojalıq sanın kiritiń!!!',
          'house_count.min'=>'0 den joqarı bolıwı kerek!!!',
          'population.required'=>'Xalıq sanın kiritiń!!!',
          'population.min'=>'0 den joqarı bolıwı kerek!!!'
        ];
    }
}
