<?php
namespace App\Services\curriculum;


use App\Exceptions\AppError;
use App\Models\Curriculum;
use App\Models\User;
use Error;
use Illuminate\Support\Facades\Log;


class CreateCurriculumService{
    public function execute(array $data, string $userid){

        $roleFound = Curriculum::firstWhere('work-area',$data['work-area']);

        if(!is_null($roleFound)){
            Log::error('Curriculum já cadastrado');
            throw new AppError ('Área de atuação já cadastrada',400);
        }
    
        $u = User::find($userid);

        $cv = $u->curriculum()->create($data);



        return $cv->refresh();
    }
}

    