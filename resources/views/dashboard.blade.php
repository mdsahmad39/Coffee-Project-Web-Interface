@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Your devices</h3>
                    @if(count($posts) > 0)
                        <table class="table table-stripped">
                            <tr>
                                <th>Tasks</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <th>{{$post->title}}</th>
                                    <th><a href="/coffeeproject/public/monitor" class="btn btn-success">Monitor</a></th>
                                    <th><a href="/coffeeproject/public/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a></th>
                                    <th>
                                        {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </th>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no devices</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
