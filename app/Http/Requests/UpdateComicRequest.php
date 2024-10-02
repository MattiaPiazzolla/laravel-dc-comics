<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|max:50',
            'description' => 'required|min:10',
            'thumb' => 'required|url',
            'price' => 'required|numeric|min:0',
            'series' => 'required|max:100',
            'sale_date' => 'required|date',
            'type' => 'required|max:50',
            'artists' => 'required|string',
            'writers' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
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
        ];
    }
}