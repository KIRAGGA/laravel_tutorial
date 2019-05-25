@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($post) > 0)
        @foreach ($post as $post)
            <div class="well">
                 <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small> 
            </div>
        @endforeach
        {{-- {{$post->links()}} --}}
    @else
        <p>No posts found</p>
    @endif
@endsection