<?php

namespace App\Models;

use App\Helpers\TsIdGenerator;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    // Disable auto-incrementing since we're using custom IDs
    public $incrementing = false;

    protected $fillable = [
        'id',
        'name',
        'description',
        'status',
        'start_date',
        'end_date',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($collection) {
            if (empty($collection->id)) {
                $collection->id = TsIdGenerator::generate();
            }
        });
    }
}
