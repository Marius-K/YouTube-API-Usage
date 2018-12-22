@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($results as $video)
            <div class="card" style="width: 18rem;">
                <a href="https://youtu.be/{{ $video->id->videoId }}">
                    <img class="card-img-top" src="{{ $video->snippet->thumbnails->medium->url }}" alt="{{ $video->snippet->title }}">
                </a>
                <div class="card-body">
                    <h5 class="card-title">{{ str_limit($video->snippet->title, 20) }}</h5>
                    <p class="card-text">{{ str_limit($video->snippet->description) }}</p>
                    <a href="https://youtu.be/{{ $video->id->videoId }}" class="btn btn-primary">Go to the video</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection