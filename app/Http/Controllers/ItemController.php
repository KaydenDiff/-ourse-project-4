<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Validator;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $items = Item::all();

        // Добавляем поле image_url для каждого предмета
        $items->each(function ($item) {
            $item->image_url = $item->image ? asset('storage/' . $item->image) : null;
        });

        return response()->json(['Предметы' => $items], 200);
    }
    public function store(Request $request)
    {
        // Проверка, авторизован ли пользователь
        if (!auth('api')->check()) {
            return response()->json(['error' => 'Пройдите авторизацию'], 401);
        }

        // Проверка, является ли пользователь администратором
        if (auth('api')->user()->role_id !== 2) {
            return response()->json(['error' => 'Недостаточно прав'], 403);
        }

        // Валидация данных запроса
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|min:6|max:255',
            'cost' => 'required|integer|min:3|max:9999',
            'required_item' => 'nullable|integer|exists:items,id',
            'tier_id' => 'required|integer|exists:tier,id',
            'type_id' => 'required|integer|exists:type,id',
            'image' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Сохранение изображения, если оно было передано
        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('items', 'public'); // Сохраняем файл в storage/app/public/items
        }

        // Создание нового предмета
        $item = Item::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'cost' => $validated['cost'],
            'required_items' => $validated['required_item'] ?? null,
            'tier_id' => $validated['tier_id'],
            'type_id' => $validated['type_id'],
            'image' => $path, // Сохраняем путь относительно публичной директории
        ]);

        // Формируем URL для изображения, если оно было загружено
        $item->image_url = $item->image ? asset('storage/items/' . basename($item->image)) : null;

        // Возвращаем успешный ответ с объектом предмета и URL изображения
        return response()->json([
            'item' => $item
        ], 201);
    }

        // Метод для удаления предмета
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
        $item = Item::find($id);

        if (!$item) {
            return response()->json(['Ошибка' => 'Предмет не найден'], 404);
        }

        // Удаляем предмет
        $item->delete();

        // Возвращаем успешный ответ
        return response()->json(null, 204);
    }
}
