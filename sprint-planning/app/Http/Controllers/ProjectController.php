<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\RekapSprint;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::withCount('milestones')
            ->where('tags', 'like', '%active%')
            ->where('tags', 'like', '%project%')
            ->orderBy('name', 'asc')
            ->get();

        return view('projects.index', compact('projects'));
    }
}
