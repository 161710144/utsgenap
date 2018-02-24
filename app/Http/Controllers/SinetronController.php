<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sinetron;
class SinetronController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $snt = Sinetron::all();
        return view('sinetron.index',compact('snt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sinetron.create');
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
            'judul' => 'required|unique:sinetrons|max:255',
            'tema' => 'required|max:255',
            'pemeran_utama' => 'required|max:255',
            'durasi' => 'required|max:255',
            'jumlah_episode' => 'required|Integer:sinetrons'
        ]);

        $snt = new Sinetron;
        $snt->judul = $request->judul;
        $snt->tema = $request->tema;
        $snt->pemeran_utama = $request->pemeran_utama;
        $snt->durasi = $request->durasi;
        $snt->jumlah_episode = $request->jumlah_episode;
        $snt->save();
        return redirect()->route('snt.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $snt = Sinetron::findOrFail($id);
        return view('sinetron.show',compact('snt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $snt = Sinetron::findOrFail($id);
        return view('sinetron.edit',compact('snt'));
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
            'tema' => 'required|max:255',
            'pemeran_utama' => 'required|max:255',
            'durasi' => 'required|max:255',
            'jumlah_episode' => 'required|Integer:sinetrons'
        ]);

        // update data berdasarkan id
        $snt = Sinetron::findOrFail($id);
        $snt->judul = $request->judul;
        $snt->tema = $request->tema;
        $snt->pemeran_utama = $request->pemeran_utama;
        $snt->durasi = $request->durasi;
        $snt->jumlah_episode = $request->jumlah_episode;
        $snt->save();
        return redirect()->route('snt.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $snt = Sinetron::findOrFail($id);
        $snt->delete();
        return redirect()->route('snt.index');
    }
}
