@extends('layout')
@section('title', $article -> title)
@section('content')


    <a class="btn btn-primary my-3" href="{{url()->previous()}}">back</a>
                <div class="card">
                    @if($article->image_path)
                        <img src="{{$article->image_path}}" class="card-img-top" alt="...">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">{{$article->excerpt }} </p>
                        <p class="card-text"><small class="text-muted">{{$article->user->name}}</small></p>
                        <p class="card-text"><small class="text-muted">Created: {{$article->created_at->diffForHumans()}}</small></p>
                        <p class="card-text"><small class="text-muted">Updated: {{$article->updated_at->diffForHumans()}}</small></p>
                    </div>
                </div>




                <div class="card">
                    <div class="card-body mt-2">

                        <form action="{{route('comment.store', ['article'=> $article->id])}}" method="POST">
                            @csrf
                            <textarea class="form-control mb-2" name="body" placeholder="write something"></textarea>
                            <input type="submit" class="btn btn-primary"/>
                        </form>
                    </div>
                </div>



                @foreach($article->comments as $comment)
                    <div class="card">
                        <div class="card-body mt-2">
                            {{$comment->body}}
                            <p class="card-text"><small class="text-muted">{{$comment->user->name}}</small></p>
                            <p class="card-text"><small class="text-muted">{{$comment->created_at->diffForHumans()}}</small></p>
                        </div>
                    </div>
                @endforeach
                @endsection
