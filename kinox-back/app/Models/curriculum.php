<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curriculum extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'curriculum';

    protected $fillable = [
        'work-area',
        'description',
        'banner-image',
        'revised'
    ];

}
