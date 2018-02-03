@foreach ($movies as $movie)
    {{ $movie->id }} <br />
    {{ $movie->name }} <br/>
    {{ $movie->taglines }}
    <hr/>
@endforeach