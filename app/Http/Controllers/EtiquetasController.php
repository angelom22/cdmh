<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EtiquetaRequest;
use App\Model\Etiqueta;
use Laracasts\Flash\Flash;

class EtiquetasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function index(Request $request)
    {
        $etiquetas = Etiqueta::Buscador($request->name)->orderBy('id', 'ASC')->Simplepaginate(5);
        // $etiquetas = Etiqueta::get();
        return view('admin.etiquetas.index', compact('etiquetas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.etiquetas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EtiquetaRequest $request)
    {
        $etiqueta = new Etiqueta($request->all());
        $etiqueta->save();

        Flash("La etiqueta " . $etiqueta->name .  " fue creada de forma correcta")->success();

        return  redirect()->route('etiquetas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etiqueta = Etiqueta::find($id);

        return view('admin.etiquetas.edit', compact('etiqueta'));
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
        $etiqueta = Etiqueta::find($id);
        $etiqueta->fill($request->all());
        $etiqueta->save();

        Flash("La etiqueta " . $etiqueta->name .  " fue editada de forma correcta")->warning();

        return redirect()->route('etiquetas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etiqueta = Etiqueta::find($id);
        $etiqueta->delete();

        Flash("La etiqueta " . $etiqueta->name .  " fue eliminada de forma correcta")->important();

        return redirect()->route('etiquetas.index');
    }
}
