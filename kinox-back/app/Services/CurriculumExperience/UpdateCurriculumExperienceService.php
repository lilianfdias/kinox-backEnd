<?php
namespace App\Services\CurriculumExperience;


use App\Exceptions\AppError;
use App\Models\CurriculumExperience;

class UpdateCurriculumExperienceService{
    public function execute(array $data,$id){
       
        $experience = CurriculumExperience::find($id);

        if (!$experience) {
            throw new AppError('Experience not found', 404);
        }
        $experience->update($data);


        return $experience->refresh();
    }
}