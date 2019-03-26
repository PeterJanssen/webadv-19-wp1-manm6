@extends('layouts.master')
@section('title', 'Beer Database')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Welcome to our beer database!</h1>
            <p>Please click one of the options in the navigation bar.</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <img class="img-responsive img-circle" src="{{ URL::to('/images/beers.jpg') }}" alt="beers">
            </div>
        </div>
    </div>
@endsection