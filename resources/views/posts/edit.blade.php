@extends('layouts.app')

@section('content')

<h2> EDITAR REGISTROS </h2>

<form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="nb-3">
        <label for="" class="form-label"> User id </label>
        <input id="user_id" name="user_id" type="text" class="form-control" value="{{ $post->user_id }}">
    </div>
    <div class="nb-3">
        <label for="" class="form-label"> Title </label>
        <input id="title" name="title" type="text" class="form-control" value="{{ $post->title }}">
    </div>
    <div class="nb-3">
        <label for="" class="form-label"> Body </label>
        <input id="body" name="body" type="text" class="form-control" value="{{ $post->body }}">
    </div>
    <a href="/posts" class="btn btn-secondary" tabindex="5">Cancelar </a>
    <button type="submit" class="btn bton-primary" > Guardar </button>
</form>





@endsection