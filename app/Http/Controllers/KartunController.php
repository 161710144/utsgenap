<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kartun;
class KartunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ktn = Kartun::all();
        return view('kartun.index',compact('ktn'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kartun.create');
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
            'judul' => 'required|unique:kartuns|max:255',
            'channel' => 'required|max:255',
            'tokoh' => 'required|max:255',
            'watak' => 'required|max:255',
            'singkat_cerita' => 'required|max:255',
        ]);

        $ktn = new Kartun;
        $ktn->judul = $request->judul;
        $ktn->channel = $request->channel;
        $ktn->tokoh = $request->tokoh;
        $ktn->watak = $request->watak;
        $ktn->singkat_cerita = $request->singkat_cerita;
        $ktn->save();
        return redirect()->route('ktn.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ktn = Kartun::findOrFail($id);
        return view('kartun.show',compact('ktn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ktn = Kartun::findOrFail($id);
        return view('kartun.edit',compact('ktn'));
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
            'channel' => 'required|max:255',
            'tokoh' => 'required|max:255',
            'watak' => 'required|max:255',
            'singkat_cerita' => 'required|max:255'
        ]);

        // update data berdasarkan id
        $ktn = Kartun::findOrFail($id);
        $ktn->judul = $request->judul;
        $ktn->channel = $request->channel;
        $ktn->tokoh = $request->tokoh;
        $ktn->watak = $request->watak;
        $ktn->singkat_cerita = $request->singkat_cerita;
        $ktn->save();
        return redirect()->route('ktn.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ktn = Kartun::findOrFail($id);
        $ktn->delete();
        return redirect()->route('ktn.index');
    }
}
