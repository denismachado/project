<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Project;

class ProjectsController extends Controller
{
    public function index(){

        $projects = Project::all();

        return view('projects.index', ['projects' => $projects]);
//        return view('projects.index', compact($projects));
    }

    public function create(){

        return view ('projects.create');

    }

    public function store(Project $project){

        $validated = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required','max:10']
        ]);

        $project->create($validated);

//        $project = New Project();
//        $project->title = request('title');
//        $project->description = request('description');
//        $project->save();

        return redirect('/projects');

    }

    public function show(Project $project){

        return view('projects.show', compact('project'));

    }

    public function update(Project $project){

        $form_validated = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => 'required'
        ]);

        $project->update($form_validated);

        return redirect ('/projects/' . $project->id);

    }

    public function edit(Project $project){

        return view('projects.edit', compact('project'));
    }

//    public function edit($id){
//
//        $project = Project::findOrFail($id);
//
//        return view('projects.edit', compact('project'));
//    }

    public function destroy(Project $project){

        $project->delete();

        return redirect('/projects');
    }

//    public function destroy($id){
//
//        $project = Project::findOrFail($id);
//
//        $project->delete();
//
//        return redirect('/projects');
//    }
}
