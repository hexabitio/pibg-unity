<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardianship extends Model
{
    /** @use HasFactory<\Database\Factories\GuardianshipFactory> */
    use HasFactory;

    protected $fillable = [
        'guardian_id',
        'student_id',
        'relationship_id',
    ];
}
