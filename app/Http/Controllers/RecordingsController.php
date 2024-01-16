<?php

namespace App\Http\Controllers;

use App\Models\Recordings;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RecordingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recordings = Recordings::all();

        return Inertia::render('Home', [
            'recordings' => $recordings
        ]);
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
    public function show(Recordings $recordings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recordings $recordings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recordings $recordings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recordings $recordings)
    {
        //
    }
}
