@extends('layouts.basic')
@section('title-block') Dashboard @endsection
@section('content')
    <h1 style="font-family: 'Barlow Condensed'; color: #d3" align="center">Update page</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach( $errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('task-update-submit', $data->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label style="font-family: 'Barlow Condensed'; color: #d3" for="name">Enter a name of a task</label>
            <input class="form-control" type="text" name="name" value="{{$data->name}}" placeholder="Task name" id="name">
        </div>
        <div class="form-group">
            <label style="font-family: 'Barlow Condensed'; color: #d3" for="description">Description</label>
            <textarea class="form-control" name="description" id="description" placeholder="Enter description">{{$data->description}}</textarea>
        </div>
        <div class="form-group">
            <label style="font-family: 'Barlow Condensed'; color: #d3" for="status">Status</label>
            <select class="form-control" name="status" id="status">
                <option value="{{$data->status}}">{{$data->status}}</option>
                <option value="In the process">In the process</option>
                <option value="Done">Done</option>
            </select>
        </div>
        <div class="form-group">
            <label style="font-family: 'Barlow Condensed'; color: #d3" for="todo_date">Choose a date</label>
            <input class="form-control" type="date" name="todo_date" value="{{$data->todo_date}}" placeholder="Choose date" id="todo_date">
        </div>
        <input class="form-control" type="hidden" value="{{ Auth::user()->email }}" name="owner">
        <button style="background-color: #0066c0; font-family: 'Barlow Condensed'" type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
