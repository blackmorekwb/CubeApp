@extends('layouts.app')

@section('content')
    <h2>{{$title}}</h2>
    <p>Feel free to contact us with feedback or problems or join our 
        <a href={{$discord}}>Discord server</a> and be part of the community!
    </p>

    <a href={{$discord}}> 
        <img src="{{asset('assets/images/discord.png')}}" href={{$discord}} height="100" width="100">
    </a>

    
@endsection
