<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //kad vartotojas galetu siusti duomenis neautorizuotas
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2|max:50',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:10',
        ];
    }
    // public function attributes() {
    //     return [
    //         'name' => 'your name',
    //     ];
    // }
    public function messages() {
        return [
            'name.required' => 'Neįvestas vardas',
            'email.required' => 'Neįvestas elektroninio pašto adresas',
            'email.email' => 'Įveskite galiojantį elektroninio pašto adresą',
        ];
    }
}
