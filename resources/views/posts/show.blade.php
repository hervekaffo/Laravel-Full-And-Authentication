@extends('layouts.app')

@section('content')
    <a href="/lsapp/public/post" class="btn btn-default"> Go Back</a>
    <h1>{{$post->title}}</h1>
    <br>
    <img style="width:100%" src="/lsapp/public/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <h3>{{$post->body}}</h3>
    <small>Written on {{$post->created_at}}  by {{$post->user->name }}</small>
    <hr>

    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/lsapp/public/post/{{$post->id}}/edit" class="btn btn-default">Edit</a>

            {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection