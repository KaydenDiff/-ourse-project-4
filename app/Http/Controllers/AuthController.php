<?php

namespace App\Http\Controllers;

use App\Exceptions\ApiException;
use App\Http\Requests\AuthLoginRequest;
use App\Http\Requests\AuthRegisterRequest;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // Регистрация
    public function register(AuthRegisterRequest $request)
    {
        // Валидация выполняется автоматически через AuthRegisterRequest

        // Создание пользователя с ролью
        $user = User::create([
            'name' => $request->name,
            'login' => $request->login,
            'password' => Hash::make($request->password),
        ]);

        // Возвращаем ответ
        return response()->json(['Сообщение' => 'Пользователь успешно создан'], 201);
    }

    // Логин
    public function login(AuthLoginRequest $request)
    {
        // Валидация выполняется автоматически через AuthLoginRequest

        /*$user = User::where('login', $request->login)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'login' => ['Неверный логин или пароль.'],
            ]);
        }*/
        if (!Auth::attempt($request->only(['login', 'password'])))
            throw new ApiException("Invalid credentials", 401);

        $user = Auth::user();


        $token = $user->generateToken();

        return response()->json([
            'token' => $token,
        ], 200);
    }

    // Выход
    public function logout(Request $request)
    {
        $user = $request->user();
        $user->revokeToken();

        return response()->json(['Сообщение' => 'Успешный выход'], 200);
    }
}
