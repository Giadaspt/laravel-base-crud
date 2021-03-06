<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderBy('id', 'desc')->paginate(5);

        return view('comics\home_resource', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
        
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate($this-> makeValidation(), $this->messageErrors());
        $data = $request->all();

        $new_comic = new Comic();
        // $new_comic->title = $data['title'];
        // $new_comic->description = $data['description'];
        // $new_comic->thumb = $data['thumb'];
        // $new_comic->price = $data['price'];
        // $new_comic->series = $data['series'];
        // $new_comic->sale_date = $data['sale_date'];
        // $new_comic->type = $data['type'];

        // $data['slug'] = $this->slgMaker($data['title']);
        $new_comic->fill($data);
        $new_comic->slug = $this->slugMaker($data['title']);
        //dd( $new_comic);
        $new_comic->save();

        return redirect()->route('comics.show', $new_comic);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics = Comic::find($id);

        if($comics){
            return view('comics.show', compact('comics'));
        }
        abort(404, 'Questa pagina non esiste');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $comics = Comic::find($id);

        if($comics){
            return view('comics.edit', compact('comics'));
        }
        abort(404, 'Questa pagina non esiste');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate($this->makeValidation(), $this->messageErrors());

        $data = $request->all();

        $data['slug'] = $this->slugMaker($data['title']);
        $comic->update($data);

        return redirect()->route('comics.show', $comic );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')->with('deleted', $comic->title);
    }

    
    private function slugMaker($str){
        return Str::slug($str, '-');
    }

    private function makeValidation(){
        return [
            "title" => "required|max:150|min:2",
            "description" => "required|min:2",
            "series" => "required|max:100|min:2",
            "type" => "required|max:50|min:2",
            "thumb" => "required|max:255",
            "price" => "required|numeric",
            "sale_date" => "required",
        ];
    }

    private function messageErrors(){
        return [
            "title.required" => "Il titolo ?? obbligatorio",
            "title.max" => "Possono essere inseriti massimo 150 caratteri ",
            "title.min" => "Devono essere inseriti minimo due caratteri ",
            "description.required" => "Devono essere inseriti minimo due caratteri ",
            "series.required" => "Il campo serie ?? obbligatorio",
            "series.max" => "Possono essere inseriti massimo 100 caratteri ",
            "series.min" => "Devono essere inseriti minimo due caratteri ",
            "type.required" => "Possono essere inseriti massimo 50 caratteri ",
            "type.min" => "Devono essere inseriti minimo due caratteri ",
            "thumb.max" => "Possono essere inseriti massimo 255 caratteri ",
            "price.required" => "Il prezzo ?? obbligatorio",
            "sale_date.required" => "La data ?? obbligatoria",
            "thumb.required" => "L'immagine ?? obbligatoria",
            "thumb.max" => "Possono essere inseriti massimo 50 caratteri ",
            
        ];
    }
}
