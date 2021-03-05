<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $genre = Genre::all();
        //return view('index', compact('genre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$storeData = $request->validate([
        //    'genreName' => 'required|max:255',
        //    'category' => 'required|max:255',
        //]);
       // $genre = Genre::create($storeData);

        //return redirect('/genres')->with('completed', 'Genre has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // $genre = Genre::findOrFail($id);
        //return view('edit', compact('genre'));
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
        //$updateData = $request->validate([
            //'genreName' => 'required|max:255',
           // 'category' => 'required|max:255',
       // ]);
       // Genre::whereId($id)->update($updateData);
       // return redirect('/genres')->with('completed', 'Genre has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // $genre = Genre::findOrFail($id);
       // $genre->delete();

        //return redirect('/genres')->with('completed', 'Genre has been deleted');
    }
}
