<?php

namespace App\Http\Controllers;

use App\Models\Organisation;
use Illuminate\Http\Request;

class OrganisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function show(Organisation $organisation)
    {
        $organisations=Organisation::where('type','organisation')->limit(5)->get();
        return view('ListOrganisation',['organisations'=>$organisations]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function edit(organisation $organisation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, organisation $organisation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(organisation $organisation)
    {
        //
    }
}