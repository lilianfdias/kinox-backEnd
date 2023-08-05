<?php
namespace App\Services\Collaborator;


use App\Exceptions\AppError;
use App\Models\Collaborator;
use Illuminate\Support\Facades\Log;


class GetCollaboratorByIdService{
    public function execute($id){
       
        $collaborator = Collaborator::find($id);

        if (!$collaborator) {
            throw new AppError('Collaborator not found', 404);
        }

        return $collaborator;
    }
}
