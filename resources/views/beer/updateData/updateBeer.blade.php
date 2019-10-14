@extends('layouts.master')
@section('title', $beer->name.' update form')
@section('content')
    <h1>Update beer: {{ $beer->name }}</h1>
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('Confirm update') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $beer->name }}">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description"
                           value="{{ $beer->description }}">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price"
                           value="{{ $beer->price }}">
                    <label for="alcohol">Alcohol</label>
                    <input type="text" class="form-control" id="alcohol" name="alcohol"
                           value="{{ $beer->alcohol }}">
                    <label for="image">Beer image</label>
                    <input data-preview="#preview" name="image_file" type="file" id="image"
                           onchange="previewUploadedBeerImage(event)">
                    <img class="col-sm-3" alt="Preview of image" id="preview">
                    <input type="hidden" name="id" value="{{$beerId}}">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
    <script>
        let previewUploadedBeerImage = function (event) {
            let image = event.target.files[0];
            let output = document.getElementById('preview');
            output.src = URL.createObjectURL(image);
        };
    </script>
@endsection