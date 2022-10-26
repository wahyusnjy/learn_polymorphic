<?php

namespace App\Http\Controllers;

use App\Models\Ecommerce;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ecommerce = Ecommerce::all();

        return view('ecommerce.index')
        ->with('ecommerce',$ecommerce);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ecommerce.create');
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
            'link' => 'required',
            'address' => 'required'
        ]);

        Ecommerce::create([
            'name' => $request->name,
            'link' => $request->link,
            'address'=> $request->address,
        ]);

        return redirect('/ecommerce');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ecommerce  $ecommerce
     * @return \Illuminate\Http\Response
     */
    public function show(Ecommerce $ecommerce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ecommerce  $ecommerce
     * @return \Illuminate\Http\Response
     */
    public function edit(Ecommerce $ecommerce,$id)
    {
        $ecommerce = Ecommerce::find($id);
        return view('ecommerce.edit')
        ->with('ecommerce',$ecommerce);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ecommerce  $ecommerce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required',
            'address' => 'required'
        ]);

        Ecommerce::where('id',$id)->update([
            'name' => $request->name,
            'link' => $request->link,
            'address'=> $request->address,
        ]);

        return redirect('/ecommerce');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ecommerce  $ecommerce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ecommerce $ecommerce,$id)
    {
        $delete = Ecommerce::find($id);
        $delete->delete();

        return redirect('/ecommerce');
    }
}
