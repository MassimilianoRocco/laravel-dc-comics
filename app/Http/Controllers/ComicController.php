<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comicsList = Comic::all();

        $data = [
            "catalog" => $comicsList
        ];

        return view("comics.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Quello che mi arriva dal form
        $data = $request->all();
        // dump($data); stampa il dato ma continua l'esecuzione. Quindi se c'è il redirect non lo vedrai se non per 1ms prima di essere reindirizzato.
        // dd($data); sarebbe un dump ma si ferma il codice, "dump and die". Stampa e ferma l'esecuzione.
        // ddd($data);  stampa il dato in modo più specifico attraverso una pagina di "errore" (ovviamente ferma l'esecuzione).

        // $newComic = new Comic();
        // $newComic -> title = $data["title"];
        // $newComic -> description = $data["description"];
        // $newComic -> thumb = $data["thumb"];
        // $newComic -> price = $data["price"];

        // $newComic->save();



        //recupero e valido i dati inviati dal form necessari al mio model.
        $validati = $request ->validate([
            "title" => "required|min:2|max:255" ,
            "description" => "required|min:10|max:255" ,
            "thumb" => "required|" ,
            "price" => "required|min:0.1" ,
        ]);

        $newComic = new Comic();
        $newComic->fill($validati); //l'assegnazione di massa va abilitato nel Model. Per evitare di fare l'inserimento manuale di ogni campo come scritto sopra.
        $newComic->save();

        return redirect()->route('comics.show',$newComic->id);
        //si potrebbe passare tutta la rotta del gioco dato che lo show accetta in ingresso un intero comic in questo caso. 
        //return redirect()->route('comics.show',$newComic);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);

        $data = [
            "comic" => $comic
        ];

        return view("comics.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        $data = [
            "comic" => $comic
            ];

        return view("comics.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        $comic -> title = $data["title"];
        $comic -> description = $data["description"];
        $comic -> thumb = $data["thumb"];
        $comic -> price = $data["price"];

        $comic->save();

        return redirect()->route('comics.show',$comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic -> delete();

        return redirect()->route('comics.index');
    }
}
