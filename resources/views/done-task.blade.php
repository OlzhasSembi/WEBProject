@extends('layouts.basic')

@section('title-block') Task page @endsection

@section('content')
    <h1 style="font-family: 'Barlow Condensed'; color: #d3" align="center">Task page</h1>
    @foreach($data as $task)
        <div class="alert alert-info">
            <h3 style="font-family: 'Barlow Condensed'; color: #d3">{{ $task->name }}</h3>
            <p style="font-family: 'Barlow Condensed'; color: #d3">{{ $task->description }}</p>
            <p style="font-family: 'Barlow Condensed'; color: #d3">{{ $task->status }}</p>
            <p style="font-family: 'Barlow Condensed'; color: #d3"><smal>{{ $task->todo_date }}</smal></p>
            <a style="color: #0066c0; font-family: 'Barlow Condensed'" href="{{ route('task-data-one-done', $task->id) }}"><button style="background-color: #0066c0; font-family: 'Barlow Condensed'" class="btn btn-warning">More</button></a>
        </div>
    @endforeach
@endsection
