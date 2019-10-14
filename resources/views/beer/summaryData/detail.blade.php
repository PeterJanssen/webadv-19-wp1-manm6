@extends('layouts.master')
@section('title', $beer->name)
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>{{$beer->name}}</h1>
        <img src="data:image/jpg;base64,{{$beer->image_base64_uri}}" alt="{{$beer->name}}">
    </div>
    <div class="col-md-12">
        <p class="info">{{$beer->description}}</p>
    </div>
    <div class="col-md-12">
        <h2>Price</h2>
        <p>€ {{$beer->price}}</p>
    </div>
    <div class="col-md-12">
        <h2>Alcohol percentage</h2>
        <p>{{$beer->alcohol}}%</p>
    </div>
    <div class="col-md-12">
        <a href="{{ route('summaryData.index') }}">Go back</a>
    </div>
</div>
@endsection