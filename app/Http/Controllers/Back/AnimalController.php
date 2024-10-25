<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\Back\Animal\StoreRequest;
use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('animals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

        $request->image->store(config('images.path'), 'public');
        if(isset($request->image)) {
            $extension = $request->image->getClientOriginalExtension();
            $filename = $request->input('name') . '.' . $extension;
            $request->image->storeAs(config('images.path'), $filename ,'public');
        }

        $request->session()->put('animal', $request->name);

        // session['animal' => $request->animal]
        Animal::create($request->validated());

        return "L'animal s'appelle " . $request->input('name');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
