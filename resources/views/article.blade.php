@extends('layout')
@section('title', $article -> title)
@section('content')


    <a class="btn btn-primary my-3" href="{{url()->previous()}}">back</a>
                <div class="card">
                    {{--                    <img src="..." class="card-img-top" alt="...">--}}
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">{{$article->excerpt }} </p>

                    </div>
                </div>


@endsection
