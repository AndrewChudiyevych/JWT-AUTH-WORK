<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $author = Author::all();
        //return view('index', compact('author'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $storeData = $request->validate([
         //   'firstName' => 'required|max:255',
          //  'lastName' => 'required|max:255',
           // 'phone' => 'required|max:255',
           // 'yearOfWriting' => 'required|dateTime',
       // ]);
       // $author = Author::create($storeData);

       // return redirect('/authors')->with('completed', 'Author has been saved!');
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
       // $author = Author::findOrFail($id);
        //return view('edit', compact('author'));
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
           // 'firstName' => 'required|max:255',
           // 'lastName' => 'required|max:255',
           // 'phone' => 'required|max:255',
            //'yearOfWriting' => 'required|dateTime',
       // ]);
        //Author::whereId($id)->update($updateData);
        //return redirect('/authors')->with('completed', 'Author has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$author = Author::findOrFail($id);
        //$author->delete();

        //return redirect('/authors')->with('completed', 'Author has been deleted');
    }
}
