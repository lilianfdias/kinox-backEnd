<?php
namespace App\Services\CurriculumExperience;


use App\Exceptions\AppError;
use App\Models\CurriculumExperience;


class GetCurriculumExperienceByIdService{
    public function execute($id){
       
        $experience = CurriculumExperience::find($id);

        if (!$experience) {
            throw new AppError('Experience not found', 404);
        }

        return $experience;
    }
}