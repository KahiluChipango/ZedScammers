<?php

namespace App\Http\Controllers;

use App\Models\ScamTrend;
use Illuminate\Http\Request;

class ScamTrendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scamTrends = ScamTrend::all();
        return view('scam_trends.index', compact('scamTrends'));
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
    public function show(ScamTrend $scamTrend)
    {
        return view('scam_trends.show', compact('scamTrend'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ScamTrend $scamTrend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ScamTrend $scamTrend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ScamTrend $scamTrend)
    {
        //
    }
}
