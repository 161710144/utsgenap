<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entertaiment;
class EntertainmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etr = Entertaiment::all();
        return view('entertainment.index',compact('etr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('entertainment.create');
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
            'judul' => 'required|unique:entertaiments|max:255',
            'host' => 'required|max:255',
            'selebriti' => 'required|max:255',
            'kabar' => 'required|max:255',
            'riwayat' => 'required|max:255',
        ]);

        $etr = new Entertaiment;
        $etr->judul = $request->judul;
        $etr->host = $request->host;
        $etr->selebriti = $request->selebriti;
        $etr->kabar = $request->kabar;
        $etr->riwayat = $request->riwayat;
        $etr->save();
        return redirect()->route('etr.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $etr = Entertaiment::findOrFail($id);
        return view('entertainment.show',compact('etr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etr = Entertaiment::findOrFail($id);
        return view('entertainment.edit',compact('etr'));
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
            'selebriti' => 'required|max:255',
            'kabar' => 'required|max:255',
            'riwayat' => 'required|max:255'
        ]);
  
        // update data berdasarkan id
        $etr = Entertaiment::findOrFail($id);
        $etr->judul = $request->judul;
        $etr->host = $request->host;
        $etr->selebriti = $request->selebriti;
        $etr->kabar = $request->kabar;
        $etr->riwayat = $request->riwayat;
        $etr->save();
        return redirect()->route('etr.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etr = Entertaiment::findOrFail($id);
        $etr->delete();
        return redirect()->route('etr.index');
    }
}
