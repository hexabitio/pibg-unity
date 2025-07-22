<?php

namespace App\Models;

use App\Helpers\StudentIdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    const FIB_0 = '0';
    const FIB_1 = '1';

    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    protected $fillable = [
        'student_id',
        'person_id',
        'fib',
    ];
}
