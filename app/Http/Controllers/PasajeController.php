<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePasaje;
use App\Models\Pasaje;
use Illuminate\Http\Request;

class PasajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasajes = Pasaje::orderBy('id','desc')->paginate(10);
        return view('pasajes.index',compact('pasajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasajes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePasaje $request)
    {
        $pasaje = Pasaje::create($request->all());
        return redirect()->route('pasajes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Pasaje $pasaje)
    {
        return view('pasajes.edit', compact('pasaje'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePasaje $request, Pasaje $pasaje)
    {
        $pasaje->update($request->all());
        return redirect()->route('pasajes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasaje $pasaje)
    {
        $pasaje->delete();
        return redirect()->route('pasajes.index');
    }
}
