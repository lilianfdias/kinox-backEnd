<?php
namespace App\Services\curriculum;


use App\Exceptions\AppError;
use App\Models\Curriculum;
use App\Models\User;
use Error;
use Illuminate\Support\Facades\Log;


class GetCurriculumByIdService{
    public function execute($id){
       
        $curriculum = Curriculum::find($id);

        if (!$curriculum) {
            throw new AppError('Curriculum not found', 404);
        }

        return $curriculum;
    }
}