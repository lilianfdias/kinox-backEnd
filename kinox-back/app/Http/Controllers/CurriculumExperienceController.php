<?php

namespace App\Http\Controllers;

use App\Http\Requests\experience\CreateExperienceRequest;
use App\Http\Requests\experience\UpdateExperienceRequest;
use App\Services\curriculumExperience\CreateCurriculumExperienceService;
use App\Services\CurriculumExperience\DeleteCurriculumExperienceService;
use App\Services\CurriculumExperience\GetAllCurriculumsExperiencesService;
use App\Services\CurriculumExperience\GetCurriculumExperienceByIdService;
use App\Services\CurriculumExperience\UpdateCurriculumExperienceService;

class CurriculumExperienceController extends Controller{
    public function create(CreateExperienceRequest $request, string $cv_id){
        
        $data = $request->all();
        $createCurriculumExperienceService = new  CreateCurriculumExperienceService();
        $experience = $createCurriculumExperienceService->execute($data, $cv_id);
        return $experience;
    }

    public function get(){
        
        $getAllExperiencesService = new GetAllCurriculumsExperiencesService();
        $allExperiences = $getAllExperiencesService->execute();
        return $allExperiences;
    }
    public function getById(string $id)
    {
        $getCurriculumExperienceByIdService = new GetCurriculumExperienceByIdService();
       

        return $getCurriculumExperienceByIdService->execute($id);
    }

    public function update(UpdateExperienceRequest $request, string $id){
        
        $UpdateCurriculumExperienceService = new UpdateCurriculumExperienceService();
        return $UpdateCurriculumExperienceService->execute($request->all(),$id);
    }
    public function delete(string $id){
        
        $DeleteExperienceService = new DeleteCurriculumExperienceService();
        return $DeleteExperienceService->execute($id);
    }
}