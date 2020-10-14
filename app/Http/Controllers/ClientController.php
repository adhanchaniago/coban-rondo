<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
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
        $data_client = Client::all();

        return view('client.client', compact('data_client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('client.edit client', compact('client'));
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
        $client = Client::findOrFail($id);
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

        return redirect()->route('penawaran.show', $client->penawaran->id_penawaran);
    }

}
