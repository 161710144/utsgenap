<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ftv;
class FtvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fv = Ftv::all();
        return view('ftv.index',compact('fv'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('ftv.create');
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
            'judul' => 'required|unique:ftvs|max:255',
            'rilis' => 'required|max:255',
            'tempat' => 'required|max:255',
            'artis' => 'required|max:255',
            'watak' => 'required|max:255',
        ]);

        $fv = new Ftv;
        $fv->judul = $request->judul;
        $fv->rilis = $request->rilis;
        $fv->tempat = $request->tempat;
        $fv->artis = $request->artis;
        $fv->watak = $request->watak;
        $fv->save();
        return redirect()->route('fv.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fv = Ftv::findOrFail($id);
        return view('ftv.show',compact('fv'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fv = Ftv::findOrFail($id);
        return view('ftv.edit',compact('fv'));
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
            'rilis' => 'required|max:255',
            'tempat' => 'required|max:255',
            'artis' => 'required|max:255',
            'watak' => 'required|max:255'
        ]);

        // update data berdasarkan id
        $fv = Ftv::findOrFail($id);
        $fv->judul = $request->judul;
        $fv->rilis = $request->rilis;
        $fv->tempat = $request->tempat;
        $fv->artis = $request->artis;
        $fv->watak = $request->watak;
        $fv->save();
        return redirect()->route('fv.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fv = Ftv::findOrFail($id);
        $fv->delete();
        return redirect()->route('fv.index');
    }
}
