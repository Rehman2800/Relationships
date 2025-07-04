<?php

namespace App\Http\Controllers;

use App\Models\StdData;
use App\Models\students;
use Illuminate\Http\Request;

class StdDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
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
    public function show(StdData $stdData)
    {
        $stdData = StdData::with('student')->get();
        return $stdData;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StdData $stdData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StdData $stdData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StdData $stdData)
    {
        //
    }
}
