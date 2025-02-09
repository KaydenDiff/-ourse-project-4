<?php

namespace App\Http\Requests;

use App\Exceptions\ApiException;
use Illuminate\Foundation\Http\FormRequest;

class CharacterRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth('api')->check() && auth('api')->user()->role_id === 2;
    }
    public function failedAuthorization()
    {
        throw new ApiException('Недостаточно прав', 403);
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function rules()
    {

        // Разные правила для методов store и update
        $rules = [
            'name' => 'required|string|min:3|max:255',
            'image' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
        ];

        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules['name'] = 'nullable|string|min:3|max:255';
        }

        return $rules;
    }
    public function messages()
    {
        return [
            'name.required' => 'Название персонажа обязательно.',
            'name.min' => 'Имя персонажа должно содержать минимум 3 символа.',
            'name.max' => 'Имя персонажа не должно превышать 255 символов.',
            'image.mimes' => 'Изображение должно быть в формате jpg, jpeg или png.',
            'image.max' => 'Размер изображения не должен превышать 2MB.',
        ];
    }
}
