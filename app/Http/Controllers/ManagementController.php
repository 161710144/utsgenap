<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Management;
class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $man = Management::all();
        return view('management.index',compact('man'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management.create');
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
            'nama' => 'required|max:255',
            'umur' => 'required|max:30',
            'alamat' => 'required|max:255'
        ]);

        $man = new Management;
        $man->nama = $request->nama;
        $man->umur = $request->umur;
        $man->alamat = $request->alamat;
        $man->save();
        return redirect()->route('man.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $man = Management::findOrFail($id);
        return view('management.show',compact('man'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $man = Management::findOrFail($id);
        return view('management.edit',compact('man'));
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
            'nama' => 'required|max:255',
            'umur' => 'required|max:30',
            'alamat' => 'required|max:255'
        ]);

        // update data berdasarkan id
        $man = Management::findOrFail($id);
        $man->nama = $request->nama;
        $man->umur = $request->umur;
        $man->alamat = $request->alamat;
        $man->save();
        return redirect()->route('man.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $man = Management::findOrFail($id);
        $man->delete();
        return redirect()->route('man.index');  
    }
}
