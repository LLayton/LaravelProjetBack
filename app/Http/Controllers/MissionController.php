<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;

use App\Models\Organisation;
use Illuminate\Support\Facades\Auth;

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
            'user_id'=> $request->id_user,
            'organisation_id' => $request->identifiant,
        ]);
        return redirect()->route('PageEntreprise');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mission $mission
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $Missions=Mission::all();
        $Organisations=Organisation::all();
        $user=Auth::user();
        $Missions=Mission::all();  
        return view('ListMission',['Missions'=>$Missions,'Organisations'=>$Organisations,'user'=>$user]);
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
