<?php
namespace App\Services\curriculum;


use App\Exceptions\AppError;
use App\Models\Curriculum;
use App\Models\User;
use Error;


class GetAllCurriculumsService{
    public function execute(){
       
        $allCurriculums = Curriculum::with('curriculum_experience')->get();
        

        return $allCurriculums;
    }
}