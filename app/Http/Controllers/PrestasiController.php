<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prestasi;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pre = Prestasi::all();
        return view('prestasi.index',compact('pre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prestasi.create');
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
            'piala' => 'required|max:255',
            'juara' => 'required|max:30',
            'tahun' => 'required|max:255'
        ]);

        $pre = new Prestasi;
        $pre->piala = $request->piala;
        $pre->juara = $request->juara;
        $pre->tahun= $request->tahun;
        $pre->save();
        return redirect()->route('pre.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pre = Prestasi::findOrFail($id);
        return view('prestasi.show',compact('pre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pre = Prestasi::findOrFail($id);
        return view('prestasi.edit',compact('pre'));
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
            'juara' => 'required|max:255',
            'piala' => 'required|max:30',
            'tahun' => 'required|max:255'
        ]);

        // update data berdasarkan id
        $pre = Prestasi::findOrFail($id);
        $pre->juara = $request->juara;
        $pre->piala = $request->piala;
        $pre->tahun = $request->tahun;
        $pre->save();
        return redirect()->route('pre.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pre = Prestasi::findOrFail($id);
        $pre->delete();
        return redirect()->route('pre.index');
    }
}
