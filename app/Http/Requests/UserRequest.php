<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth('api')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        $rules = [];

        // Валидация имени
        if ($this->has('name')) {
            $rules['name'] = 'required|string|max:100';
        }

        // Валидация пароля
        if ($this->has('password')) {
            $rules['password'] = 'required|string|min:6|confirmed'; // password_confirmation обязательно
        }

        return $rules;
    }
    public function messages()
    {
        return [
            'name.required' => 'Имя пользователя обязательно.',
            'name.max' => 'Имя не должно превышать 100 символов.',
            'password.required' => 'Пароль обязателен.',
            'password.min' => 'Пароль должен содержать минимум 6 символов.',
            'password.confirmed' => 'Пароли не совпадают.',
        ];
    }
}
