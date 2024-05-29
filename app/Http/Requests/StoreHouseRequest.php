<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHouseRequest extends FormRequest
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
            'passport_number'=>'required',
            'jshshir'=>'required',
            'fio'=>'required',
            'birthday'=>'required',
            'house_number'=>'required',
            'phone'=>'required',
            'cadaster'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'passport_number.required'=>'Passport nomerin kiritiń!!!',
            'jshshir.required'=>'JSHSHIR di kiritiń!!!',
            'fio.required'=>'FIO nı toltırıń!!!',
            'birthday.required'=>'Tuwılǵan kúnin kiritiń!!!',
            'house_number.required'=>'Úy nomerin kiritiń!!!',
            'phone.required'=>'Telefon nomer kiritiń!!!',
            'cadaster.required'=>'Kadastr nomer kiritiń!!!',
        ];
    }
}
