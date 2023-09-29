<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Models\Categories;
use Illuminate\Http\Request;
use League\CommonMark\Extension\Table\Table;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('dashboard.project.index', [
            'projects' => Projects::where('user_id', auth()->user()->id)->paginate(5),
            'title' => 'Project',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.project.create', [
            'title' => 'Create Project',
            'category' => Categories::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:100',
            'slug' => 'required|unique:projects',
            'categories_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:1024|dimensions:max_width=700,max_height=360,min_width=360,min_height=360',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('project-images');
        }
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 190);

        Projects::create($validatedData);
        return redirect('/dashboard/project')->with('success', 'New project has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(Projects $project)
    {
        return view('dashboard.project.show', [
            'projects' => $project,
            'title' => 'Project',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit(Projects $project)
    {
        return view('dashboard.project.edit', [
            'projects' => $project,
            'title' => 'Edit Project',
            'category' => Categories::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projects $project)
    {
        $rules = [
            'title' => 'required|max:100',
            'categories_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:1024|dimensions:max_width=700,max_height=360,min_width=360,min_height=360',
            'body' => 'required'
        ];

        if ($request->slug != $project->slug) {
            $rules['slug'] = 'required|unique:projects';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('project-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 190);

        Projects::where('id', $project->id)
            ->update($validatedData);
        return redirect('/dashboard/project')->with('success', 'Project has been update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projects $project)
    {
        if ($project->image) {
            Storage::delete($project->image);
        }
        Projects::destroy($project->id);
        return redirect('/dashboard/project')->with('success', 'Project has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Projects::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
