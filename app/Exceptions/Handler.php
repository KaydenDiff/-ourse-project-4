<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Illuminate\Http\JsonResponse; // Это правильно для использования JsonResponse
use App\Exceptions\ApiException;
class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [];

    /**
     * A list of the inputs that are never included in the exception's report.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Illuminate\Http\Response|\Symfony\Component\HttpFoundation\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['message' => 'Необходимо пройти авторизацию.'], 401);
        }

        // Если вы все же хотите вернуться к маршруту 'login', то нужно убедиться, что он зарегистрирован в 'api.php'
        // Однако редирект на API-методы может быть не лучшим вариантом. Вместо этого лучше оставить JSON ответ.
        return response()->json(['message' => 'Необходимо пройти авторизацию.'], 401);
    }

    public function render($request, Throwable $exception)
    {
        // Проверка на исключение ApiException
        if ($exception instanceof ApiException) {
            return $exception->getResponse();
        }

        // Проверка на исключение AuthenticationException
        if ($exception instanceof AuthenticationException) {
            return response()->json([
                'message' => 'Необходимо пройти авторизацию.',
            ], 401);
        }

        // Проверка на исключение AccessDeniedHttpException
        if ($exception instanceof AccessDeniedHttpException) {
            return response()->json(['message' => 'Доступ запрещён.'], 403);
        }

        // Все остальные исключения обрабатываются стандартным способом
        return parent::render($request, $exception);
    }
}
