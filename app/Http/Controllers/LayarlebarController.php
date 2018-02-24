<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Layarlebar;
class LayarlebarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lyr = Layarlebar::all();
        return view('layarlebar.index',compact('lyr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layarlebar.create');
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
            'judul' => 'required|unique:layarlebars|max:255',
            'rilis' => 'required|max:255',
            'produksi' => 'required|max:255',
            'sutradara' => 'required|max:255',
            'rating' => 'required|max:255'
        ]);

        $lyr = new Layarlebar;
        $lyr->judul = $request->judul;
        $lyr->rilis = $request->rilis;
        $lyr->produksi = $request->produksi;
        $lyr->sutradara = $request->sutradara;
        $lyr->rating = $request->rating;
        $lyr->save();
        return redirect()->route('lyr.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lyr = Layarlebar::findOrFail($id);
        return view('layarlebar.show',compact('lyr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lyr = Layarlebar::findOrFail($id);
        return view('layarlebar.edit',compact('lyr'));
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
            'produksi' => 'required|max:255',
            'sutradara' => 'required|max:255',
            'rating' => 'required|max:255'
        ]);

        // update data berdasarkan id
        $lyr = Layarlebar::findOrFail($id);
        $lyr->judul = $request->judul;
        $lyr->rilis = $request->rilis;
        $lyr->produksi = $request->produksi;
        $lyr->sutradara = $request->sutradara;
        $lyr->rating = $request->rating;
        $lyr->save();
        return redirect()->route('lyr.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lyr = Layarlebar::findOrFail($id);
        $lyr->delete();
        return redirect()->route('lyr.index');
    }
}
