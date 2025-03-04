<?php

namespace App\Models;

use App\Filters\Trait\EloquentFilterTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pos extends Model
{
    /** @use HasFactory<\Database\Factories\PosFactory> */
    use HasFactory, SoftDeletes, EloquentFilterTrait;

    protected $fillable = [
        'region_id',
        'name',
        'phone',
        'address',
        'latitude',
        'longitude',
        'status',
    ];

}
