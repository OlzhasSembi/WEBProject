@extends('layouts.basic')
@section('title-block') Dashboard @endsection
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
@endsection
