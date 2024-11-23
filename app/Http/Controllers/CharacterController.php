<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;
use Validator;

class CharacterController extends Controller
{
    public function index(Request $request)
    {

        $character = Character::all();

        return response()->json(['Персонажи' => $character], 200);
    }

    // Метод для добавления нового персонажа
    public function store(Request $request)
    {
        // Проверка, авторизован ли пользователь
        if (!auth('api')->check()) {
            return response()->json(['Ошибка' => 'Пройдите авторизацию'], 401);
        }

        // Проверка, является ли пользователь администратором
        if (auth('api')->user()->role_id !== 2) {
            return response()->json(['Ошибка' => 'Недостаточно прав'], 401);
        }

        // Валидация данных запроса
        $validated = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'image' => 'nullable|file|mimes:jpg,jpeg,png|max:2048', // Добавили правило для изображения
        ]);

        // Сохранение изображения, если оно было передано
        $imagePath = null;
        if ($request->hasFile('image')) {
            // Сохраняем изображение в директории 'storage/app/public/characters'
            $imagePath = $request->file('image')->store('characters', 'public');
        }

        // Создание нового персонажа
        $character = Character::create([
            'name' => $validated['name'],
            'image' => $imagePath, // Сохраняем путь к изображению в базе данных
        ]);

        // Формирование URL изображения для публичного доступа
        $character->image_url = $imagePath ? asset('storage/' . $imagePath) : null;

        // Возвращаем успешный ответ с данными персонажа
        return response()->json($character, 201);
    }

    // Метод для редактирования персонажа
    public function update(Request $request, $id)
    {
        // Проверка, авторизован ли пользователь
        if (!auth('api')->check()) {
            return response()->json(['Ошибка' => 'Пройдите авторизацию'], 401);
        }

        // Проверка, является ли пользователь администратором
        if (auth('api')->user()->role_id !== 2) {
            return response()->json(['Ошибка' => 'Недостаточно прав'], 401);
        }

        // Находим персонажа по id
        $character = Character::find($id);

        if (!$character) {
            return response()->json(['Ошибка' => 'Персонаж не найден'], 404);
        }

        // Определяем правила валидации
        $rules = [
            'name' => 'nullable|string|min:3|max:255',
            'image' => 'nullable|file|mimes:jpg,jpeg,png|max:2048', // Обновление для изображения
        ];

        // Выполняем валидацию
        $validated = $request->validate($rules);

        // Если есть новое изображение, сохраняем его
        if ($request->hasFile('image')) {
            // Сохраняем изображение в директории 'storage/app/public/characters'
            $imagePath = $request->file('image')->store('characters', 'public');
            $validated['image'] = $imagePath; // Обновляем путь к изображению
        }

        // Если передано новое имя, обновляем его
        if (isset($validated['name'])) {
            $character->name = $validated['name'];
        }

        // Если обновлено изображение, обновляем его путь
        if (isset($validated['image'])) {
            $character->image = $validated['image'];
        }

        // Обновляем персонажа
        $character->save();

        // Формируем URL изображения
        $character->image_url = $character->image ? asset('storage/' . $character->image) : null;

        // Возвращаем обновленного персонажа
        return response()->json($character, 200);
    }
    // Метод для удаления персонажа
    public function destroy($id)
    {
        // Проверка, авторизован ли пользователь
        if (!auth('api')->check()) {
            return response()->json(['Ошибка' => 'Пройдите авторизацию'], 401);
        }

        // Проверка, является ли пользователь администратором
        if (auth('api')->user()->role_id !== 2) {
            return response()->json(['Ошибка' => 'Недостаточно прав'], 401);
        }

        // Находим предмет по id
        $character = Character::find($id);

        if (!$character) {
            return response()->json(['Ошибка' => 'Персонаж не найден'], 404);
        }

        // Удаляем предмет
        $character->delete();

        // Возвращаем успешный ответ
        return response()->json(null, 204);
    }
}
