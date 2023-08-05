<?php
namespace App\Services\Collaborator;


use App\Exceptions\AppError;
use App\Models\Collaborator;

class UpdateCollaboratorService{
    public function execute(array $data,$id){
       
        $collaborator = Collaborator::find($id);

        if (!$collaborator) {
            throw new AppError('Collaborator not found', 404);
        }
        $collaborator->update($data);


        return $collaborator->refresh();
    }
}

