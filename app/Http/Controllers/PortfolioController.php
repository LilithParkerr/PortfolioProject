<?php

namespace App\Http\Controllers;

use App\Models\Project;

class PortfolioController extends Controller
{
        public function index()
    {
        $projects = Project::with(['category', 'images'])
            ->latest()
            ->get();

        return view('portfolio', compact('projects'));
    }

    public function show(Project $project)
    {
        $project->load(['category', 'images']);

        return view('projects.show', compact('project'));
    }
}
