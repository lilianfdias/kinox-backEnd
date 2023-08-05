<?php
namespace App\Services;


use App\Exceptions\AppError;
use App\Models\User;
use Error;
use Illuminate\Support\Facades\Log;


class LoginService {
    public function execute(array $data) {

        if(!$token = auth()->attempt($data)) {
            throw new AppError('Email ou senha incorretos', 401);
        }

        return $this->responseToken($token);
    }

    private function responseToken($token) {
        $user = auth()->user();
        $userId = $user->id;
        return response()->json([
            'token' => $token,
            'user_id' => $userId,
            'user' => $user
        ]);
    }
}