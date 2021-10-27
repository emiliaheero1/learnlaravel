@extends('layout')
@section('title', 'articles')
@section('content')
{{$articles-> links('partials.pagination')}}
    <div class="row row-cols-4 mt-3" >
        @foreach($articles as $article)
            <div class="col mb-3">
                <div class="card">
                    @if($article->image_path)
                        <img src="{{$article->image_path}}" class="card-img-top" alt="...">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">{{$article->excerpt }} </p>
                        <a href="{{route("article", ['article' => $article-> id])}}" class="btn btn-primary mb-2">Read more</a>

                        <p class="card-text">
                            <a href="/articles/author/{{$article->user->name}}"> <small class="text-muted">{{$article->user->name}}</small></a><br>
                            <small class="text-muted">Created: {{$article->created_at->diffForHumans()}}</small><br>
                            <small class="text-muted">Updated: {{$article->updated_at->diffForHumans()}}</small><br>
                            <small class="text-muted me-2">Comments: {{$article->comments()-> count()}}</small>
                            <small class="text-muted">Likes: {{$article->likes()-> count()}}</small>
                        </p>

                        <a href="/articles/{{$article->id}}/like">
                            @if($article->isliked)
                                unlike
                            @else
                            Like
                            @endif
                        </a>
                        <br>
                        @foreach($article->tags as $tag)
                        <a href="/articles/tags/{{$tag->id}}" class="text-decoration-none">
                            <span class="badge rounded-pill bg-secondary mt-2">
                                {{$tag->name}}
                            </span></a>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>

{{$articles-> links('partials.pagination')}}
@endsection

