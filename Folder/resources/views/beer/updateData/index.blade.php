@extends('layouts.master')
@section('content')
    @if(Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">{{ Session::get('info') }}</p>
            </div>
        </div>
    @endif
    <h1>Existing beers in the database</h1>
    @foreach($beers as $beer)
        <div class="row">
            <div class="col-md-12">
                <p><strong>{{ $beer ->name }}</strong>
                    <a href="{{ route('updateData.updateBeer', ['id' => $beer->id]) }}">Edit</a>
            </div>
        </div>
    @endforeach
@endsection