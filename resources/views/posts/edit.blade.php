@extends('layouts.app')

@section('content')

<h2> Editar Articulo </h2>

<form 
    action="{{ route('posts.update', $post) }}" 
    method="POST"
    enctype="multipart/form-data"
    >
    <div class="form-group">
        <label > User id </label>
        <input id="user_id" name="user_id" type="text" class="form-control" value="{{ old('user_id',$post->user_id) }}" >
    </div>
    <div class="form-group">
        <label> Title </label>
        <input id="title" name="title" type="text" class="form-control" required value="{{ old('title',$post->title) }}">
    </div>
    <div class="form-group">
        <label> Image </label>
        <input name="file" type="file">
    </div>
    <div class="form-group">
        <label > Contenido </label>
        <textarea id="body" name="body" type="text" class="form-control" required> {{ old('body',$post->body) }} </textarea>
    </div>
    <div class="form-group">
        <label> Contenido embebido </label>
        <textarea id="iframe" name="iframe" type="text" class="form-control">{{ old('iframe',$post->iframe) }}</textarea>
    </div>
    @csrf
    @method('PUT')
    <a href="/posts" class="btn btn-secondary" tabindex="5">Cancelar </a>
    <button type="submit" class="btn bton-primary" > Guardar </button>
</form>





@endsection