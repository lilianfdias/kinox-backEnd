<?php
namespace App\Services\curriculum;


use App\Exceptions\AppError;
use App\Models\Curriculum;
use App\Models\User;
use Error;
use Illuminate\Support\Facades\Log;


class CreateCurriculumService{
    public function execute(array $data, string $userid){

        $cvUser = Curriculum::where('user_id', $userid)->get();

        for ($i = 0; $i < count($cvUser); $i++) {
            if ($cvUser[$i]->work_area === $data['work_area']) {
                Log::error('Área de atuação já cadastrada');
                throw new AppError('Área de atuação já cadastrada', 400);
            }
        };

    
        $u = User::find($userid);

        $cv = $u->curriculum()->create($data);



        return $cv->refresh();
    }
}

    