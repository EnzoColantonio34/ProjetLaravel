<?php

namespace App\Models;

use App\Models\Animals;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enclosures extends Model
{
    /** @use HasFactory<\Database\Factories\EnclosuresFactory> */
    use HasFactory;

    protected $fillable = ['name', 'animals_id'];

    public function animal() {
        return $this->belongsToMany(Animals::class, 'animal_enclosure');
    }
}
