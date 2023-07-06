<?php

namespace App\Http\Controllers;

use App\Models\Fumetto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    private function validateFumetto($data){
        $validator = Validator::make($data,[
            "title" => "required|min:4|max:50",
            "description" => "required|min:5|max:65535",
            "type" => "required|max:50",
            "thumb"=> "required",
            "Price" => "required|max:50",
            "sale_date" => "required|max:50",
            "Series" =>"required|max:50",
        ],[

            'title.required' => 'Il campo Titolo è richiesto',
            'title.min' => 'Il campo Titolo deve avere almeno 4 caratteri',
            'title.max' => 'Il campo Titolo non deve superare i 50 caratteri',
            'description.required' => 'Il campo Descrizione è richiesto',
            'type.required' => 'Il campo Tipologia è richiesto',
            'thumb.required' => 'Il campo dell immagine è richiesto',
            'Price.required' => 'Il campo Prezzo è richiesto',
            'Series.required' => 'Il campo Serie è richiesto',
            'sale_date.required' => 'Il campo Data Rilascio è richiesto',

        ])->validate();
        return $validator;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $this->validateFumetto($request->all());
        
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
    public function update(Request $request, Fumetto $fumetti )
    {
        $data = $this->validateFumetto($request->all());
        
        $fumetti->title = $data["title"];
        $fumetti->description = $data["description"];
        $fumetti->type = $data["type"];
        $fumetti->thumb = $data["thumb"];
        $fumetti->Price = $data["Price"];
        $fumetti->sale_date = $data["sale_date"];
        $fumetti->Series = $data["Series"];
        $fumetti->update();

        return redirect()->route('fumetti.show', $fumetti->id);
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
