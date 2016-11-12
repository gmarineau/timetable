@extends('layouts.app')

@section('content')

  <div class="page-header">
    <h1>Slots</h1>
  </div>

  <p><a href="{{ route('slots.create') }}" class="btn btn-primary">Create a slot</a></p>

  <div class="panel panel-default">
    <table class="table">
      <thead>
        <tr>
          <th class="text-center">Time</th>
          <th class="text-center">When</th>
          <th class="text-center">Project</th>
          <th></th>
        </tr>
      </thead>
      @foreach ($slots as $slot)
        <tr>
          <td class="text-center">{{ $slot->time }}</td>
          <td class="text-center">{{ $slot->when->format('d.m.Y') }}</td>
          <td class="text-center"><b>{{ $slot->project->title }}</b></td>
          <td class="text-right">
            {{ Form::open(['route' => ['projects.destroy', $slot->id], 'method' => 'DELETE']) }}
              <a href="{{ route('slots.edit', $slot->id) }}" class="btn btn-primary btn-xs">Edit</a>
              <button type="submit" class="btn btn-danger btn-xs">Delete</button>
            {{ Form::close() }}
          </td>
        </tr>
      @endforeach
    </table>
  </div>


@endsection
