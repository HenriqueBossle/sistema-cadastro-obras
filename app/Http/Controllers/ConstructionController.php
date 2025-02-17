<?php

namespace App\Http\Controllers;

use App\Models\Construction;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;

class ConstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $constructions = Construction::all();
        return view('constructions.index', compact('constructions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $constructions = Construction::all();
        return view('constructions.create', compact('constructions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'builder_name'=> 'required',
        'builder_phone'=> 'required',
        'sitemanager_name' => 'required',
        'sitemanager_phone' => 'required',
        'address' => 'required', 
        'type' => 'required',
        'status' => 'required',
        'volume' => 'required',
        'notes' => 'required',
    ]);

        $construction = new Construction();
        $construction->builder_name = $request->builder_name;
        $construction->builder_phone = $request->builder_phone;
        $construction->sitemanager_name = $request->sitemanager_name;
        $construction->sitemanager_phone = $request->sitemanager_phone;
        $construction->address = $request->address;
        $construction->type = $request->type;
        $construction->status = $request->status;
        $construction->volume = $request->volume;
        $construction->notes = $request->notes;
        $construction->save();

        return redirect('constructions')->with('success', 'Construction created successfully.');
    }

    /**
     * Display the specified resource.
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $construction = Construction::findOrFail($id);
        //$constructions = Construction::all();
        return view('constructions.edit', compact('construction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $construction = Construction::findOrFail($id);

            $construction->builder_name = $request->builder_name;
            $construction->builder_phone = $request->builder_phone;
            $construction->sitemanager_name = $request->sitemanager_name;
            $construction->sitemanager_phone = $request->sitemanager_phone;
            $construction->address = $request->address;
            $construction->type = $request->type;
            $construction->status = $request->status;
            $construction->volume = $request->volume;
            $construction->notes = $request->notes;

            $construction->save();

        return redirect('constructions')->with('success', 'Construction updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $construction = Construction::findOrFail($id);
        $construction->delete();
        return redirect('constructions')->with('success', 'Construction deleted successfully');
    }

    public function generatePDF($id)
    {
        $construction = Construction::findOrFail($id); 
        $pdf = PDF::loadView('constructions.pdf', compact('construction'));
        $pdf->setPaper('A4', 'portrait');
        return $pdf->download("obra-{$construction->id}.pdf");
    }
}
