<?php

namespace App\Http\Controllers;

use App\Models\ScamType;
use Illuminate\Http\Request;

class ScamTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scamTypes = ScamType::all();
        return view('scam_types.index', compact('scamTypes'));
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
    public function show(ScamType $scamType)
    {
        return view('scam_types.show', compact('scamType'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ScamType $scamType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ScamType $scamType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ScamType $scamType)
    {
        //
    }
}
