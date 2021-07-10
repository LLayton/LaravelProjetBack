<?php

namespace App\Http\Controllers;
use App\Models\Mission;
use App\Models\MissionLine;
use Illuminate\Http\Request;
use App\Models\Organisation;
use Illuminate\Support\Facades\Auth;

class MissionLinesController extends Controller
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
        MissionLine::create([
            'title'=> $request->title,
            'unity'=> $request->unity,    
            'quantity'=> $request->quantity,
            'price'=> $request->price,
            'mission_id'=> $request->mission_id,
        ]);
        return redirect()->route('PageMission');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MissionLine  $mission_lines
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        
        $Organisations=Organisation::all();
        $Mission=Mission::where('id',$request->id_Mission)->get();
        $MissionsLines=MissionLine::where('mission_id',$request->id_Mission)->get();
        return view('DetailsMission',['Organisations'=>$Organisations,'Mission'=>$Mission,'MissionsLines'=>$MissionsLines]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mission_lines  $mission_lines
     * @return \Illuminate\Http\Response
     */
    public function edit(MissionLine $mission_lines)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mission_lines  $mission_lines
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MissionLine $mission_lines)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mission_lines  $mission_lines
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id=$request->id_ligne;        
        MissionLine::where('id',$id)->delete();
        return redirect()->route('PageMission');    
    }
}
