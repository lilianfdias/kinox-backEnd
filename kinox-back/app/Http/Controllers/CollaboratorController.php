<?php

namespace App\Http\Controllers;

use App\Http\Requests\collaborators\CreateCollaboratorRequest;
use App\Http\Requests\collaborators\UpdateCollaboratorRequest;
use App\Services\Collaborator\CreateCollaboratorService;
use App\Services\Collaborator\DeleteCollaboratorService;
use App\Services\Collaborator\GetAllCollaboratorsService;
use App\Services\Collaborator\GetCollaboratorByIdService;
use App\Services\Collaborator\UpdateCollaboratorService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CollaboratorController extends Controller{
    public function create(CreateCollaboratorRequest $request, string $id){
        
        $data = $request->all();
        $createCollaboratorService = new  CreateCollaboratorService();
        $collaborator = $createCollaboratorService->execute($data, $id);
        return $collaborator;
    }
    public function get(){
        
        $getCollaboratorsService = new GetAllCollaboratorsService();
        $allCollaborators = $getCollaboratorsService->execute();
        return $allCollaborators;
    }

    public function getById(string $id)
    {
        $getCollaboratorByIdService = new GetCollaboratorByIdService();
        return $getCollaboratorByIdService->execute($id);
    }
    public function update(UpdateCollaboratorRequest $request, string $id){
        
        $UpdateCollaboratorService = new UpdateCollaboratorService();
        return $UpdateCollaboratorService->execute($request->all(),$id);
    }
    public function delete(string $id){
        
        $DeleteCollaboratorService = new DeleteCollaboratorService();
        return $DeleteCollaboratorService->execute($id);
    }
}