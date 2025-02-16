<?php

namespace App\Http\Controllers;

use App\Models\BuildItem;
use App\Models\Character;
use App\Models\Build;
use App\Models\Part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\BuildRequest;
class BuildController extends Controller
{
    // Создание сборки
    public function store(BuildRequest  $request)
    {
        $validatedData = $request->validated();

        // Получаем текущего аутентифицированного пользователя
        $user = auth()->user(); // или auth()->user(), если используете другой способ аутентификации

        // Проверка, что пользователь существует (можно дополнительно обработать ошибку)
        if (!$user) {
            return response()->json(['Ошибка' => 'Недостаточно прав'], 401);
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
                return response()->json(['Ошибка' => 'Этап не найден'], 404);
            }
        }

        // Возвращаем успешный ответ с созданной сборкой
        return response()->json(['build' => $build], 201);
    }

    public function getCharacterBuilds($id)
    {
        $character = Character::with(['builds.items', 'builds.user'])->find($id);

        if (!$character) {
            return response()->json(['Ошибка' => 'Персонаж не найден'], 404);
        }

        return response()->json([
            'character' => $character->only(['id', 'name', 'image']),
            'builds' => $character->builds->map(function ($build) {
                return [
                    'id' => $build->id,
                    'name' => $build->name,
                    'author' => $build->user->name,  // Добавляем имя пользователя (author)
                    'items' => $build->items->map(function ($item) {
                        return [
                            'part' => $item->pivot->part_id,
                            'item_id' => $item->id,
                            'item_name' => $item->name,
                        ];
                    }),
                ];
            }),
        ], 200);
    }
    // Редактирование сборки
    public function update(BuildRequest $request, $id)
    {
        $validatedData = $request->validated();

        $build = Build::find($id);

        if (!$build) {
            return response()->json(['Ошибка' => 'Сборка не найдена или доступ запрещён'], 404);
        }
        if ($build->user_id != auth()->id() && auth()->user()->role_id !== 2) {
            return response()->json(['Ошибка' => 'Доступ запрещён'], 403);
        }
        // Обновляем только переданные поля
        if (isset($validatedData['name'])) {
            $build->name = $validatedData['name'];
        }

        // Обновляем список предметов, если они переданы
        if (isset($validatedData['items'])) {
            $build->items()->detach();
            foreach ($validatedData['items'] as $item) {
                $build->items()->attach($item['item_id'], ['part_id' => $item['part']]);
            }
        }

        $build->save();

        return response()->json($build->load('items'), 200);
    }
    // Удаление сборки
    public function destroy($id)
    {
        // Находим сборку по ID
        $build = Build::find($id);

        // Если сборка не найдена
        if (!$build) {
            return response()->json(['Ошибка' => 'Сборка не найдена'], 404);
        }

        // Проверка, если пользователь не админ и не владелец сборки
        if ($build->user_id != auth()->id() && auth()->user()->role_id !== 2) {
            return response()->json(['Ошибка' => 'Доступ запрещён'], 403);
        }

        // Удаление сборки
        $build->delete();

        // Возвращаем успешный ответ
        return response()->json(['Сообщение' => 'Сборка успешно удалена'], 200);
    }


}
