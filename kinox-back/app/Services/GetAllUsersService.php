<?php
namespace App\Services;


use App\Exceptions\AppError;
use App\Models\User;
use Error;
use Illuminate\Support\Facades\Log;


class GetAllUsersService{
    public function execute(){
       
        $allUsers = User::all();

        return $allUsers;
    }
}