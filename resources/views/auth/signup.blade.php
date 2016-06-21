@extends('auth.layout.default')

@section('content')

<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Make </b>My Invite</a>
  </div>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>
        
        {!! Form::open([
            'route'     => ['auth.signup'],
            'files'     => true,
            'id'    => 'signup_id',
        ]) !!}

      <div class="form-group has-feedback">
        <input type="text" name="name" class="form-control" placeholder="Full name" value="{{ Request::old('name') }}">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email" value="{{ Request::old('email') }}">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="repassword" class="form-control" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
       <div class="col-xs-8">
         <!--   <div class="checkbox icheck">
            <label>
              <input type="checkbox" > I agree to the <a href="#">terms</a>
            </label>
          </div>-->
        </div> 
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
     <!--  <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a> -->
    </div>

    <a href="{{ route('auth.signin') }}" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

@stop
