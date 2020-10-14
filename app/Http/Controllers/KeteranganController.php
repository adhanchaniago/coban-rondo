<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keterangan;
use App\Program;

class KeteranganController extends Controller
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
        return view('keterangan.tambah keterangan', compact('program'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $keterangan = new Keterangan;
        $keterangan->id_program = $request->id_program;
        $keterangan->nama_ket = $request->nama_ket;
        $keterangan->quantity_ket = $request->quantity_ket;
        $keterangan->save();

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
        $keterangan = Keterangan::findOrFail($id);
        return view('keterangan.edit keterangan', compact('keterangan'));
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
        $keterangan = Keterangan::findOrFail($id);
        $keterangan->nama_ket = $request->nama_ket;
        $keterangan->quantity_ket = $request->quantity_ket;
        $keterangan->save();

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
        $keterangan = Keterangan::findOrFail($id);
        $keterangan->delete();
        
        return redirect()->route('program.show', $keterangan->id_program);
    }
}
