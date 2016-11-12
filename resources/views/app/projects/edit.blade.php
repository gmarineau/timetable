@extends('layouts.app')

@section('content')



  <div class="panel panel-default">
    <div class="panel-heading">Projects</div>
    <div class="panel-body">
      {{ Form::open(['route' => ['projects.update', $project->id], 'method' => 'PUT']) }}

        <div class="form-group">
          {{ Form::label('title', 'Title') }}
          {{ Form::text('title', $project->title, ['class' => 'form-control']) }}
          <p class="text-danger">{{ $errors->first('title') }}</p>
        </div>

        <button type="submit" class="btn btn-primary">Store</button>
      {{ Form::close() }}
    </div>
  </div>


@endsection
