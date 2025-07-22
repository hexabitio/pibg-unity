<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /** @use HasFactory<\Database\Factories\PersonFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address1',
        'address2',
        'address3',
        'city',
        'state',
        'postcode',
        'is_alumni',
    ];

    protected $cast = [
        'is_alumni' => 'boolean',
    ];
}
