@extends('layouts.app')
@section('content')
        <h1>{{$title}}</h1>
        <ul>
        @if(count($services) > 0)
            @foreach($services as $service)
               <li>{{$service}}</li>
            @endforeach
        @endif
        </ul>
        <p>This is the about page</p>
@endsection

 