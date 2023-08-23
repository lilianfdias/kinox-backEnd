<?php

namespace App\Http\Controllers;

use App\Exceptions\AppError;
use App\Http\Requests\curriculum\CreateCurriculumRequest;
use App\Http\Requests\curriculum\UpdateCurriculumRequest;
use App\Models\User;
use App\Services\curriculum\CreateCurriculumService;
use App\Services\curriculum\DeleteCurriculumService;
use App\Services\curriculum\GetAllCurriculumsService;
use App\Services\curriculum\GetBuyUserIdService;
use App\Services\curriculum\GetCurriculumByIdService;
use App\Services\curriculum\GetCurriculumByIdWithExperienceService;
use App\Services\curriculum\UpdateCurriculumService;
use App\Services\CurriculumExperience\GetAllCurriculumsExperiencesService;
use App\Services\CurriculumExperience\GetAllCurriculumsWithExperiencesService;
use Illuminate\Support\Facades\Auth;

class CurriculumController extends Controller{
    public function create(CreateCurriculumRequest $request){
        $data = $request->all();
        $createCurriculumService = new CreateCurriculumService();
        $curriculum = $createCurriculumService->execute($data, Auth::id());

        return $curriculum;
    }

    public function get(){
        
        $getAllCurriculumsService = new GetAllCurriculumsService();
        $allCurriculums = $getAllCurriculumsService->execute();
        return $allCurriculums;
    }
    public function getById(string $id)
    {
        $getCurriculumByIdService = new GetCurriculumByIdService();
       

        return $getCurriculumByIdService->execute($id);
    }

    public function update(UpdateCurriculumRequest $request, string $id){
        
        $UpdateCurriculumService = new UpdateCurriculumService();
        return $UpdateCurriculumService->execute($request->all(),$id);
    }
    public function delete(string $id){
        
        $DeleteCurriculumService = new DeleteCurriculumService();
        return $DeleteCurriculumService->execute($id);
    }
    public function getWithExperiences(){
        $getAllCurriculumsService = new GetAllCurriculumsService();
        $allCurriculums = $getAllCurriculumsService->execute();
    
        $curriculumsWithExperiences = [];
    
        foreach ($allCurriculums as $curriculum) {
            $getAllCurriculumsExperiencesService = new GetAllCurriculumsWithExperiencesService();
            $experiences = $getAllCurriculumsExperiencesService->executeForCurriculum($curriculum->id);
    
            $curriculumWithExperiences = [
                'curriculum' => $curriculum,
                'experiences' => $experiences,
            ];
    
            $curriculumsWithExperiences[] = $curriculumWithExperiences;
        }
    
        return $curriculumsWithExperiences;
    }
    public function getByIdWithExperiences(string $id)
    {
        $getCurriculumByIdWithExperienceService = new GetCurriculumByIdWithExperienceService();
        $curriculumWithExperiences = $getCurriculumByIdWithExperienceService->execute($id);

    return $curriculumWithExperiences;
    }
    public function getByUserIdWithExperiences(){
        $getByUserId = new GetBuyUserIdService();
        $curriculumsByUserId = $getByUserId->execute(Auth::id());
        return $curriculumsByUserId;
    }
}