<?php

namespace App\Http\Controllers\Normal;

use App\Models\Animal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // return $request->all();

        $request->validate([
            'number' => 'required|numeric',
            'parent_id' => 'required|numeric',
            'color' => 'required'
        ]);

        Animal::create([

            'dob' => $request->dob,

            'gender' => $request->gender,

            'number' => $request->number,

            'color' => $request->color,

            'note' => $request->note,

            'parent_id' => $request->parent_id,

        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        $maleSons = $animal->maleSons;

        $femaleSons = $animal->femaleSons;
        
        $sons = Animal::where('parent_id',$animal->id)
        ->latest('dob')
        ->get();

        return view('normal.animal.show', compact('animal','maleSons','femaleSons','sons'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        //
    }
}
