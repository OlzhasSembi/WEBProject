@extends('layouts.basic')
@section('title-block') Dashboard @endsection
@section('content')
    <h1 style="font-family: 'Barlow Condensed'; color: #d3" align="center">Share task page</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach( $errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('task-shared-submit', $data->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label style="font-family: 'Barlow Condensed'; color: #d3" for="name">Task</label>
            <input class="form-control" type="text" name="name" value="{{$data->name}}" placeholder="Task name" id="name" disabled>
        </div>
        <div class="form-group">
            <label style="font-family: 'Barlow Condensed'; color: #d3" for="todo_date">Deadline</label>
            <input class="form-control" type="date" name="todo_date" placeholder="Deadline" value="{{$data->todo_date}}" id="todo_date" disabled>
        </div>
        <div class="form-group">
            <label style="font-family: 'Barlow Condensed'; color: #d3" for="shared_user">Email</label>
            <input class="form-control" type="text" name="shared_user" placeholder="Enter email of sharing user" id="shared_user">
        </div>
        <input class="form-control" type="hidden" value="{{ Auth::user()->email }}" name="owner">
        <button style="background-color: #0066c0; font-family: 'Barlow Condensed'" type="submit" class="btn btn-success">Share</button>
    </form>
@endsection
