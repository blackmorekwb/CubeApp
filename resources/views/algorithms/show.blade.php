@extends('layouts.app');

@section('content')
    <div class="card">
        <h3>{{$algorithm->name}}</h3>
        <div class="algorithm">{{$algorithm->algorithm}}</div>
        <div class="description"><p>{{$algorithm->description}}</p></div>
    </div>
    <a href="/algorithms" class="btn btn-primary">Go Back</a>
    <a href="/algorithms/{{$algorithm->id}}/edit" class="btn btn-danger">Edit</a>

    {!!Form::open(['action' => ['AlgorithmsController@destroy', $algorithm->id], 'method' => 'POST', 
                  'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

    {!!Form::close()!!}
@endsection