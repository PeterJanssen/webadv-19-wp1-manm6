@extends('layouts.master')
@section('title', 'Beer summary')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>All beers in our database</h1>
            @foreach($beers as $beer)
                <figure class="col-md-4 thumbnail">
                    <img width="300px" height="275px" src="data:image/jpg;base64,{{$beer->image_base64_uri}}"
                         alt={{ $beer->name }}>
                    <p class="caption"><strong>{{ $beer ->name }}</strong>
                        <a href="{{ route('summaryData.detail', ['id' => $beer->id]) }}">Details</a>
                </figure>
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            {{ $beers->links() }}
        </div>
    </div>

@endsection