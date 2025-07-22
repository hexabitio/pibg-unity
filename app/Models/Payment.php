<?php

namespace App\Models;

use App\Helpers\TsIdGenerator;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    // Disable auto-incrementing since we're using custom IDs
    public $incrementing = false;

    protected $fillable = [
        'id',
        'collection_id',
        'amount',
        'payer_id',
        'description',
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
