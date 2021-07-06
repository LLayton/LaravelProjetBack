<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Organisation;
class MissionController extends Controller
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
        Mission::create([
            'reference'=>$request->reference,
            'title'=> $request->title,
            'comment' => $request->comment,
            'deposit' => $request->deposit,
            'type' => $request->type,
            'organisation_id' => $request->organisation_id,
        ]);
        return redirect()->route('PageEntreprise');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mission $mission
     * @return \Illuminate\Http\Response
     */
    public function show(Mission $mission)
    {

        $Missions=Mission::all();
        $Organisations=Organisation::all();

                    
        return view('ListFacture',['Missions'=>$Missions,'Organisations'=>$Organisations]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function edit(Mission $mission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mission $mission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mission $mission)
    {
        //
    }
}
