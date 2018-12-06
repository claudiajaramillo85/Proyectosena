<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cargador;

class CargadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cargadores=Cargador::orderBy('id_cargador','DESC')->paginate(3);
        return view('Cargador.index')->with('cargadores', $cargadores); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Cargador.create');
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
        $this->validate($request,[ 'serial_cargador'=>'required', 'novedades'=>'required']);
        Cargador::create($request->all());
        return redirect()->route('cargador.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_cargador)
    {
        //
        $cargadores=Cargador::find($id_cargador);
        return  view('cargador.show')->with('cargadores', $cargadores); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_cargador)
    {
        //
        $cargadores=Cargador::find($id_cargador);
        return view('Cargador.edit')->with('cargadores', $cargadores); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_cargador)
    {
        //
         $this->validate($request,[ 'serial_cargador'=>'required', 'novedades'=>'required']);

        Cargador::find($id_cargador)->update($request->all());
        return redirect()->route('cargador.index')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_cargador)
    {
        //
        //
        Cargador::find($id_cargador)->delete();
        return redirect()->route('cargador.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
