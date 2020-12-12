<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category',
        'status',
        'volunteer_id',
        'description',
        'publisher_id',
        'w',
        'h',
    ];
}
