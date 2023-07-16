<?php
namespace App\Services;


use App\Exceptions\AppError;
use App\Models\User;
use Error;
use Illuminate\Support\Facades\Log;


class CreateUserService{
    public function execute(array $data){
        Log::info('Usario service');
        Log::debug('Esse é um debug Usario service');

        $userFound = User::firstWhere('email',$data['email']);

        if(!is_null($userFound)){
            Log::error('Email já cadastrado');
            throw new AppError ('Email já cadastrado',400);
        }

        return User::create($data);
    }
}