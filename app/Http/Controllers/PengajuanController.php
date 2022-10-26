<?php

namespace App\Http\Controllers;

use App\Models\Ecommerce;
use App\Models\Orang;
use App\Models\Pengajuan;
use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengajuan = Pengajuan::all();

        return view('pengajuan.index')
        ->with('pengajuan',$pengajuan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pt = Perusahaan::all();
        $op = Orang::all();
        $ec = Ecommerce::all();
        return view('pengajuan.create')
        ->with('pt',$pt)
        ->with('op',$op)
        ->with('ec',$ec);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengajuan = new Pengajuan(['name' => $request->name]);

        if($request->vendor == "company") {
            $vendor1 = Perusahaan::find($request->vendor_id);
            $pengajuan = $vendor1->vendors()->save($pengajuan);
        } elseif($request->vendor == "privateperson") {
            $vendor2 = Orang::find($request->vendor_id);
            $pengajuan = $vendor2->vendors()->save($pengajuan);
        } elseif($request->vendor == "ecommerce") {
            $vendor3 = Ecommerce::find($request->vendor_id);
            $pengajuan = $vendor3->vendors()->save($pengajuan);
        }

        return redirect('/pengajuan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengajuan  $pengajuan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengajuan $pengajuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengajuan  $pengajuan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengajuan $pengajuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengajuan  $pengajuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengajuan $pengajuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengajuan  $pengajuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengajuan $pengajuan,$id)
    {
        $delete = Pengajuan::find($id);
        $delete->delete();

        return redirect('/pengajuan');
    }
}
