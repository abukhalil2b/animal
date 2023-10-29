<?php

namespace App\Http\Controllers\Admin;

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
        ]);

         Animal::create([
            'color' => $request->color,

            'gender' => $request->gender,
            
            'number' => $request->number,

            'note' => $request->note,
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
        
        return view('admin.animal.show', compact('animal','maleSons','femaleSons'));
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
    public function delete(Animal $animal)
    {
        $animal->delete();

        return back();
    }
}
