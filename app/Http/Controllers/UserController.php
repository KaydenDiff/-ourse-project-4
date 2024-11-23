<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // Проверка, авторизован ли пользователь
        if (!auth('api')->check()) {
            return response()->json(['Ошибка' => 'Пройдите авторизацию'], 401);
        }

        // Проверка, является ли пользователь администратором
        if (auth('api')->user()->role_id !== 2) {
            return response()->json(['Ошибка' => 'Недостаточно прав'], 401);
        }

        // Если пользователь авторизован и является администратором, возвращаем список пользователей
        $users = User::select('id', 'name')->get();

        // Убедимся, что данные отправляются с корректной кодировкой
        return response()->json(['Пользователи' => $users], 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function update(UserRequest $request)
    {
        // Получаем текущего пользователя из токена
        $user = auth()->user();

        if (!$user) {
            return response()->json(['Ошибка' => 'Пользователь не найден'], 404);
        }

        // Валидация данных
        $validated = $request->validated();

        // Обновляем имя, если передано
        if (isset($validated['name'])) {
            $user->name = $validated['name'];
        }

        // Обновляем пароль, если передан
        if (isset($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }

        // Сохраняем изменения
        $user->save();

        return response()->json(['id' => $user->id, 'name' => $user->name], 200);
    }


    public function destroy($id)
{
    // Проверяем, является ли пользователь администратором
    if (auth()->user()->role_id !== 2) {
        return response()->json(['Ошибка' => 'Недостаточно прав'], 401);
    }

    // Ищем пользователя
    $user = User::find($id);

    if (!$user) {
        return response()->json(['Ошибка' => 'Пользователь не найден'], 404);
    }

    // Удаляем пользователя
    $user->delete();

    return response()->json('Пользователь удалён');
}

}
