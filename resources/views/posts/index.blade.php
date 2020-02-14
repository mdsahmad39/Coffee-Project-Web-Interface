@extends('layouts.app')

@section('content')
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <h3>Your devices</h3>
    @if(count($posts) > 0)
        <table class="table table-stripped">
            <tr>
                <th>Device Name</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($posts as $post)
                <tr>
                    <th>{{$post->title}}</th>
                    <th><a href="/posts/{{$post->body}}">Monitor</a></th>
                    <th></th>
                </tr>
            @endforeach
        </table>
    @else
        <p>You have no devices</p>
    @endif
@endsection
