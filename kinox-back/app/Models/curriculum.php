<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Curriculum extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'curriculum';

    protected $fillable = [
        'work-area',
        'description',
        'banner-image',
        'revised',
        'user_id'
    ];
    public function curriculum_experience(): HasMany
    {
        return $this->hasMany(CurriculumExperience::class);
    }
}
