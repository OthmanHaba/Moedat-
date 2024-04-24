<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $machines = Machine::all();
        return Inertia::render('Machine/index', [
            'machines' => $machines,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Machine/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'rental_price' => 'required|numeric',
            'location' => 'required|string',
            'condition' => 'required|string',
            'purchase_date' => 'required|date',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageURL = $this->saveImage($request);
        Machine::create([
            'name' => $request->name,
            'category' => $request->category,
            'rental_price' => $request->rental_price,
            'location' => $request->location,
            'condition' => $request->condition,
            'purchase_date' => $request->purchase_date,
            'image' => $imageURL,
        ]);

        return to_route('machines.index');
    }

    public function saveImage($request)
    {
        $imageName = $request->name . '.' . $request->file('image')->extension();
        $path = $request->file('image')->storePubliclyAs('public/machines', $imageName);
        return asset('storage/machines/' . $imageName);
    }

    /**
     * Display the specified resource.
     */
    public function show(Machine $machine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Machine $machine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Machine $machine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Machine $machine)
    {
        //
    }
}
