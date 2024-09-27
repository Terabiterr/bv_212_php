@extends('Layouts.layout')

@section('content')
    <h1>List tasks</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Is completed</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr scope="row">
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->isCompleted }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
@endsection
