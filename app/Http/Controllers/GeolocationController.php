<?php

namespace App\Http\Controllers;

use App\Models\Geolocation;
use Illuminate\Http\Request;

class GeolocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $geolocations = Geolocation::all();
        return view('geolocations.index', compact('geolocations'));
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
    public function show(Geolocation $geolocation)
    {
        return view('geolocations.show', compact('geolocation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Geolocation $geolocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Geolocation $geolocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Geolocation $geolocation)
    {
        //
    }
}
