@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Register</div>
        <div class="panel-body">
          {{ Form::open(['url' => '/register']) }}
            <div class="row">
              <div class="form-group col-sm-6">
                {{ Form::label('first_name', 'First name') }}
                {{ Form::text('first_name', old('first_name'), ['class' => 'form-control']) }}
                <p class="text-danger">{{ $errors->first('first_name') }}</p>
              </div>
              <div class="form-group col-sm-6">
                {{ Form::label('last_name', 'Last name') }}
                {{ Form::text('last_name', old('last_name'), ['class' => 'form-control']) }}
                <p class="text-danger">{{ $errors->first('last_name') }}</p>
              </div>
              <div class="form-group col-sm-12">
                {{ Form::label('email', 'E-mail') }}
                {{ Form::text('email', old('email'), ['class' => 'form-control']) }}
                <p class="text-danger">{{ $errors->first('email') }}</p>
              </div>
              <div class="form-group col-sm-6">
                {{ Form::label('password', 'Password') }}
                {{ Form::password('password', ['class' => 'form-control']) }}
                <p class="text-danger">{{ $errors->first('password') }}</p>
              </div>
              <div class="form-group col-sm-6">
                {{ Form::label('password_confirmation', 'Confirm Password') }}
                {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
          {{ Form::close() }}
        </div>
      </div>

    </div>
  </div>

@endsection
