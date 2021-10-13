@extends('layout')
@section('title', 'view')
@section('content')


    <table class="table table-striped">
        <thead>
        <th>id</th>
        <th>title</th>
        <th>body</th>
        </thead>


        <tbody>


            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->title}}</td>
                <td>{{$article->body}}</td>
            </tr>


        </tbody>
    </table>

    <a class="btn btn-primary my-3" href="{{url()->previous()}}">back</a>


@endsection

