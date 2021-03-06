
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">  
            <div class="card">
                <div class="card-body">
                @if($post->image)
                    <img src="{{ $post->get_imagen }}" class="card-img-top">
                @elseif ($post->iframe)
                <div class="embed-responsive embed-responsive-16by9">
                    {!! $post->iframe !!}
                </div>
                @endif
                    <h5 class="card-title">{{ $post->title}}</h5>
                    <p class="card-text">
                        {{ $post->body}}
                    </p>
                    <p>
                        <em>
                            $ndash; {{ $post->user->email }}
                        </em>
                        {{ $post->updated_at->format('d M Y') }}
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
