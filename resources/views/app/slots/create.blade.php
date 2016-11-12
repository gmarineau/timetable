@extends('layouts.app')

@section('content')



  <div class="panel panel-default">
    <div class="panel-heading">Projects</div>
    <div class="panel-body">
      {{ Form::open(['route' => 'slots.store']) }}
        <div class="row">
          <div class="form-group col-sm-12">
            {{ Form::label('description', 'Description') }}
            {{ Form::textarea('description', old('description'), ['class' => 'form-control']) }}
            <p class="text-danger">{{ $errors->first('description') }}</p>
          </div>

          <div class="form-group col-sm-6">
            {{ Form::label('time', 'Time') }}
            {{ Form::number('time', old('time'), ['class' => 'form-control']) }}
            <p class="text-danger">{{ $errors->first('time') }}</p>
          </div>

          <div class="form-group col-sm-6">
            {{ Form::label('when', 'When') }}
            {{ Form::date('when', old('when'), ['class' => 'form-control']) }}
            <p class="text-danger">{{ $errors->first('when') }}</p>
          </div>

          <div class="form-group col-sm-12">
            {{ Form::label('project_id', 'Project') }}
            {{ Form::select('project_id', $projects, old('project_id'), ['class' => 'form-control']) }}
            <p class="text-danger">{{ $errors->first('title') }}</p>
          </div>
        </div>



        <button type="submit" class="btn btn-primary">Store</button>
      {{ Form::close() }}
    </div>
  </div>


@endsection
