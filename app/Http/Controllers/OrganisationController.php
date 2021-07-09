<?php

namespace App\Http\Controllers;

use App\Models\Organisation;
use App\Models\Mission;
use App\Models\MissionLine;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Auth;
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
        Organisation::create([
            'slug'=>Uuid::uuid4(),
            'tel'=> $request->tel,
            'name' => $request->name,
            'address' => $request->address,
            'type' => $request->type,
            'email' => $request->email,
        ]);
        return redirect()->route('PageEntreprise');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function show(Organisation $organisation)
    {
        $organisations=Organisation::all();
        $user=Auth::user();
        return view('ListOrganisation',['organisations'=>$organisations,'user'=>$user]);

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
    public function destroy(Request $request)
    {
        //Je voulais faire une suppression par l'utilisateur d'une organisation mais je me demande si  
        //je lui laisse faire cette actions sachant que d'autre utilisateur en auraient besoins

        /*$id=$request->id;
        $user=Auth::user();
        //Avant de supprimer une organisation je doit en premier supprimer les éléments enfants
        $Missions=Mission::where('organisation_id',$id)->get();
        foreach($Missions as $mission){
            MissionLine::where('mission_id',$mission->id)->delete();
        }
        Mission::where('organisation_id',$id)->delete();
        Organisation::where('id',$id)->delete();
        $organisations=Organisation::all();
        $user=Auth::user();
        return view('ListOrganisation',['organisations'=>$organisations,'user'=>$user]);*/

    }
}
