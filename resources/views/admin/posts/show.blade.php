@extends('layouts.admin')

@section('pagetitle', 'Show')

@section('pageContent')

<div class="mx-auto" style="width: 850px;">
    <h2 class="py-3">{{ $post->title }}</h2>
    <small>Creator Name: <strong>{{ $post->creator_name }}</strong></small>
    <p class="my-3">DESCRIPTION: {{ $post->description }}</p>
    <p>SLUG: {{ $post->slug }}</p>
    <a href="{{ route('admin.posts.index') }}">Torna all'INDEX</a><br>
    <a href="{{ route('admin.posts.edit', $post->id) }}">Modifica nuovamente</a>
</div>


@endsection