<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' =>[
                'required',
                'min:3',
                'max:255',
                'string'
            ],
            'passport_number' => [
                'required',
                'string',
                'min:7',
                'max:14'
            ],
            'phone_number' => [
                'required',
                'digits_between:9,14',
                'numeric'
            ],
        ];
    }
}
