<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Animals;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreAnimalRequest;

class AnimalsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals = Animals::with('specie')->get();
        return $animals;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnimalRequest $request)
    {
        $validated = $request->validated();
        // $animal = Animals::create($validated);

        $animal = new Animals();
        $animal->name = $validated['name'];
        $specie = Species::where('id', $validated->species_id)->first();
        $animal->specie()->associate();
        $animal->save();

        return response()->json($animal, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function assign_enclosure(Request $request) {
        $animal = Animals::where('id', $request->anumal_id)->first();
        $enclosure = Enclosures::where('id',$request->enclosure_id)->first();

        $animal->enclosures()->attach($enclosure);
        return response()->json('Associé', 200);
    }
}
