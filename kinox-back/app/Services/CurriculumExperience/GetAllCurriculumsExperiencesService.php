<?php
namespace App\Services\CurriculumExperience;

use App\Models\CurriculumExperience;

class GetAllCurriculumsExperiencesService{
    public function execute(){
       
        $allExperiences = CurriculumExperience::all();
        return $allExperiences;
    }
}