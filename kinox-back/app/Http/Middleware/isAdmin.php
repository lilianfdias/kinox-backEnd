<?php

namespace App\Http\Middleware;

use App\Exceptions\AppError;
use Closure;
use Illuminate\Http\Request;


class isAdmin {
    public function handle(Request $request, Closure $next) {
        $user = auth()->user();

        if ($user && $user->type === 'admin') {
            return $next($request);
        }

        throw new AppError("Rota não autorizada", 401);
    }
}
