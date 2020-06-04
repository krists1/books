<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function index()
    {
        $latvian = request('latvian');

        if($latvian === 'true'){
            $authors = Author::where('latvian', true)->get();
        } else {
            $authors = Author::all();
        }

        return view('author.index', [
            'authors'=> $authors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function create()
    {
        return view('author.create', [
            'action' => route('author.store')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validated = $request->validate(Author::rules());

        $author = new Author($validated);
        $author->save();

        return redirect(route('author.index'))->with('success', 'Veiksmīgi saglabāts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function show($id)
    {
        $author = Author::find($id);

        return view('author.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function edit($id)
    {
        return view('author.create', [
            'author' => Author::find($id),
            'action' => route('author.update', $id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate(Author::rules());

        $author = Author::find($id);
        $author->setRawAttributes($validated);
        $author->save();

        return redirect(route('author.index'))->with('success', 'Saglabāts veiksmīgi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy($id)
    {
        $share = Author::find($id);
        $share->delete();

        return redirect(route('author.index'))->with('success', 'Ieraksts izdzēsts!');
    }

    /**
     * Display a list of latvian authors.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function latvian()
    {
        return view('author.index', [
            'authors'=> Author::where('latvian', true)
                ->where('name','Jānis')->get()
        ]);
    }
}
