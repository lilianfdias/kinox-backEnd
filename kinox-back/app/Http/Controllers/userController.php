<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\CreateUserRequest;
use App\Services\CreateUserService;
use App\Services\GetAllUsersService;
use App\Services\GetUserByIdService;
use Illuminate\Http\Request;

class UserController extends Controller{
    public function create(CreateUserRequest $request){
        
        $createUserService = new CreateUserService();
        return $createUserService->execute($request->all());
    }

    public function get(){
        
        $getAllUsersService = new GetAllUsersService();
        $allUsers = $getAllUsersService->execute();
        return $allUsers;
    }
    public function getById(Request $request, string $id)
    {
        $getUserByIdService = new GetUserByIdService();
       

        return $getUserByIdService->execute($id);
    }
}
// return User::create($request->all());