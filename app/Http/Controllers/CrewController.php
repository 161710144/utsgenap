<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crew;
class CrewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cw = Crew::all();
        return view('crew.index',compact('cw'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crew.create');
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
            'channel' => 'required|max:255',
            'nama' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'jenis_kelamin' => 'required|max:255',
            'program' => 'required|max:255',
        ]);

        $cw = new Crew;
        $cw->channel = $request->channel;
        $cw->nama = $request->nama;
        $cw->jabatan = $request->jabatan;
        $cw->jenis_kelamin = $request->jenis_kelamin;
        $cw->program = $request->program;
        $cw->save();
        return redirect()->route('cw.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cw = Crew::findOrFail($id);
        return view('crew.show',compact('cw'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cw = Crew::findOrFail($id);
        return view('crew.edit',compact('cw'));
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
            'channel' => 'required|max:255',
            'nama' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'jenis_kelamin' => 'required|max:255',
            'program' => 'required|max:255'
        ]);

        // update data berdasarkan id
        $cw = Crew::findOrFail($id);
        $cw->channel = $request->channel;
        $cw->nama = $request->nama;
        $cw->jabatan = $request->jabatan;
        $cw->jenis_kelamin = $request->jenis_kelamin;
        $cw->program = $request->program;
        $cw->save();
        return redirect()->route('cw.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cw = Crew::findOrFail($id);
        $cw->delete();
        return redirect()->route('cw.index');
    }
}
