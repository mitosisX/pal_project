<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'role' => 'required',
            'phone_number' => 'required',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Provide first name',
            'last_name.required' => 'Provide first name',
            'role.required' => 'Provide first name',
            'phone_number.required' => 'Provide first name',
            'password.required' => 'Provide first name',
        ];
    }
}
