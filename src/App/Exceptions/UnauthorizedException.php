<?php

declare(strict_types=1);

namespace App\Exceptions;

use Flugg\Responder\Exceptions\Http\HttpException;
use Illuminate\Http\JsonResponse;

class UnauthorizedException extends HttpException
{
    protected $status = JsonResponse::HTTP_UNAUTHORIZED;
    protected $errorCode = 'unauthorized';
}
