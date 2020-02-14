@extends('layouts.app')

@section('content')
    <h1>Modify your Device</h1>
    {!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Choose Name for your Device*')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Choose Name for your Device'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Enter unique ID of your device*')}}
            {{Form::text('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Enter unique ID of your device'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        <p>* fields must be filled</p>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection