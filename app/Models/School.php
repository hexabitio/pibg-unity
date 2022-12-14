<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id',
        'name',
        'phone',
        'fax',
        'email',
        'address1',
        'address2',
        'address3',
        'city',
        'postcode',
        'state_iso_code',
        'country_alpha3',
    ];
}
