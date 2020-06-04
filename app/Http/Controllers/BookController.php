<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('book.index', [
            'books' => Book::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create', [
            'action' => route('book.store')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'=> 'required|string|max:250',
            'author_id' => 'required|exists:authors,id',
            'description' => 'required'
        ]);

        $book = new book($validated);
        $book->save();

        return redirect('/book')->with('success', 'Raksts veiksmīgi saglabāts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /** @var Book $book */
        $book = book::find($id);

        return view('book.show', [
            'book' => $book,
            'reviews' => $book->reviews()->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('book.create', [
            'book' => book::find($id),
            'action' => route('book.update', $id)
        ]);
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
        $validated = $request->validate([
            'title'=> 'required|string|max:250',
            'author_id' => 'required|exists:authors,id',
            'description' => 'required'
        ]);

        $book = book::find($id);
        $book->setRawAttributes($validated);
        $book->save();

        return redirect('/book')->with('success', 'Saglabāts veiksmīgi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        $share = book::find($id);
        $share->delete();

        return redirect('/book')->with('success', 'Ieraksts izdzēsts!');
    }
}
