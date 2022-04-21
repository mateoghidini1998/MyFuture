@extends('layout')
@extends('layouts.app')

@section("title")
Add a post
@endsection

@section("main")

<div class="jumbotron">
    <h1>Add a post</h1>
</div>

<form method="POST" action="{{ route('posts/add') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group row">
        <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

        <div class="col-md-6">
            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus accept="image/png, image/jpeg, image/jpg">

            @error('image')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>



    <div class="form-group row">
        <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

        <div class="col-md-6">
            <input id="description" type="text" class="form-control @error('name') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

            @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>



    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Submit') }}
            </button>
        </div>
    </div>
</form>
@endsection
