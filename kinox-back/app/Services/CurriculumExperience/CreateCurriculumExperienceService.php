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
    
        $curriculum = Curriculum::find($cv_id);
        
        $experienceFound = $curriculum->curriculum_experience()
            ->whereRaw('LOWER(role) = ?', [strtolower($data['role'])])
            ->first();

        if (!is_null($experienceFound)) {
            throw new AppError('Experiência já cadastrada para este currículo', 400);
        }

        $curriculum = Curriculum::find($cv_id);
        $experience = $curriculum->curriculum_experience()->create($data);

        return $experience->refresh();
    }
}