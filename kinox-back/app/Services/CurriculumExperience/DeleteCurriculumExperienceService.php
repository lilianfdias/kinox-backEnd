<?php
namespace App\Services\CurriculumExperience;


use App\Exceptions\AppError;
use App\Models\CurriculumExperience;
use Error;


class DeleteCurriculumExperienceService{
    public function execute($id){
       
        $curriculumExperience = CurriculumExperience::find($id);

        if (!$curriculumExperience) {
            throw new AppError('Experience not found', 404);
        }
        $curriculumExperience->delete();
        return [];
    }
}