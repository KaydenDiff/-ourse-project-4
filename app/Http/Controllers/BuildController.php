<?php

namespace App\Http\Controllers;

use App\Models\BuildItem;
use App\Models\Character;
use App\Models\Build;
use App\Models\Part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuildController extends Controller
{
    // Создание сборки
    public function store(Request $request)
    {
        // Получаем текущего аутентифицированного пользователя
        $user = auth()->user(); // или auth()->user(), если используете другой способ аутентификации

        // Проверка, что пользователь существует (можно дополнительно обработать ошибку)
        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Создаём сборку, добавляем текущего пользователя
        $build = Build::create([
            'name' => $request->input('name'),
            'character_id' => $request->input('character_id'),
            'user_id' => $user->id, // Записываем ID текущего пользователя
        ]);

        // Добавляем предметы через таблицу builditems
        foreach ($request->input('items') as $item) {
            // Ищем part_id по id из таблицы parts
            $part = Part::where('id', $item['part'])->first();

            // Если part найдено, добавляем запись в builditems
            if ($part) {
                BuildItem::create([
                    'build_id' => $build->id,
                    'item_id' => $item['item_id'],
                    'part_id' => $part->id,
                ]);
            } else {
                // Если part не найдено, можно вернуть ошибку или просто пропустить
                return response()->json(['error' => 'Part not found'], 404);
            }
        }

        // Возвращаем успешный ответ с созданной сборкой
        return response()->json(['build' => $build], 201);
    }

    public function getCharacterBuilds($id)
    {
        // Меняем 'hero' на 'character' для поиска персонажа
        $character = Character::with(['builds.items'])->find($id);

        if (!$character) {
            return response()->json(['error' => 'Персонаж не найден'], 404);
        }

        // Возвращаем сборки с предметами, но без дублирования
        return response()->json([
            'character' => $character->only(['id', 'name', 'image']), // Убираем лишние поля, чтобы не дублировать
            'builds' => $character->builds->map(function ($build) {
                return [
                    'id' => $build->id,
                    'name' => $build->name,
                    'items' => $build->items->map(function ($item) {
                        return [
                            'part' => $item->pivot->part_id, // Получаем part_id из промежуточной таблицы
                            'item_id' => $item->id,
                            'item_name' => $item->name, // Подразумевается, что у модели Item есть поле 'name'
                        ];
                    }),
                ];
            }),
        ], 200);
    }

    // Редактирование сборки
    public function update(Request $request, $id)
    {
        $build = Build::find($id);

        if (!$build || $build->user_id != auth()->id()) {
            return response()->json(['error' => 'Сборка не найдена или доступ запрещён'], 404);
        }

        $validated = $request->validate([
            'name' => 'nullable|string|min:3|max:255',
            'items' => 'nullable|array|min:1',
            'items.*.part' => 'required|string|min:3|max:255',
            'items.*.item_id' => 'required|integer|exists:items,id',
        ]);

        if (isset($validated['name'])) {
            $build->update(['name' => $validated['name']]);
        }

        if (isset($validated['items'])) {
            $build->items()->detach(); // Удаление всех предыдущих предметов
            foreach ($validated['items'] as $item) {
                // Добавляем новые предметы
                $build->items()->attach($item['item_id'], ['part_id' => $item['part']]);
            }
        }

        return response()->json($build->load('items'), 200);
    }

    // Удаление сборки
    public function destroy($id)
    {
        $build = Build::find($id);

        if (!$build || $build->user_id != auth()->id()) {
            return response()->json(['error' => 'Сборка не найдена или доступ запрещён'], 404);
        }

        $build->delete();

        return response()->json(null, 204);
    }
}
