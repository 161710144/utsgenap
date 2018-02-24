<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brt = Berita::all();
        return view('berita.index',compact('brt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create');
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
            'judul' => 'required|unique:beritas|max:255',
            'host' => 'required|max:255',
            'berita_baru' => 'required|max:255',
            'berita_hangat' => 'required|max:255',
            'sumber' => 'required|max:255',
        ]);

        $brt = new Berita;
        $brt->judul = $request->judul;
        $brt->host = $request->host;
        $brt->berita_baru = $request->berita_baru;
        $brt->berita_hangat = $request->berita_hangat;
        $brt->sumber = $request->sumber;
        $brt->save();
        return redirect()->route('brt.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brt = Berita::findOrFail($id);
        return view('berita.show',compact('brt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brt = Berita::findOrFail($id);
        return view('berita.edit',compact('brt'));
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
            'host' => 'required|max:255',
            'berita_baru' => 'required|max:255',
            'berita_hangat' => 'required|max:255',
            'sumber' => 'required|max:255'
        ]);
  
        // update data berdasarkan id
        $brt = Berita::findOrFail($id);
        $brt->judul = $request->judul;
        $brt->host = $request->host;
        $brt->berita_baru = $request->berita_baru;
        $brt->berita_hangat = $request->berita_hangat;
        $brt->sumber = $request->sumber;
        $brt->save();
        return redirect()->route('brt.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brt = Berita::findOrFail($id);
        $brt->delete();
        return redirect()->route('brt.index');
    }
}
