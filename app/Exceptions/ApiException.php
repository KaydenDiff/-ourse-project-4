<?php

namespace App\Exceptions;


use Exception;
use Illuminate\Http\Exceptions\HttpResponseException;

class ApiException extends HttpResponseException
{
    public function __construct(string $message = "", int $code = 500, $errors =[])
    {
        $response = [
            'message' => $message,
        ];

        if (!empty($errors)) {
            $response['errors'] = $errors;
        }

        parent::__construct(response()->json($response)->setStatusCode($code));
    }

}
