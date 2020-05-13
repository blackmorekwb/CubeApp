@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="row justify-content-left">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <a href="/algorithms" class="btn btn-primary">Algorithms</a>
                                <img src="{{asset('assets/images/algorithms.jpg')}}" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-left">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <a href="/#" class="btn btn-primary disabled">Forums</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-left">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <a href="/#" class="btn btn-primary disabled">Account Settings</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
