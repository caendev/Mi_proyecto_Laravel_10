<?php

namespace App\Http\Controllers;

use App\Models\Proximamente;
use Illuminate\Http\Request;

class ProximamenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view ('Proximante');
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
    public function show(Proximamente $proximamente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proximamente $proximamente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proximamente $proximamente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proximamente $proximamente)
    {
        //
    }
}
