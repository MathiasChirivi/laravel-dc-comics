<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFumettoRequest;
use App\Http\Requests\UpdateFumettoRequest;
use App\Models\Fumetto;

class FumettoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fumetti = Fumetto::all();

        return view("fumetti.index", compact("fumetti"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("fumetti.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreFumettoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFumettoRequest $request)
    {

        $data = $request->validated();

        $newFumetto = new Fumetto();
        $newFumetto->fill($data);
        $newFumetto->save();

        return redirect()->route("fumetti.show", $newFumetto->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fumetto = Fumetto::findorFail($id);

        return view("fumetti.show", compact("fumetto"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fumetto = Fumetto::findorFail($id);

        return view("fumetti.edit", compact("fumetto"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\UpdateFumettoRequest  $request
     * @param   Fumetto $fumetti
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFumettoRequest $request, Fumetto $fumetti )
    {
        $data = $request->validated();
        $fumetti->fill($data);
        $fumetti->update();
        
        return to_route("fumetti.show", $fumetti);
        // return redirect()->route('fumetti.show', $fumetti->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fumetto $fumetti)
    {
        $fumetti->delete();
        
        return redirect()->route('fumetti.index');
    }
}
