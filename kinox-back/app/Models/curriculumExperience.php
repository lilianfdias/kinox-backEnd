<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurriculumExperience extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'curriculum_experience';

    protected $fillable = [
        'role',
        'description',
        'start-date',
        'end-date',
        'curriculum_id'
    ];
}
