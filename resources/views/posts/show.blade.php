@extends('layouts.app')
    @section('content')
    
    <a class=btn href='/posts'>Back</a>
        <h1>{{$post->title}}</h1>
            <small>Written at {{$post->created_at}}</small>
            <div>
                {!!$post->body!!}
            </div>
            <a href='/posts/{{$post->id}}/edit' class='btn btn-default'>Edit</a>
    @endsection