<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Followup;
use App\Penawaran;
use App\Sales;

class FollowupController extends Controller
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
        $penawaran = Penawaran::doesntHave('dealing')->get();
        $data_followup = Followup::whereIn('id_penawaran', $penawaran->pluck('id_penawaran'))->get();

        return view('followup.followup', compact('data_followup'));
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
        return view('followup.tambah followup', compact('penawaran','data_sales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $followup = new Followup();
        $followup->id_sales = $request->id_sales;
        $followup->id_penawaran = $request->id_penawaran;
        $followup->tgl_followup = $request->tgl_followup;
        $followup->responden = $request->responden;
        $followup->respon = $request->respon;
    
        $followup->save();

        return redirect()->route('penawaran.show',['id' => $request->id_penawaran]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $followup = Followup::findOrFail($id);
        $data_sales = Sales::all();
       return view('followup.edit followup', compact('followup','data_sales'));

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
        $followup = Followup::findOrFail($id);
        $followup->id_sales = $request->id_sales;
        $followup->tgl_followup = $request->tgl_followup;
        $followup->responden = $request->responden;
        $followup->respon = $request->respon;
        $followup->save();

        return redirect()->route('penawaran.show',['id' => $request->id_penawaran]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $followup = Followup::findOrFail($id);
        $followup->delete();
        
        return redirect()->route('penawaran.show', $followup->id_penawaran);
    }
}
