<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
    /** @use HasFactory<\Database\Factories\AnimalsFactory> */
    use HasFactory;

    protected $fillable = ['name', 'species_id'];

    public function specie() {
        return $this->belongsTo(Species::class, 'species_id');
    }

    public function enclosures() {
        return $this->belongsToMany(enclosures::class, 'animal_enclosure', 'enclosure_id', 'animal_id');
    }
}
