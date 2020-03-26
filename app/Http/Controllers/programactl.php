<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\programa;
class programactl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $programas = programa::all()->toArray();
        return view('programa\index', compact('programas'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('programa\afegeixPrograma');
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
            'nom_programa' => 'required',
            'descripcio' => 'required',
            'tipus' => 'required',
            'classificacio' => 'required'
        ]);

        $nouprograma = new programa([
            'nom_programa' => $request->get('nom_programa'),
            'descripcio' => $request->get('descripcio'),
            'tipus' => $request->get('tipus'),
            'classificacio' => $request->get('classificacio')
        ]);
        $nouprograma->save();
        return redirect()->route('programa.create')->with('success', 'Dades afegides');
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
        $programas = programa::find($id);
        return view('programa.edit', compact('programas', 'id'));
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
        $this->validate($request, [
            'nom_programa' => 'required',
            'descripcio' => 'required',
            'tipus' => 'required',
            'classificacio' => 'required'
        ]);
        //$canal=new Canal();
        $programa = programa::find($id);
        $programa->nom_programa = $request->get('nom_programa');
        $programa->descripcio = $request->get('descripcio');
        $programa->tipus = $request->get('tipus');
        $programa->classificacio = $request->get('classificacio');
        $programa->save();
        return redirect()->route('programa.index')->with('success','Data updated');
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
        $programa = programa::find($id);
        $programa->delete();
        return redirect()->route('programa.index')->with('success','Data deleted');
    }
}
