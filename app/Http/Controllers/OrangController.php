<?php

namespace App\Http\Controllers;

use App\Models\Orang;
use Illuminate\Http\Request;

class OrangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orang = Orang::all();
        return view('orang.index')
        ->with('orang',$orang);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orang.create');
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
            'contact' => 'required'
        ]);

        Orang::create([
            'name' => $request->name,
            'address' => $request->address,
            'contact'=> $request->contact,
        ]);

        return redirect('/orang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orang  $orang
     * @return \Illuminate\Http\Response
     */
    public function show(Orang $orang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orang  $orang
     * @return \Illuminate\Http\Response
     */
    public function edit(Orang $orang,$id)
    {
        $orang = Orang::find($id);
        return view('orang.edit')
        ->with('orang',$orang);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orang  $orang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'contact' => 'required'
        ]);

        Orang::where('id',$id)->update([
            'name' => $request->name,
            'address' => $request->address,
            'contact'=> $request->contact,
        ]);

        return redirect('/orang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orang  $orang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orang $orang, $id)
    {
        $delete = Orang::find($id);
        $delete->delete();

        return redirect('/orang');
    }
}
