<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bakat;
class BakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bkt = Bakat::all();
        return view('bakat.index',compact('bkt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('bakat.create');
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
            'judul' => 'required|unique:bakats|max:255',
            'peserta' => 'required|max:255',
            'bakat' => 'required|max:255',
            'tayang' => 'required|max:255',
            'voting' => 'required|Integer:bakats|max:500',
        ]);

        $bkt = new Bakat;
        $bkt->judul = $request->judul;
        $bkt->peserta = $request->peserta;
        $bkt->bakat = $request->bakat;
        $bkt->tayang = $request->tayang;
        $bkt->voting = $request->voting;
        $bkt->save();
        return redirect()->route('bkt.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bkt = Bakat::findOrFail($id);
        return view('bakat.show',compact('bkt'));
    }

    /*bakat    * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bkt = Bakat::findOrFail($id);
        return view('bakat.edit',compact('bkt'));
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
            'judul' => 'required|unique:ftvs|max:255',
            'peserta' => 'required|max:255',
            'bakat' => 'required|max:255',
            'tayang' => 'required|max:255',
            'voting' => 'required|Integer:bakats|max:500'
        ]);
  
        // update data berdasarkan id
        $bkt = Bakat::findOrFail($id);
        $bkt->judul = $request->judul;
        $bkt->peserta = $request->peserta;
        $bkt->bakat = $request->bakat;
        $bkt->tayang = $request->tayang;
        $bkt->voting = $request->voting;
        $bkt->save();
        return redirect()->route('bkt.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bkt = Bakat::findOrFail($id);
        $bkt->delete();
        return redirect()->route('bkt.index');
    }
}
