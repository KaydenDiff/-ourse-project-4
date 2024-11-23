<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;
use App\Http\Requests\CharacterRequest;
use Validator;

class CharacterController extends Controller
{
    public function index(Request $request)
    {
        $character = Character::all();

        return response()->json(['Персонажи' => $character], 200);
    }
    public function store(CharacterRequest $request)
    {
        $validated = $request->validated();

        $imagePath = $request->hasFile('image')
            ? $request->file('image')->store('characters', 'public')
            : null;

        $character = Character::create([
            'name' => $validated['name'],
            'image' => $imagePath,
        ]);

        $character->image_url = $imagePath ? asset('storage/' . $imagePath) : null;

        return response()->json($character, 201);
    }
    // Метод для редактирования персонажа
    public function update(CharacterRequest $request, $id)
    {
        $character = Character::find($id);

        if (!$character) {
            return response()->json(['Ошибка' => 'Персонаж не найден'], 404);
        }

        $validated = $request->validated();

        if (isset($validated['name'])) {
            $character->name = $validated['name'];
        }

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('characters', 'public');
            $character->image = $imagePath;
        }

        $character->save();
        $character->image_url = $character->image ? asset('storage/' . $character->image) : null;

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
