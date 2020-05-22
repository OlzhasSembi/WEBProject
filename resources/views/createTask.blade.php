@extends('layouts.basic')
@section('title-block') Dashboard @endsection
@section('content')
    <h1 style="font-family: 'Barlow Condensed'; color: #d3" align="center">Task page</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach( $errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('task-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label style="font-family: 'Barlow Condensed'; color: #d3" for="name">Enter a name of a task</label>
            <input class="form-control" type="text" name="name" placeholder="Task name" id="name">
        </div>
        <div class="form-group">
            <label style="font-family: 'Barlow Condensed'; color: #d3" for="description">Description</label>
            <textarea class="form-control" name="description" id="description" placeholder="Enter description"></textarea>
        </div>
        <div class="form-group">
            <label style="font-family: 'Barlow Condensed'; color: #d3" for="todo_date">Choose a date</label>
            <input class="form-control" type="date" name="todo_date" placeholder="Choose date" id="todo_date">
        </div>
        <input class="form-control" type="hidden" value="{{ Auth::user()->email }}" name="owner">
        <input class="form-control" type="hidden" value="no status" name="status">
        <button style="background-color: #0066c0; font-family: 'Barlow Condensed'" type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
