@extends('layouts.app')

@section('content')
    <h2>Algorithms</h2>
    @if(count($algorithms) > 0)
        @foreach($algorithms as $alg)
            <div class="card algorithm-card {{$alg->id}}">
                <div class="algorithm-card-wrapper">
                    <h3><a href="/algorithms/{{$alg->id}}">{{$alg->name}}</a></h3>
                        <div class="algorithm">{{$alg->algorithm}}</div>
                        <div class="description"><p>{{$alg->description}}</p></div>
                </div>
            </div>
        @endforeach
    @else 
        <p>No algorithms found</p>
    @endif

    <a href="/algorithms/create" class="btn btn-primary">Create New</a>
@endsection