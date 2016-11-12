@extends('layouts.app')

@section('content')



  <div class="panel panel-default">
    <div class="panel-heading">Projects</div>
    <table class="table">
      @foreach ($projects as $project)
        <tr>
          <td>{{ $project->title }}</td>
          <td class="text-right">
            {{ Form::open(['route' => ['projects.destroy', $project->id], 'method' => 'DELETE']) }}
              <a href="" class="btn btn-primary btn-xs">Edit</a>
              <button type="submit" class="btn btn-danger btn-xs">Delete</button>
            {{ Form::close() }}
            
            
          </td>
        </tr>
      @endforeach
    </table>
  </div>


@endsection
