@extends('layouts.app')

@section('content')
    <h2>Create Algorithm</h2>

    <div class="container" id="create_form">
        {!! Form::open(['action' => 'AlgorithmsController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
            </div>
            <div class="form-group">
                {{Form::label('algorithm', 'Algorithm')}}
                {{Form::text('algorithm', '', ['class' => 'form-control', 'placeholder' => "R U R' U'"])}}
            </div>
            
            <div class="row justify-content-md-center">
                <div class="form-group col col-lg-3">
                    {{Form::label('group', 'Group')}}
                    {{Form::select('group',  array(
                        'cubedThree' => '3x3', 'cubedFour' => '4x4', 'cubedFive' => '5x5', 'other' => 'Something Else...' 
                        ), 'cubedThree', array('class' => 'form-control')  
                    )}}
                </div>
                <div class="form-group col col-lg-3">
                    {{Form::label('group_status', 'Status')}}
                    {{Form::select('group_status',  array(
                        'standard' => 'Standard', 'mirrored' => 'mirrored', 'secondary' => 'Secondary', 'other' => 'Something Else...' 
                        ), 'standard', array('class' => 'form-control')
                    )}}
                </div>
            </div>
            
            <div class="form-group">
                {{Form::label('description', 'Description')}}
                {{Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Main / Mirrored / ?'])}}
            </div>
            <div class="row justify-content-between form-control-buttons">
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}

        <a href="/algorithms" class="btn btn-danger justify-content-end">Cancel</a>
        </div> <!--row of submit/cancel buttons -->
    </div>

@endsection