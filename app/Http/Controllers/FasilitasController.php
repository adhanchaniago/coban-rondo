<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fasilitas;
use App\Program;

class FasilitasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_program)
    {
        $program = Program::findOrFail($id_program);
        return view('fasilitas.tambah fasilitas', compact('program'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fasilitas = new Fasilitas();
        $fasilitas->id_program = $request->id_program;
        $fasilitas->nama_fasilitas = $request->nama_fasilitas;
        $fasilitas->quantity_fasilitas = $request->quantity_fasilitas;

        $fasilitas->save();

        return redirect()->route('program.show', ['id' => $request->id_program]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('fasilitas.edit fasilitas', compact('fasilitas'));
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
        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->nama_fasilitas = $request->nama_fasilitas;
        $fasilitas->quantity_fasilitas = $request->quantity_fasilitas;
        $fasilitas->save();

        return redirect()->route('program.show', ['id' => $request->id_program]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->delete();
        
        return redirect()->route('program.show', $fasilitas->id_program);
    }
}
