<?php

namespace App\Http\Controllers;

use App\Models\ReportedNumber;
use Illuminate\Http\Request;

class ReportedNumberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reportedNumbers = ReportedNumber::all();
        return view('reported_numbers.index', compact('reportedNumbers'));
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
    public function show(ReportedNumber $reportedNumber)
    {
        return view('reported_numbers.show', compact('reportedNumber'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReportedNumber $reportedNumber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ReportedNumber $reportedNumber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReportedNumber $reportedNumber)
    {
        //
    }
}
