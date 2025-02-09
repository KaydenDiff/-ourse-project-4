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
        // Логируем данные запроса
        \Log::info('Request data:', request()->all());

        // Ищем персонажа по id
        $character = Character::find($id);

        if (!$character) {
            // Логируем, если персонаж не найден
            \Log::warning("Персонаж с id {$id} не найден.");
            return response()->json(['Ошибка' => 'Персонаж не найден'], 404);
        }

        // Получаем валидированные данные
        $validated = $request->validated();

        // Логируем валидированные данные
        \Log::info("Получены валидированные данные для обновления: ", $validated);

        // Обновляем имя персонажа, если оно присутствует в запросе
        if (isset($validated['name'])) {
            $character->name = $validated['name'];
            // Логируем изменение имени персонажа
            \Log::info("Обновлено имя персонажа на: {$validated['name']}");
        }

        // Обновляем изображение, если оно присутствует в запросе
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('characters', 'public');
            $character->image = $imagePath;
            // Логируем обновление изображения
            \Log::info("Изображение обновлено. Путь к файлу: {$imagePath}");
        }

        // Сохраняем обновленного персонажа
        $character->save();
        \Log::info("Персонаж с id {$id} успешно обновлен.");

        // Формируем URL изображения
        $character->image_url = $character->image ? asset('storage/' . $character->image) : null;

        // Логируем ответ
        \Log::info("Ответ после обновления персонажа: ", $character->toArray());

        return response()->json($character, 200);
    }


    // Метод для удаления персонажа
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
