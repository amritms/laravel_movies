<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use App\Genre;
use App\Http\Controllers\Controller;
use App\Http\Requests\MovieStoreRequest;
use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();

        return view('admin.movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::pluck('name', 'id');
        $genres = Genre::pluck('name', 'id');

        return view('admin.movies.create', compact('countries', 'genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param MovieStoreRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieStoreRequest $request)
    {
        $input = $request->validated();

        $movie = Movie::create($input);

        $genre = request()->get('genre_id');

        // genre - pivot
        $movie->genres()->attach($genre);

        session()->flash('success', 'Movie successfully created.');

        return redirect('admin/movies');
    }

    /**
     * Display the specified resource.
     *
     * @param Movie $movie
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show(Movie $movie)
    {
        return view('admin.movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Movie $movie
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Movie $movie)
    {
        return view('admin.movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param MovieStoreRequest|Request $request
     * @param Movie $movie
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(MovieStoreRequest $request, Movie $movie)
    {
        $input = $request->validated();

        session()->flash('success', 'Movie successfully edited.');

        $movie->update($input);

        return redirect('admin/movies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Movie $movie
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy(Movie $movie)
    {
        $genres = $movie->genres->pluck('id');
        $movie->genres()->detach($genres);

        $movie->delete();

        session()->flash('success', 'Movie successfully deleted.');
        return redirect('admin/movies');
    }
}
