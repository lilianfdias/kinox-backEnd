<?php
namespace App\Services\curriculum;


use App\Exceptions\AppError;
use App\Models\Curriculum;



class UpdateCurriculumService{
    public function execute(array $data,$id){
       
        $curriculum = Curriculum::find($id);

        if (!$curriculum) {
            throw new AppError('Curriculum not found', 404);
        }
        $curriculum->update($data);


        return $curriculum->refresh();
    }
}