<h1>Create Movie</h1>
@php dd($errors) @endphp
{!! Form::open(['url' => 'admin/movies', 'method' => 'post']) !!}
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name') !!}

    {!! Form::label('release_year', 'Release Year') !!}
    {!! Form::text('release_year', old('release_year'), ['class' => 'test_class']) !!}

    {!! Form::label('storyline', 'Storyline') !!}
    {!! Form::textarea('storyline') !!}

    {!! Form::label('ratings', 'Ratings') !!}
    {!! Form::text('ratings', old('ratings')) !!}

    {!! Form::label('language', 'Language') !!}
    {!! Form::select('language_id', ['1' => 'English', '2' => 'Spanish']) !!}

    {!! Form::label('genre', 'Genre') !!}
    {!! Form::select('genre_id', ['1' => 'Drama', '2' => 'Action'], null,['multiple']) !!}

    {!! Form::submit('Save') !!}


{!! Form::close() !!}