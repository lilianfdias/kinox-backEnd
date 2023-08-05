<?php
namespace App\Services\Collaborator;

use App\Exceptions\AppError;
use App\Models\Movie;
use Illuminate\Support\Facades\Log;


class CreateCollaboratorService{
    public function execute(array $data, string $id){
    

        // $experienceFound = CurriculumExperience::firstWhere('role',$data['role']);

        // if(!is_null($experienceFound)){
        //     throw new AppError ('Experiência já cadastrada',400);
        // }

        $movie = Movie::find($id);
        $collaborator = $movie->collaborators()->create($data);

        return $collaborator->refresh();
    }
}