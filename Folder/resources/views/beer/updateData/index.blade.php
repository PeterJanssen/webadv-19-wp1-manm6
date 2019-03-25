@extends('layouts.master')
@section('title', 'All available beers')
@section('content')
    @if(Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">{{ Session::get('info') }}</p>
            </div>
        </div>
    @endif
    <h1>Existing beers in the database</h1>
    <div class="row">
        <div class="col-md-12">
            @foreach($beers as $beer)
                <figure class="col-md-4 thumbnail">
                    <img width="300px" height="275px" src="data:image/jpg;base64,{{$beer->image_base64_uri}}" alt={{ $beer->name }}>
                    <p class="caption"><strong>{{ $beer ->name }}</strong>
                        <a href="{{ route('updateData.updateBeer', ['id' => $beer->id]) }}">Edit</a>
                </figure>
            @endforeach
            <div class="row">
                <div class="col-md-12 text-center">
                    {{ $beers->links() }}
                </div>
            </div>
        </div>

    </div>
@endsection