@extends('layouts.admin')

@section('content')

<div class="container" style="padding-top:20px;">
    <div class="row">
        <!-- Login -->
        <div class="col-md-12">
            <div class="row"><div class="col-md-12"><h2>List</h2></div></div>
            <div class="row">
                <div class="col-md-12">
                    <table id="table_id" class="display" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Release Date</th>
                            <th>Posted Date</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($movies as $movie)
                        <tr>
                            <td><a href="{!! url("admin/movies/{$movie->id}")!!}">{{ $movie->name }}</a></td>
                            <td><img src="{!! url('movies/poster/'.$movie->image)  !!}" class="img-thumbnail " style="width:100px;"/></td>
                            <td>{{ $movie->release_date }}</td>
                            <td>{{ $movie->created_at }}</td>
                            <td>
                                <a href="{!!  url("admin/movies/{$movie->id}/edit")!!}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> |

                                {!!
                                 Form::open([
                                    'method' => 'delete',
                                    'route' => ['movies.destroy', $movie->id]
                                 ])
                                 !!}
                                {!! Form::submit('Delete', ['class'=>"glyphicon glyphicon-trash", 'aria-hidden'=>"true"]) !!}

                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- //End login -->
    </div>
</div>
    @endsection