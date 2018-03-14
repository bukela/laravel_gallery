@extends('layouts.app')

@section('content')
    <h3>{{ $album->name }}</h3>
    <a href="/" class="button secondary">Back</a>
    <a href="/photos/create/{{ $album->id }}" class="button">Upload photo</a>
    <hr>
@foreach ($album->photos as $photo)
    <div class="photo_title">{{ $photo->title }}</div>
    <div class="photo"><a href="/photos/{{ $photo->id }}"><img class="thumbnail" src="/storage/photos/{{ $photo->album_id }}/{{ $photo->photo }}" alt="{{ $photo->title }}"></a></div>
    @endforeach
@endsection