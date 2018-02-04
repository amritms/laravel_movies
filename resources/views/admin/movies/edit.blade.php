@extends('layouts.admin')

@section('content')

    <div class="container" style="padding-top:20px;">

        <div class="row">

            <!-- contain -->
            <div class="col-md-12">
                <div class="row"><div class="col-md-12"><h2>Add Movies</h2></div></div>
                <div class="row">
                    <div class="col-md-12">
    {!! Form::model($movie, ['url' => 'admin/movies/'.$movie->id, 'method' => 'put', 'class' => 'form-horizontal']) !!}

    <!-- Title -->
        <div class="form-group">
            {!! Form::label('name', 'Title', ['class'=> 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
                {!! Form::text('name', null, ['class' => "form-control", 'placeholder'=>"Movie name", 'maxlength'=>"100"]) !!}
            </div>
        </div>


        <!-- Genres -->
        <div class="form-group">
            {!! Form::label('genre', 'Genre', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
                {!! Form::select('genre_id', ['1' => 'Drama', '2' => 'Action'], null,['multiple']) !!}
            </div>
        </div>



        <div class="form-group">
            {!! Form::label('release_year', 'Release Year', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
                {!! Form::text('release_date', old('release_date'), ['class' => "form-control", 'placeholder'=>"Release Year", 'maxlength'=>"100"]) !!}
            </div>
        </div>
    <!-- Taglines -->
        <div class="form-group">
            <label for="tagline" class="col-sm-2 control-label">Tagline</label>
            <div class="col-sm-10">
                {!! Form::text('taglines', old('taglines'), ['class' => "form-control", 'placeholder'=>"Tag lines", 'maxlength'=>"100"]) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('storyline', 'Storyline', [ 'class'=>"col-sm-2 control-label"]) !!}
            <div class="col-sm-10">
                {!! Form::textarea('storyline', null, ['class'=>"form-control", 'placeholder'=>"Multiple tagline with comma"]) !!}
            </div>
        </div>
    {!! Form::label('ratings', 'Ratings') !!}
    {!! Form::text('ratings', old('ratings')) !!}

    {!! Form::label('language', 'Language') !!}
    {!! Form::select('language_id', ['1' => 'English', '2' => 'Spanish']) !!}

    <!-- Budget -->
        <div class="form-group">
            <label for="keywords" class="col-sm-2 control-label">Plot Keywords</label>
            <div class="col-sm-10">
                {!! Form::select('keywords', [1=> 'world war two', 2 => 'soldier', 3 => 'evacuation'], old('keywords'), ['class'=>"form-control js-example-basic-multiple", 'multiple' => 'multiple']) !!}
            </div>
        </div>

    <!-- Banner -->
        <div class="form-group">
            <label for="movie-banner" class="col-sm-2 control-label">Image</label>
            <div class="col-sm-10">
                {!! Form::file('image', ['class'=>"form-control", 'id'=>"movie-banner"]) !!}
            </div>
        </div>

    <!-- Video -->
        <div class="form-group">
            <label for="video" class="col-sm-2 control-label">Video Link</label>
            <div class="col-sm-10">
                {!! Form::text('video', old('video'), ['class'=>"form-control", 'placeholder'=>"Video Link"]) !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                {!! Form::submit('Save', ['class'=>"btn btn-default"]) !!}
            </div>
        </div>



{!! Form::close() !!}

                    </div>
                </div>
            </div><!-- //End contain -->
        </div>
    </div>
    @if($errors->any())
<ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endif
</ul>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
        $('.js-example-basic-multiple').select2();
    });
</script>
@endsection

@section('admin_footer')