<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Api\V1\StoreEnclosureRequest;
use App\Models\Enclosures;

class EnclosuresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enclosures = Enclosure::with('animal')->get();
        return $enclosures;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEnclosureRequest $request)
    {
        $validated = $request->validated();
        $enclosures = Enclosures::create($validated);

        return response()->json($enclosures,201);
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
}
