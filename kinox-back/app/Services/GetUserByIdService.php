<?php
namespace App\Services;


use App\Exceptions\AppError;
use App\Models\User;
use Error;
use Illuminate\Support\Facades\Log;


class GetUserByIdService{
    public function execute($id){
       
        $user = User::find($id);

        if (!$user) {
            throw new AppError('User not found', 404);
        }

        return $user;
    }
}