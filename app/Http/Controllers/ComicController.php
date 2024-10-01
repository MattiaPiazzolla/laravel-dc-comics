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
        ]);
    
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