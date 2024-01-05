<?php

namespace App\Http\Controllers;

use App\Models\BusinessUnit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BusinessUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $businessUnits = businessUnit::all(); // select * from businessUnits
        return view('BusinessUnit.index',compact('businessUnits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        return view('BusinessUnit.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'picName' =>'required|min:3|string|max:255',
            'requestType'=>'required|min:3|string|max:255',
            'description' => 'required|min:3|string|max:500'
            
        ]);

        $businessUnit = new BusinessUnit;
        $businessUnit->picName = $request->picName;
        $businessUnit->requestType = $request->requestType;
        $businessUnit->description = $request->description;
        $businessUnit->save();

        return redirect()->route('BusinessUnit.index')
        ->withSuccess('New application added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(BusinessUnit $businessUnit)
    {
        return view('BusinessUnit.show',compact('businessUnit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BusinessUnit $businessUnit)
    {
        return view('BusinessUnit.edit',compact('businessUnit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BusinessUnit $businessUnit)
    {

        $validated = $request->validate([
            'picName' =>'required|min:3|string|max:255',
            'requestType'=>'required|min:3|string|max:255',
            'description' => 'required|min:3|string|max:500'

        ]);

        $businessUnit->update($request->all());

        return redirect()->route('BusinessUnit.index')
        ->withSuccess('Application record has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BusinessUnit $businessUnit)
    {
        $businessUnit->delete();
        return redirect()->route('BusinessUnit.index');
    }
}
