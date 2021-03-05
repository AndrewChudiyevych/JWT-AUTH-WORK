<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$book = Book::all();
       // return view('index', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $storeData = $request->validate([
            'name' => 'required|max:255',
            'releaseDate' => 'required|dateTime',
            'inStock' => 'required|tinyInteger',
            'pages' => 'required|numeric',
        ]);
        $book = Book::create($storeData);

        return redirect('/books')->with('completed', 'Book has been saved!');*/
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
        //$book = Book::findOrFail($id);
        //return view('edit', compact('book'));
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
            //'name' => 'required|max:255',
            //'releaseDate' => 'required|dateTime',
            //'inStock' => 'required|tinyInteger',
            //'pages' => 'required|numeric',
        //]);
       // Book::whereId($id)->update($updateData);
       // return redirect('/books')->with('completed', 'Book has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // $book = Book::findOrFail($id);
        //$book->delete();

      //  return redirect('/books')->with('completed', 'Book has been deleted');
    }
}
