<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dealing;
use App\Sales;
use App\Penawaran;


class DealingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_dealing = Dealing::all();

        return view('dealing.dealing', compact('data_dealing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_penawaran)
    {
        $penawaran = Penawaran::findOrFail($id_penawaran);
        $data_sales = Sales::all();
        return view('dealing.tambah dealing', compact('data_sales','penawaran'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dealing = new Dealing();
        $dealing->id_sales = $request->id_sales;
        $dealing->tgl_LKO = $request->tgl_LKO;
       
        $dealing->save();

        return redirect()->route('penawaran.show', ['id' => $request->id_penawaran]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dealing = Dealing::findOrFail($id);
        $data_sales = Sales::all();
        return view('dealing.edit dealing', compact('dealing','data_sales'));
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
        $dealing = Dealing::findOrFail($id);
        $dealing->id_sales = $request->id_sales;
        $dealing->tgl_LKO = $request->tgl_LKO;
        $dealing->save();

        return redirect()->route('penawaran.show', ['id' => $dealing->id_penawaran]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dealing = Dealing::findOrFail($id);
        $dealing->delete();
        
        return redirect()->route('penawaran.show', $dealing->id_penawaran);
    }
}
