@extends('layouts.app')

@section('content')
    <h2>Edit Algorithm</h2>

    {!! Form::open(['action' => ['AlgorithmsController@update', $algorithm->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $algorithm->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('algorithm', 'Algorithm')}}
            {{Form::text('algorithm', $algorithm->algorithm, ['class' => 'form-control', 'placeholder' => "R U R' U'"])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::text('description', $algorithm->description, ['class' => 'form-control', 'placeholder' => 'Main / Mirrored / ?'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

    <a href="/algorithms/{{$algorithm->id}}" class="btn btn-danger">Cancel</a>

@endsection