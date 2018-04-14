@extends('layouts.app')
    @section('content')
    
    <a class=btn href='/posts'>Back</a>
        <h1>Create post</h1>
            <small></small>
            <div>
               {!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}
               <div class='formgroup'>
                   {{Form::label('title', 'Title')}}
                   {{Form::text('title', '',['class' => 'form-control', 'placeholder' => 'Title'])}}
               </div>
               <div class='formgroup'>
                   {{Form::label('title', 'Message')}}
                   {{Form::textarea('body', '',['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Type your message'])}}
               </div> 
                  
                   {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
               {!! Form::close() !!}
            </div>
    @endsection
    
    
    
    <hr>
    <hr>
    
    <div>
     {!! Form::open(['route' => 'contact.store']) !!}

<div class="form-group">
    {!! Form::label('name', 'Your Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'E-mail Address') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::textarea('msg', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}

{!! Form::close() !!}

    </div>