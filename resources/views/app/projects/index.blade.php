@extends('layouts.app')

@section('content')

  <div class="page-header">
    <h1>Projects</h1>
  </div>

  <p><a href="{{ route('projects.create') }}" class="btn btn-primary">Create a project</a></p>

  <div class="panel panel-default">
    <table class="table">
      @foreach ($projects as $project)
        <tr>
          <td>{{ $project->title }}</td>
          <td class="text-right">
            {{ Form::open(['route' => ['projects.destroy', $project->id], 'method' => 'DELETE']) }}
              <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-primary btn-xs">Edit</a>
              <button type="submit" class="btn btn-danger btn-xs">Delete</button>
            {{ Form::close() }}
          </td>
        </tr>
      @endforeach
    </table>
  </div>


@endsection
