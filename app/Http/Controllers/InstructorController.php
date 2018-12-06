<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructor;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $instructores=Instructor::orderBy('id_instructor','DESC')->paginate(3);
        return view('Instructor.index')->with('instructores', $instructores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Instructor.create');
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
        $this->validate($request,[ 'nombre'=>'required', 'apellido'=>'required', 'cedula'=>'required', 'email'=>'required']);
        Instructor::create($request->all());
        return redirect()->route('instructor.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_instructor)
    {
        //
        $instructores=Instructor::find($id_instructor);
        return  view('instructor.show')->with('instructores', $instructores); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_instructor)
    {
        //
        $instructores=Instructor::find($id_instructor);
        return view('Instructor.edit')->with('instructores', $instructores); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_instructor)
    {
        //
        $this->validate($request,[ 'nombre'=>'required', 'apellido'=>'required', 'cedula'=>'required', 'email'=>'required']);

        Instructor::find($id_instructor)->update($request->all());
        return redirect()->route('instructor.index')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_instructor)
    {
        //
        Instructor::find($id_instructor)->delete();
        return redirect()->route('instructor.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
