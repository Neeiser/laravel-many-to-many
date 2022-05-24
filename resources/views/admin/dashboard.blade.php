@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                </div>

                <li class="list-group-item list-group-item-action">
                    GO TO: <a href="{{ url('/') }}">HOMPAGE</a>
                    or just press the TOP-LEFT Site name.
                </li>
                <li class="list-group-item list-group-item-action">
                    GO TO: <a href="{{ route('admin.posts.index') }}">INDEX</a>
                </li>
            </div>
        </div>
    </div>
</div>
@endsection
