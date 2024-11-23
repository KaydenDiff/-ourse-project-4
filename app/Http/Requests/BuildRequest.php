<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuildRequest extends ApiRequest
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
    public function rules()
    {
        $rules = [
            'name' => 'nullable|string|min:3|max:255', // Название сборки, необязательно
            'items' => 'nullable|array|min:1', // Массив предметов, необязательно
        ];

        // Если вы хотите обновить персонажа, добавьте проверку на character_id
        if ($this->has('character_id')) {
            $rules['character_id'] = 'required|integer|exists:characters,id';
        }

        if ($this->has('items')) {
            foreach ($this->input('items') as $index => $item) {
                $rules['items.' . $index . '.item_id'] = 'required|integer|exists:items,id';
                $rules['items.' . $index . '.part'] = 'required|integer|exists:part,id';
            }
        }

        return $rules;
    }
    public function messages()
    {
        return [
            'name.required' => 'Название сборки обязательно.',
            'name.min' => 'Название сборки должно содержать минимум 3 символа.',
            'name.max' => 'Название сборки не должно превышать 255 символов.',
            'character_id.required' => 'Необходимо указать персонажа.',
            'character_id.exists' => 'Указанный персонаж не найден.',
            'items.required' => 'Необходимо указать хотя бы один предмет.',
            'items.*.item_id.required' => 'Каждый предмет должен содержать ID.',
            'items.*.item_id.exists' => 'Указанный предмет не найден.',
            'items.*.part.required' => 'Этап (part) обязателен для каждого предмета.',
            'items.*.part.exists' => 'Указанный этап (part) не найден.',
        ];
    }
}
