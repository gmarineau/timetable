@extends('layouts.app')

@section('content')


  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Login</div>
        <div class="panel-body">
          {{ Form::open(['url' => 'login']) }}
            <div class="form-group">
              {{ Form::label('email', 'E-mail') }}
              {{ Form::text('email', old('email'), ['class' => 'form-control']) }}
              <p class="text-danger">{{ $errors->first('email') }}</p>
            </div>
            <div class="form-group">
              {{ Form::label('password', 'Mot de passe') }}
              {{ Form::password('password', ['class' => 'form-control']) }}
              <p class="text-danger">{{ $errors->first('password') }}</p>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="remember"> Remember Me
                </label>
              </div>
            </div>
    
            <button type="submit" class="btn btn-primary">Login</button>

            <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                        
             
          {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>

@endsection
