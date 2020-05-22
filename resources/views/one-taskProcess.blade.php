@extends('layouts.basic')

@section('title-block') {{$data->name}} @endsection

@section('content')
    <h1 style="font-family: 'Barlow Condensed'; color: #d3" align="center">{{$data->name}}</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="alert alert-info">
        <p style="font-family: 'Barlow Condensed'; color: #d3">{{ $data->description }}</p>
        <p style="font-family: 'Barlow Condensed'; color: #d3">{{ $data->owner }}</p>
        <p style="font-family: 'Barlow Condensed'; color: #d3">{{ $data->status }}</p>
        <p style="font-family: 'Barlow Condensed'; color: #d3"><smal>{{ $data->todo_date}}</smal></p>
        <a style="color: #0066c0; font-family: 'Barlow Condensed'" href="{{ route('task-update-process', $data->id) }}"><button style="background-color: #0066c0; font-family: 'Barlow Condensed'" class="btn btn-primary">Edit</button></a>
        <a style="color: #0066c0; font-family: 'Barlow Condensed'" href="{{ route('task-delete-process', $data->id) }}"><button style="background-color: #0066c0; font-family: 'Barlow Condensed'" class="btn btn-danger">Delete</button></a>
    </div>
@endsection
