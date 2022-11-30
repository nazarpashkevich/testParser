<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegistationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return (bool)!\Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => ['string', 'required'],
            'last_name' => ['string', 'required'],
            'email' => ['string', 'email', 'required', 'unique:users'],
            'password' => ['required', 'min:6', 'confirmed']
        ];
    }
}
