@extends('layouts.admin')

@section('pagetitle', 'Show')

@section('pageContent')

<div>
    <form class="row gy-3 m-5" method="POST" action="{{ route('admin.posts.update', $post->id )}}">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $post->title }}">
        </div>

        @error('title')
            <div class="alert-error alert alert-danger">{{ $message }}</div>
        @enderror

        <div>
            <label for="creator_name">Nome:</label>
            <input type="text" id="creator_name" name="creator_name" value="{{ $post->creator_name}}">
        </div>

        @error('creator_name')
            <div class="alert-error alert alert-danger">{{ $message }}</div>
        @enderror

        <div>
            <label for="description">Description:</label>
            <input type="text" id="description" name="description" value="{{ $post->description}}">
        </div>

        @error('description')
            <div class="alert-error alert alert-danger">{{ $message }}</div>
        @enderror

        <button class="btn btn-primary col-3" type="submit">MODIFICA</button>
    </form>

    <a href="{{ route('admin.posts.index') }}">Torna all'INDEX</a>
</div>



@endsection