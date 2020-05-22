@extends('layouts.basic')

@section('title-block') Task page @endsection

@section('content')
    <h1 style="font-family: 'Barlow Condensed'; color: #d3" align="center">Group tasks page</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @foreach($data as $task)
        <div class="alert alert-info p-3">
            <h3 style="font-family: 'Barlow Condensed'; color: #d3">{{ $task->name }}</h3>
            <!-- <p>{{ $task->description }}</p> -->
            <p style="font-family: 'Barlow Condensed'; color: #d3">Deadline: {{ $task->todo_date }}</p>
            <!-- <p>{{ $task->owner }}</p> -->
            <p style="font-family: 'Barlow Condensed'; color: #d3">Shared user: {{ $task->email }}</p>
            <a style="color: #0066c0; font-family: 'Barlow Condensed'" href="{{ route('task-data-one-shared', $task->id) }}"><button style="background-color: #0066c0; font-family: 'Barlow Condensed'" class="btn btn-warning">More</button></a>
        </div>
    @endforeach
@endsection
