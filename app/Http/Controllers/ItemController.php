<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest;
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
    public function update(Request $request, $id)
    {
        // Проверка, авторизован ли пользователь
        if (!auth('api')->check()) {
            return response()->json(['error' => 'Пользователь не авторизован'], 401);
        }

        // Проверка, является ли пользователь администратором
        if (auth('api')->user()->role_id !== 2) {
            return response()->json(['error' => 'Доступ запрещён'], 403);
        }

        // Находим предмет по id
        $item = Item::find($id);

        if (!$item) {
            return response()->json(['error' => 'Предмет не найден'], 404);
        }

        // Определяем правила валидации
        $rules = [
            'name' => 'string|min:3|max:255',
            'description' => 'string|min:6|max:255',
            'cost' => 'integer|min:3|max:9999',
            'required_item' => 'nullable|integer|exists:items,id',
            'tier_id' => 'integer|exists:tier,id',
            'type_id' => 'integer|exists:type,id',
            'image' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
        ];

        // Валидация данных
        $validated = $request->validate($rules);

        // Отфильтровываем пустые поля из validated массива
        $validated = array_filter($validated);

        // Проверяем, если картинка есть, загружаем её
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('items', 'public');
            $validated['image'] = $path;
        }

        // Проверяем, что хотя бы одно поле передано
        if (empty($validated)) {
            return response()->json(['error' => 'Нужно указать хотя бы одно поле для обновления'], 422);
        }

        // Обновляем только переданные поля
        $item->update($validated);

        // Возвращаем обновлённый предмет с новым путём к картинке, если была обновлена
        if (isset($validated['image'])) {
            $item->image_url = asset('storage/' . $validated['image']);
        }

        return response()->json($item, 200);
    }

    public function store(ItemRequest $request)
    {
        $validated = $request->validated();

        $path = $request->hasFile('image')
            ? $request->file('image')->store('items', 'public')
            : null;

        $item = Item::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'cost' => $validated['cost'],
            'required_items' => $validated['required_item'] ?? null,
            'tier_id' => $validated['tier_id'],
            'type_id' => $validated['type_id'],
            'image' => $path,
        ]);

        $item->image_url = $path ? asset('storage/' . $path) : null;

        return response()->json($item, 201);
    }

        // Метод для удаления предмета
    public function destroy($id)
    {
        // Проверка, авторизован ли пользователь
        if (!auth('api')->check()) {
            return response()->json(['Ошибка' => 'Пользователь не авторизован'], 401);
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
