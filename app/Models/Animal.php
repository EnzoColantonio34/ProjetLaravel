<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'birthday',
        'deathday',
        'color'
    ];

    protected $casts = [
        'birthday' => 'date:d-m-Y',
        'deathday' => 'date:d-m-Y',
        'color'=> 'color',
        'name' => 'name'
    ];
}
