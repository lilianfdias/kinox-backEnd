<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Services\CreateUserService;
use App\Services\DeleteUserService;
use App\Services\GetAllUsersService;
use App\Services\GetUserByIdService;
use App\Services\UpdateUserService;
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

    public function update(UpdateUserRequest $request, string $id){
        
        $UpdateUserService = new UpdateUserService();
        return $UpdateUserService->execute($request->all(),$id);
    }
    public function delete(string $id){
        
        $DeleteUserService = new DeleteUserService();
        return $DeleteUserService->execute($id);
    }
}