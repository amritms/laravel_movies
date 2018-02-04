@extends('layouts.admin')

@section('content')

    <div class="container" style="padding-top:120px;">
        <div class="row">
            <!-- Login -->
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12"><h2> {{$movie->name}} ({{$movie->release_date}})</h2></div>
                    <div class="col-md-12"><h2>Country: {{$movie->country->name}}</h2></div>
                    <div class="col-md-12"><h2>Language: {{$movie->language_id}}</h2></div>
                </div>

            </div>
        </div>
    </div>

    @endsection