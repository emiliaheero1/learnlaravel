@extends('layout')
@section('title', 'new article')
@section('content')


    <form action="{{route('articles.store')}}" method="POST">

        @csrf
        @error('title')
        @foreach($errors->get('title') as $error)
        <div class="alert alert-danger" role="alert">
            {{$error}}
        </div>
        @endforeach
        @enderror
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
        </div>

        @error('body')
        @foreach($errors->get('body') as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
        @endforeach
        @enderror

        <div class="mb-3">
            <label for="body" class="form-label">content</label>
            <textarea class="form-control" id="body" rows="3" name="body">{{old('body')}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection

