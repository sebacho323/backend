<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boleto;

class BoletoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boletos = Boleto::all();
        return $boletos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $boleto = new Boleto();
        $boleto->descripcion = $request->descripcion;
        $boleto->precio = $request->precio;
        $boleto->stock = $request->stock;

        $boleto->save();
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $boleto = Boleto::findOrFail($request->id);
        $boleto->descripcion = $request->descripcion;
        $boleto->precio = $request->precio;
        $boleto->stock = $request->stock;

        $boleto->save();

        return $boleto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $boleto= Boleto::destroy($request->id);
        return $boleto;

    }
}
