@extends('layouts.master')
@section('content')
    <h1>Add New beer</h1>
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12">


                @if(\Session::has('success'))
                    <div class="alert alert-success">
                       <p>{{\Session::get('success')}}</p>
                    </div>
                @endif


            <form action="{{ route('Posting_add_beer') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description"
                           value="">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price"
                           value="">
                    <label for="alcohol">Alcohol</label>
                    <input type="text" class="form-control" id="alcohol" name="alcohol"
                           value="">
                    <label for="image">Beer image</label>
                    <input data-preview="#preview" name="image_file" type="file" id="image"
                           onchange="previewUploadedBeerImage(event)">
                    <img class="col-sm-3" alt="Preview of image" id="preview">

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