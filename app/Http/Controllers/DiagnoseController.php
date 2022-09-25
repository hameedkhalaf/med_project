<?php

namespace App\Http\Controllers;

use App\Models\Diagnose;
use Illuminate\Http\Request;

class DiagnoseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Diagnose::all();
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
        $diagnose = new Diagnose;
        $diagnose->reservation_id =$request->reservation_id;
        $diagnose->diagnose =$request->diagnose;
        $diagnose->medications =$request->medications;
        $diagnose->date =$request->date;
        $diagnose->note =$request->note;
        $diagnose->save();
        return $diagnose;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diagnose  $diagnose
     * @return \Illuminate\Http\Response
     */
    public function show(Diagnose $diagnose)
    {
        $diagnose = Diagnose::find($id);
        if(!$diagnose)
        {
            return ["result"=>"No diagnose found"];
        }
        else
        return $diagnose;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diagnose  $diagnose
     * @return \Illuminate\Http\Response
     */
    public function edit(Diagnose $diagnose)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diagnose  $diagnose
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diagnose $diagnose)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diagnose  $diagnose
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diagnose $diagnose)
    {
        //
    }
}
