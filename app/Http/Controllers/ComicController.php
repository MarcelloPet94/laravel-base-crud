<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allComics = Comic::all();
        return view('store.index', compact('allComics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('store.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|unique:comics',
            'description' => 'required|string',
            'thumb' => 'nullable|url',
            'price' => 'required|integer|min:1|max:50',
            'series' => 'required|string',
            'sale_date' => 'required|string',
            'type'=> ['required', Rule::in(['graphic novel','comic book'])]
        ]);

        $comic = $request->all();

        /*      
        $newComic = new Comic();
        $newComic->title = $comic['title'];
        $newComic->description = $comic['description'];
        $newComic->thumb = $comic['thumb'];
        $newComic->price = $comic['price'];
        $newComic->series = $comic['series'];
        $newComic->sale_date = $comic['sale_date'];
        $newComic->type = $comic['type'];
        $newComic->save();  

        $newComic = new Comic();
        $newComic->fill($comic); 
        $newComic->save();
        */
        $newComic = Comic::create($comic); 
        return redirect()->route('comic.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        
        return view('store.show' , compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('store.edit', compact('comic'));
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
        $request->validate([
            'title' => 'required|string|unique:comics',
            'description' => 'required|string',
            'thumb' => 'nullable|url',
            'price' => 'required|integer|min:1|max:50',
            'series' => 'required|string',
            'sale_date' => 'required|string',
            'type'=> ['required', Rule::in(['graphic novel','comic book'])]
        ]);

        $editedComic = $request->all();

        /*      
        $newComic = new Comic();
        $newComic->title = $comic['title'];
        $newComic->description = $comic['description'];
        $newComic->thumb = $comic['thumb'];
        $newComic->price = $comic['price'];
        $newComic->series = $comic['series'];
        $newComic->sale_date = $comic['sale_date'];
        $newComic->type = $comic['type'];
        $newComic->save();  

        $newComic = new Comic();
        $newComic->fill($comic); 
        $newComic->save();
        */
        $comic->update($editedComic); 
        return redirect()->route('comic.show', $comic->id);
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
        
        return redirect()->route('comic.index');
    }
}
