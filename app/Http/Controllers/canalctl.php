<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\canal;

class canalctl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $canals = canal::all()->toArray();
        return view('canal\index', compact('canals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('canal\afegeixCanal');
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
            'nom_canal' => 'required',
            'image' => 'required'
        ]);

        $noucanal = new canal([
            'nom_canal' => $request->get('nom_canal'),
            'image' => $request->get('image')
        ]);
        $noucanal->save();
        return redirect()->route('canal.create')->with('success', 'Dades afegides');
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
        $canals = canal::find($id);
        return view('canal.edit', compact('canals', 'id'));
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
            'nom_canal' => 'required',
            'image' => 'required'
        ]);
        //$canal=new Canal();
        $canal = canal::find($id);
        $canal->nom_canal = $request->get('nom_canal');
        $canal->image = $request->get('image');
        $canal->save();
        return redirect()->route('canal.index')->with('success', 'Data updated');
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
        $canal = canal::find($id);
        $canal->delete();
        return redirect()->route('canal.index')->with('success','Data deleted');
    }
}
