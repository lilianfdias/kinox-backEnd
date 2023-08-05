<?php
namespace App\Services\Collaborator;

use App\Models\Collaborator;

class GetAllCollaboratorsService{
    public function execute(){
       
        $allCollaborators = Collaborator::all();
        return $allCollaborators;
    }
}