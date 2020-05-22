@extends('layouts.app')

@section('content')
    @if (session('warning'))
        <div class="alert alert-warning" style="text-align: center">
            {{ session('warning') }}
        </div>
    @endif
@include('inc.main')
@include('inc.footer')
@endsection
