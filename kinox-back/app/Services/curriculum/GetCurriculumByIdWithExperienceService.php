<?php

namespace App\Services\curriculum;

use App\Exceptions\AppError;
use App\Models\Curriculum;
use Illuminate\Support\Facades\Log;

class GetCurriculumByIdWithExperienceService{
    public function execute($id)
    {
        $curriculum = Curriculum::with('curriculum_experience')->find($id);

        if (!$curriculum) {
            throw new AppError('Curriculum not found', 404);
        }

        return $curriculum;
    }
}
