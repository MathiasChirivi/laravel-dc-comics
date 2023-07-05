<?php

namespace App\Http\Controllers;

use App\Models\Fumetto;
use Illuminate\Http\Request;

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newFumetto = new Fumetto;
        $newFumetto->title = $data["title"];
        $newFumetto->description = $data["description"];
        $newFumetto->type = $data["type"];
        $newFumetto->thumb = $data["thumb"];
        $newFumetto->Price = $data["Price"];
        $newFumetto->sale_date = $data["sale_date"];
        $newFumetto->Series = $data["Series"];
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fumetto $fumetto )
    {
        $data = $request->all();
        

        $fumetto->title = $data["title"];
        $fumetto->description = $data["description"];
        $fumetto->type = $data["type"];
        $fumetto->thumb = $data["thumb"];
        $fumetto->Price = $data["Price"];
        $fumetto->sale_date = $data["sale_date"];
        $fumetto->Series = $data["Series"];
        $fumetto->update();

        return redirect()->route('fumetti.show', $fumetto->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
