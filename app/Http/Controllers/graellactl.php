<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\graella;

class graellactl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $graellas = graella::all()->toArray();
        return view('graella\index', compact('graellas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('graella\afegeixGraella');
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
        $this->validate($request, [
            'canal_id' => 'required',
            'programa_id' => 'required',
            'hora' => 'required',
            'dia' => 'required'
        ]);

        $nougraella = new graella([
            'canal_id' => $request->get('canal_id'),
            'programa_id' => $request->get('programa_id'),
            'hora' => $request->get('hora'),
            'dia' => $request->get('dia')
        ]);
        $nougraella->save();
        return redirect()->route('graella.create')->with('success', 'Dades afegides');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
