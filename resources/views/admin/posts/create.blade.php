@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center my-5">
                    <div>
                        <h1>Aggiungi nuovo post</h1>
                    </div>
                    <div>
                        <a href="{{ route('admin.posts.index') }}" class="btn btn-sm btn-primary">Ritorna alla lista dei post</a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                @if($errors->any)
                    <div class="alerrt alert-danger">
                        <ul>
                            @foreach ($errors->all() as $err)
                                <li>{{ $err }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-4">
                        <label class="control-label">Titolo</label>
                        <input class="form-control @error('title')is-invalid @enderror" type="text" name="title" id="title" placeholder="Titolo" value="{{ old('title') }}" required>
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <label class="control-label">Immagine di copertina</label>
                        <input type="file" class="form-control @error('cover_image')is_invalid @enderror" name="cover_image" id="cover_image">
                        @error('cover_image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <label class="control-label">Categoria</label>
                        <select class="form-control @error('category_id')is_invalid @enderror" name="category_id" id="category_id">
                            <option value="">Seleziona categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <label class="control-label">Contenuto</label>
                        <textarea class="form-control" name="content" id="content" placeholder="Contenuto">{{ old('content') }}</textarea>
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-sm btn-success">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection