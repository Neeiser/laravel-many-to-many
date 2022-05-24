@extends('layouts.admin')

@section('pagetitle', 'Index')

@section('pageContent')

<h1>
  <a class="title navbar-brand" href="{{ url('/') }}">
    {{ config('app.name', 'Laravel') }}
  </a>
</h1>

<form action="{{ route('admin.posts.create')}}">
  <button class="btn btn-outline-dark">CREATE A NEW DATA</button>
</form>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#ID</th>
        <th scope="col">CREATOR'S NAME</th>
        <th scope="col">TITLE</th>
        <th scope="col">CATEGORY</th>
        <th scope="col">SLUG GENERATED</th>
        <th scope="col">ACTIONS</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($postsData as $post)
        <tr>
          <th scope="row">{{ $post->id }}</th>
          <td class="col-1">{{ $post->creator_name }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->categories_name }}</td>
          <td>WIP</td>
          <td>
            <a class="btn btn-info" id="show-a" href="{{ route('admin.posts.show', $post->id)}}">VIEW</a>
          </td>
          <td>
            <form id="delete-form" action="{{ route('admin.posts.destroy', $post->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger">DELETE</button>
            </form>
          </td>
          <td>
            <a class="btn btn-warning" id="edit-a" href="{{ route('admin.posts.edit', $post->id)}}">EDIT</a>
          </td>
        </tr>
      @endforeach
    </tbody>
</table>
@endsection