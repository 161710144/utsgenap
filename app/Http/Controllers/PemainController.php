<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemain;
class PemainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pem = Pemain::all();
        return view('pemain.index',compact('pem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('pemain.create');
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
            'nama' => 'required|max:255',
            'nik' => 'required|unique:pemains|max:255',
            'umur' => 'required|max:30',
            'alamat' => 'required|max:255'
        ]);

        $pem = new Pemain;
        $pem->nama = $request->nama;
        $pem->nik = $request->nik;
        $pem->umur = $request->umur;
        $pem->alamat = $request->alamat;
        $pem->save();
        return redirect()->route('pem.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pem = Pemain::findOrFail($id);
        return view('pemain.show',compact('pem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pem = Pemain::findOrFail($id);
        return view('pemain.edit',compact('pem'));
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
            'nama' => 'required|max:255',
            'nik' => 'required|unique:pemains|max:255',
            'umur' => 'required|max:30',
            'alamat' => 'required|max:255'
        ]);

        // update data berdasarkan id
        $pem = Pemain::findOrFail($id);
        $pem->nama = $request->nama;
        $pem->nik = $request->nik;
        $pem->umur = $request->umur;
        $pem->alamat = $request->alamat;
        $pem->save();
        return redirect()->route('pem.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pem = Pemain::findOrFail($id);
        $pem->delete();
        return redirect()->route('pem.index');  
    }
    
}
