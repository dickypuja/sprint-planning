<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RekapSprint;

class RekapSprintController extends Controller
{

    // Method untuk menampilkan RekapSprint berdasarkan project_name
    public function filterByProjectName(Request $request)
    {
        $projectName = $request->input('project_name');

        $rekapSprints = RekapSprint::when($projectName, function ($query, $projectName) {
            return $query->where('project', $projectName);
        })->orderBy('estimated_start', 'asc')->get();

        return view('rekap_sprints.index', compact('rekapSprints', 'projectName'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rekapSprints = RekapSprint::with('project')->get();
        return view('rekap_sprints.index', compact('rekapSprints'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
