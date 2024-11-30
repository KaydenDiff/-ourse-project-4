<?php

namespace App\Http\Requests;

use App\Exceptions\ApiException;
use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends ApiRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|min:6|max:255',
            'cost' => 'required|integer|min:3|max:9999',
            'required_item' => 'nullable|integer|exists:items,id',
            'tier_id' => 'required|integer|exists:tier,id',
            'type_id' => 'required|integer|exists:type,id',
            'image' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Название предмета обязательно.',
            'name.max' => 'Название предмета не должно превышать 255 символов.',
            'description.min' => 'Описание должно содержать минимум 6 символов.',
            'cost.required' => 'Укажите стоимость предмета.',
            'cost.integer' => 'Стоимость должна быть числом.',
            'cost.min' => 'Минимальная стоимость — 3.',
            'cost.max' => 'Максимальная стоимость — 9999.',
            'required_item.exists' => 'Указанный обязательный предмет не существует.',
            'tier_id.required' => 'Укажите уровень предмета.',
            'tier_id.exists' => 'Указанный уровень не существует.',
            'type_id.required' => 'Укажите тип предмета.',
            'type_id.exists' => 'Указанный тип не существует.',
            'image.mimes' => 'Изображение должно быть в формате jpg, jpeg или png.',
            'image.max' => 'Максимальный размер изображения — 2MB.',
        ];
    }
}
