@extends('layouts.app')

@section('content')
    <h1>{{$title}} </h1>
    @if(count($services) > 0)
        <ul>
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif
    <p>This is the service page</p>
@endsection
