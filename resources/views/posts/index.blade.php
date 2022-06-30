@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> 
                    Articulo 
                    <form action="{{ route('posts.store')}}" method="POST">
                        @csrf
                        @method('CREATE')
                    <div class="nb-3">
                        <label for="" class="form-label">Titulo</label>
                        <input id="title" name="title" type="text" class="form-control" tabindex="1">
                    </div>
                    <a href="{{ route('posts.store')}}" class="btn btn-sm btn-primary" > crear</a>
                </div>
            </form>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                   <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titulo</th>
                            <th colspan="2"> &nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                        <td>{{ $post->id }} </td>
                        <td>{{ $post->title }} </td>
                        <td>
                        <a href="{{ route('posts.edit', $post)}}" class="btn-primary btn-sm"> Editar</a>    
                        </td>
                        <td>
                            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input
                                type="submit"
                                value="Eliminar" class="btn btn-sm btn-danger"
                                onclick="return confirm('¿Desea eliminar?')"
                                >
                            </form>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
