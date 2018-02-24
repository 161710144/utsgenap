<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wisata;
class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wst = Wisata::all();
        return view('wisata.index',compact('wst'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wisata.create');
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
            'judul' => 'required|unique:wisatas|max:255',
            'tempat' => 'required|max:255',
            'wilayah' => 'required|max:255',
            'provinsi' => 'required|max:255',
            'cuaca' => 'required|max:255'
        ]);

        $wst = new Wisata;
        $wst->judul = $request->judul;
        $wst->tempat = $request->tempat;
        $wst->wilayah = $request->wilayah;
        $wst->provinsi = $request->provinsi;
        $wst->cuaca = $request->cuaca;
        $wst->save();
        return redirect()->route('wst.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wst = Wisata::findOrFail($id);
        return view('wisata.show',compact('wst'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $wst = Wisata::findOrFail($id);
        return view('wisata.edit',compact('wst'));
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
            'tempat' => 'required|max:255',
            'wilayah' => 'required|max:255',
            'provinsi' => 'required|max:255',
            'cuaca' => 'required|max:255'
        ]);

        // update data berdasarkan id
        $wst = Wisata::findOrFail($id);
        $wst->judul = $request->judul;
        $wst->tempat = $request->tempat;
        $wst->wilayah = $request->wilayah;
        $wst->provinsi = $request->provinsi;
        $wst->cuaca = $request->cuaca;
        $wst->save();
        return redirect()->route('wst.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wst = Wisata::findOrFail($id);
        $wst->delete();
        return redirect()->route('wst.index');
    }
}
