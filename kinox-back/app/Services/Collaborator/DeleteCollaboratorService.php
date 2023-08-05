<?php
namespace App\Services\Collaborator;


use App\Exceptions\AppError;
use App\Models\Collaborator;
use Error;


class DeleteCollaboratorService{
    public function execute($id){
       
        $collaborator = Collaborator::find($id);

        if (!$collaborator) {
            throw new AppError('Collaborator not found', 404);
        }
        $collaborator->delete();
        return [];
    }
}

