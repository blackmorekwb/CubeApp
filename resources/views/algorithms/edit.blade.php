@extends('layouts.app')

@section('content')
    <h2>Edit Algorithm</h2>

    <div class="container" id="edit_form">
        {!! Form::open(['action' => ['AlgorithmsController@update', $algorithm->id], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', $algorithm->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
            </div>
            <div class="form-group">
                {{Form::label('algorithm', 'Algorithm')}}
                {{Form::text('algorithm', $algorithm->algorithm, ['class' => 'form-control', 'placeholder' => "R U R' U'"])}}
            </div>

            <div class="row justify-content-md-center">
                <div class="form-group col col-lg-3">
                    {{Form::label('group', 'Group')}}
                    {{Form::select('group',  array(
                        'cubedThree' => '3x3', 'cubedFour' => '4x4', 'cubedFive' => '5x5', 'other' => 'Something Else...' 
                        ), $algorithm->group, array('class' => 'form-control')  
                    )}}
                </div>
                <div class="form-group col col-lg-3">
                    {{Form::label('group_status', 'Status')}}
                    {{Form::select('group_status',  array(
                        'standard' => 'Standard', 'mirrored' => 'mirrored', 'secondary' => 'Secondary', 'other' => 'Something Else...' 
                        ), $algorithm->group_status, array('class' => 'form-control')
                    )}}
                </div>
            </div>
            
            <div class="form-group">
                {{Form::label('description', 'Description')}}
                {{Form::text('description', $algorithm->description, ['class' => 'form-control', 'placeholder' => 'Main / Mirrored / ?'])}}
            </div>
            <div class="row justify-content-between form-control-buttons">
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}

        <a href="/algorithms/{{$algorithm->id}}" class="btn btn-danger">Cancel</a>
        </div> <!--row of submit/cancel buttons -->
    </div>
@endsection