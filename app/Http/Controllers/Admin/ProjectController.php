<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = \App\Models\Project::with('category')
        ->latest()
        ->get();

    return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();

    return view('admin.projects.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
   

           $validated = $request->validate([
        'category_id' => ['required', 'exists:categories,id'],
        'title' => ['required', 'string', 'max:255'],
        'slug' => ['required', 'string', 'max:255', 'unique:projects,slug'],
        'description' => ['required', 'string'],
        'images' => ['nullable', 'array'],
        'images.*' => ['image', 'max:5120'],
    ]);

    $project = Project::create([
        'category_id' => $validated['category_id'],
        'title' => $validated['title'],
        'slug' => $validated['slug'],
        'description' => $validated['description'],
    ]);

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $index => $image) {
            $path = $image->store('projects', 'public');

            $project->images()->create([
                'image_path' => $path,
                'sort_order' => $index,
            ]);
        }
    }

    return redirect()
        ->route('admin.projects.index')
        ->with('success', 'Project created successfully!'); 

    Project::create($validated);

    return redirect()
        ->route('admin.projects.index')
        ->with('success', 'Project created successfully!');
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
