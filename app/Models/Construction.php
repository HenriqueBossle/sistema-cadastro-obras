<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Construction extends Model
{
    protected $fillable = [
        'builder_name',
        'builder_phone',
        'sitemanager_name',
        'sitemanager_phone',
        'address',
        'type',
        'status',
        'volume',
        'notes'
    ];
}
