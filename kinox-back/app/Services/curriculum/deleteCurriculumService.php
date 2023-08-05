<?php
namespace App\Services\curriculum;


use App\Exceptions\AppError;
use App\Models\Curriculum;
use App\Models\User;
use Error;


class DeleteCurriculumService{
    public function execute($id){
       
        $curriculum = Curriculum::find($id);

        if (!$curriculum) {
            throw new AppError('Curriculum not found', 404);
        }
        $curriculum->delete();
        return [];
    }
}