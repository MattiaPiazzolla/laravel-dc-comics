<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'title' => 'required|max:50',
            'description' => 'required|min:10', 
            'thumb' => 'required|url', 
            'price' => 'required|numeric|min:0', 
            'series' => 'required|max:100', 
            'sale_date' => 'required|date', 
            'type' => 'required|max:50', 
            'artists' => 'required|string', 
            'writers' => 'required|string', 
        ],
        [
            'title.required' => 'Il titolo è obbligatorio',
            'title.max' => 'Il titolo può essere lungo massimo 50 caratteri',
            'description.required' => 'La descrizione è obbligatoria',
            'description.min' => 'La descrizione deve essere di almeno 10 caratteri',
            'thumb.required' => 'L\'URL dell\'immagine è obbligatorio',
            'thumb.url' => 'Inserisci un URL valido per l\'immagine',
            'price.required' => 'Il prezzo è obbligatorio',
            'price.numeric' => 'Il prezzo deve essere un numero',
            'price.min' => 'Il prezzo deve essere almeno 0',
            'series.required' => 'La serie è obbligatoria',
            'series.max' => 'Il nome della serie può essere lungo massimo 100 caratteri',
            'sale_date.required' => 'La data di uscita è obbligatoria',
            'sale_date.date' => 'Inserisci una data valida',
            'type.required' => 'Il tipo è obbligatorio',
            'type.max' => 'Il tipo può essere lungo massimo 50 caratteri',
            'artists.required' => 'Il campo artisti è obbligatorio',
            'writers.required' => 'Il campo scrittori è obbligatorio',

        ]
    
    );
    
        $form_data = $request->all();

        $new_comic = new Comic();
    
        
        $new_comic->fill($validatedData);
    
        
        $new_comic->artists = json_encode(explode(',', $validatedData['artists']));
        $new_comic->writers = json_encode(explode(',', $validatedData['writers']));
    
        
        $new_comic->save();
    
        
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // $comics = Comic::find($id);
        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        // $comics = Comic::find($id);
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $form_data = $request->all();
        $comic->update($form_data);

        return redirect()->route('comics.show', ['comic'=> $comic->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');

    }
}