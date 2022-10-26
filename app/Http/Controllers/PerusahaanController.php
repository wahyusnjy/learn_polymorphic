<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perusahaan = Perusahaan::all();

        return view('perusahaan.index')
        ->with('perusahaan',$perusahaan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perusahaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'npwp' => 'required'
        ]);

        Perusahaan::create([
            'name' => $request->name,
            'address' => $request->address,
            'npwp'=> $request->npwp,
        ]);

        return redirect('/perusahaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function show(Perusahaan $perusahaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perusahaan $perusahaan,$id)
    {
        $perusahaan = Perusahaan::find($id);
        return view('perusahaan.edit')
        ->with('perusahaan', $perusahaan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'npwp' => 'required'
        ]);

        Perusahaan::where('id',$id)->update([
            'name' => $request->name,
            'address' => $request->address,
            'npwp'=> $request->npwp,
        ]);

        return redirect('/perusahaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perusahaan $perusahaan,$id)
    {
        $delete = Perusahaan::find($id);
        $delete->delete();
        return redirect('/perusahaan');
    }
}
