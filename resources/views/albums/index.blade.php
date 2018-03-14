@extends('layouts.app')

@section('content')
    <h3>Albums</h3>
    @foreach ($albums as $album)
    <div class="row album">
        <div class="album_name">{{ $album->name }}</div>
        <div class="album_cover"><a href="/albums/{{ $album->id }}"><img src="storage/album_covers/{{ $album->cover_image }}" alt="{{ $album->name }}"></a></div>
        <hr class="album_hr">
    </div>
    @endforeach
@endsection