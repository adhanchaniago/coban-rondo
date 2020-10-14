<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penawaran;
use App\Sales;
use App\Client;
use App\Program;
use App\Followup;

class PenawaranController extends Controller
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
         $data_penawaran = Penawaran::all();
         $jmlh = ['no_followup' => 0, 'followup' => 0, 'dealing' => 0];
         foreach($data_penawaran as $penawaran){
             if($penawaran->dealing != null){
                $jmlh['dealing']++;
             }elseif($penawaran->followup->isNotEmpty()){
                $jmlh['followup']++;
             }else{
                $jmlh['no_followup']++;
             }
         }

        return view('penawaran.penawaran', compact('data_penawaran', 'jmlh'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_sales = Sales::all();
        $data_program = Program::all();

        return view('penawaran.tambah penawaran', compact('data_sales','data_program'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client();
        $client->nama_client = $request->nama_client;
        $client->tgllahir_client = $request->tgllahir_client;
        $client->alamat = $request->alamat;
        $client->tlp_client = $request->tlp_client;
        $client->instansi = $request->instansi;
        $client->web = $request->web;
        $client->email = $request->email;
        $client->pic = $request->pic;
        $client->cp = $request->cp;
        $client->cr = $request->cr;
        $client->save();
 
        $penawaran = new Penawaran();
        $penawaran->id_client = $client->id_client;
        $penawaran->id_sales = $request->id_sales;
        $penawaran->id_program = $request->id_program;
        $penawaran->tgl_penawaran = $request->tgl_penawaran;
        $penawaran->tgl_pelaksanaan = $request->tgl_pelaksanaan;
        $penawaran->media = $request->media;
        $penawaran->mp = $request->mp;
        $penawaran->save();

        return redirect()->route('penawaran.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penawaran = Penawaran::findOrFail($id);

        return view('penawaran.detail penawaran', compact('penawaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_sales = Sales::all();
        $data_program = Program::all();
        $penawaran = Penawaran::findOrFail($id);

        return view('penawaran.edit penawaran', compact('penawaran', 'data_sales', 'data_program'));
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
        $penawaran = Penawaran::findOrFail($id);
        $penawaran->id_sales = $request->id_sales;
        $penawaran->id_program = $request->id_program;
        $penawaran->tgl_penawaran = $request->tgl_penawaran;
        $penawaran->tgl_pelaksanaan = $request->tgl_pelaksanaan;
        $penawaran->media = $request->media;
        $penawaran->mp = $request->mp;
        $penawaran->save();

        return redirect()->route('penawaran.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penawaran = Penawaran::findOrFail($id);
        $penawaran->delete();
        
        return redirect()->route('penawaran.index');
    }
}
