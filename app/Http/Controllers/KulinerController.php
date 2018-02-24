<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kuliner;
class KulinerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $kln = Kuliner::all();
        return view('kuliner.index',compact('kln'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kuliner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required|unique:kuliners|max:255',
            'nama_resto' => 'required|max:255',
            'makanan' => 'required|max:255',
            'harga' => 'required|max:255',
            'alamat' => 'required|max:255'
        ]);

        $kln = new Kuliner;
        $kln->judul = $request->judul;
        $kln->nama_resto = $request->nama_resto;
        $kln->makanan = $request->makanan;
        $kln->harga = $request->harga;
        $kln->alamat = $request->alamat;
        $kln->save();
        return redirect()->route('kln.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kln = Kuliner::findOrFail($id);
        return view('kuliner.show',compact('kln'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kln = Kuliner::findOrFail($id);
        return view('kuliner.edit',compact('kln'));
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
        $this->validate($request,[
            'judul' => 'required|max:255',
            'nama_resto' => 'required|max:255',
            'makanan' => 'required|max:255',
            'harga' => 'required|max:255',
            'alamat' => 'required|max:255'
        ]);

        // update data berdasarkan id
        $kln = Kuliner::findOrFail($id);
        $kln->judul = $request->judul;
        $kln->nama_resto = $request->nama_resto;
        $kln->makanan = $request->makanan;
        $kln->harga = $request->harga;
        $kln->alamat = $request->alamat;
        $kln->save();
        return redirect()->route('kln.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kln = Kuliner::findOrFail($id);
        $kln->delete();
        return redirect()->route('kln.index');
    }
}
