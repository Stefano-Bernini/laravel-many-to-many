@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="my-5">{{ $post->title }}</h1>
                <a href=""></a>
            </div>
            <div class="col-12">
                <img src="{{ asset('storage/'.$post->cover_image)}}" width="500px">
            </div>
            <div class="col-12">
                <strong>Ctegoria:</strong>
                @if($post->category)
                    {{ $post->category->name }}
                    <br>
                    <a href="{{route('admin.categories.show', $post->category->id)}}" class="btn btn-sm btn-primary">Visualizza categoria</a>
                @else
                    Senza categoria
                @endif
            </div>
            <div class="col-12">
                <p>{{ $post->content }}</p>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-sm btn-primary">Ritorna alla lista dei post</a>
            </div>
        </div>
    </div>
@endsection