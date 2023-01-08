<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
            'description' =>[
                'required',
                'min:5',
                'max:255',
                'string'
            ],
            'quantity' => [
                'required',
                'numeric',
                'digits_between:1,100'
            ],
            'current_quantity' => [
                'required',
                'numeric',
                'digits_between:1,100'
            ]
        ];
    }
}
