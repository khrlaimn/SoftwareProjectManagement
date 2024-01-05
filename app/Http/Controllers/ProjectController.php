<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all(); // select * from projects
        return view('project.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            
        $validated = $request->validate([
            'name' =>'required|min:4|string|max:255',
            'start_date' =>'required|date',
            'end_date' =>'required|date',
            'duration' =>'required|min:1|Numeric',
            'leadDeveloper' =>'required|min:3|string',
            'developer'=>'required|min:3|string',
            'status' => 'min:3|string'
        ]);

        $project = new Project;
        $project->name = $request->name;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->duration = $request->duration;
        $project->leadDeveloper = $request->leadDeveloper;
        $project->developer = $request->developer;
        $project->status = $request->status;
        $project->save();

        return redirect()->route('project.index')
            ->withSuccess('New Poject added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('project.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('project.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('project.index');
    }
}
