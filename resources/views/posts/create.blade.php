@extends('layouts.app')
    @section('content')
    
    <a class=btn href='/posts'>Back</a>
        <h1>test</h1>
            <small></small>
            <div>
               {!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}
               <div class='formgroup'>
                   {{Form::label('title', 'Title')}}
                   {{Form::text('title', '',['class' => 'form-control', 'placeholder' => 'Title'])}}
               </div>
               <div class='formgroup'>
                   {{Form::label('title', 'Message')}}
                   {{Form::textarea('body', '',['class' => 'form-control', 'placeholder' => 'Type your message'])}}
               </div>     
                   {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
               {!! Form::close() !!}
            </div>
    @endsection