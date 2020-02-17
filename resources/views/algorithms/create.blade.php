@extends('layouts.app')

@section('content')
    <h2>Create Algorithm</h2>

    {!! Form::open(['action' => 'AlgorithmsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('algorithm', 'Algorithm')}}
            {{Form::text('algorithm', '', ['class' => 'form-control', 'placeholder' => "R U R' U'"])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Main / Mirrored / ?'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

    <a href="/algorithms" class="btn btn-danger">Cancel</a>

@endsection