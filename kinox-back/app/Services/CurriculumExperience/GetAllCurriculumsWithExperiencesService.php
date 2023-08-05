<?php

namespace App\Services\CurriculumExperience;

use App\Models\CurriculumExperience;

class GetAllCurriculumsWithExperiencesService{
    public function execute(){
        $allExperiences = CurriculumExperience::all();
        return $allExperiences;
    }

    public function executeForCurriculum($curriculumId){
        $experiences = CurriculumExperience::where('curriculum_id', $curriculumId)->get();
        return $experiences;
    }
}