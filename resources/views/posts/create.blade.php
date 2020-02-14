@extends('layouts.app')

@section('content')
    <h1>Register New Device</h1>
    {!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Name for your Device*')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Choose Name for your Device'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Enter unique ID of your device*')}}
            {{Form::text('body', '', ['class' => 'form-control', 'placeholder' => 'Enter unique ID of your device'])}}
        </div>
        <p>* fields must be filled</p>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection