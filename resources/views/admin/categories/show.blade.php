@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="my-5">{{ $category->name }}</h1>
                <a href=""></a>
            </div>
            <div class="col-12">
                {{ $category->slug }}
            </div>
            <div class="col-12">
                <h4>Post della categoria</h4>
                <div class="row">
                    @foreach ($category->posts as $post)
                        <div class="col-12 col-md-4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="{{ asset('storage/'.$post->cover_image)}}" class="img-fluid">
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <h4 class="mb-5">{{ $post->title }}</h4>
                                        <a class="btn btn-sm btn-primary" href="{{ route('admin.posts.show', $post->id)}}">Leggi l'articolo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection