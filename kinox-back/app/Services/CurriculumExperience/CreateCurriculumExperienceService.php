<?php
namespace App\Services\curriculumExperience;


use App\Exceptions\AppError;
use App\Models\Curriculum;
use App\Models\CurriculumExperience;
use App\Models\User;
use Error;
use Illuminate\Support\Facades\Log;


class CreateCurriculumExperienceService{
    public function execute(array $data, string $cv_id){
    

        $experienceFound = CurriculumExperience::firstWhere('role',$data['role']);

        if(!is_null($experienceFound)){
            throw new AppError ('Experiência já cadastrada',400);
        }

        $curriculum = Curriculum::find($cv_id);
        $experience = $curriculum->curriculum_experience()->create($data);

        return $experience->refresh();
    }
}