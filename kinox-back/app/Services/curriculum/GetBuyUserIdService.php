<?php
namespace App\Services\curriculum;

use App\Models\Curriculum;
use Illuminate\Support\Facades\Log;

class GetBuyUserIdService{
    public function execute($userId){
    Log::debug("cheguei no service");
       
        $CurriculumsByUserId = Curriculum::where('user_id', $userId)
        ->with('curriculum_experience')
        ->get();
        

        return $CurriculumsByUserId;
    }
}