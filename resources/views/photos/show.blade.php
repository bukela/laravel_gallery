@extends('layouts.app')
@section('content')
<h3>{{ $photo->title }}</h3>
<p>{{ $photo->description }}</p>
<a href="/albums/{{ $photo->album_id }}">Back to Gallery</a>
<hr>
<img src="/storage/photos/{{ $photo->album_id }}/{{ $photo->photo }}" alt="{{ $photo->title }}">
<hr>
{!! Form::open(['action' => ['PhotosController@destroy', $photo->id], 'method' => 'POST'] ) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Delete Photo', ['class' => 'button alert']) }}
{!! Form::close() !!}
<span>Size : {{ round($photo->size/1024, 2) }} KB</span>
<hr>

@endsection