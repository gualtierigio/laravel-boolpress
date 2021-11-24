<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movies;
use App\Models\Category;
use App\Models\Actor;


class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movies::all();

        return view('admin.movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $newMovie = new Movies();

        return view('admin.movies.create', compact('movies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $movie = Movies::create($data);

        $movie->save();

        return redirect()->route('admin.movies.show', $movie);
    }

    /**
     * Display the specified resource.
     *
     * @param  Movies $movies
     * @return \Illuminate\Http\Response
     */
    public function show(Movies $movie)
    {
        return view('admin.movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Movies $movies
     * @return \Illuminate\Http\Response
     */
    public function edit(Movies $movies)
    {
        return view('admin.movies.edit', compact('movies'));
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
        $movie = Movies::findOrFail($id);

        $data = $request->all();

        $movie->update($data);

        return redirect()->route('admin.movies.show', $movie);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Movies::destroy($id);

        return response('', 204);
    }
}
