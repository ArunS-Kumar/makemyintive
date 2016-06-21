@extends('auth.layout.default')

@section('content')

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
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

  @if (Session::has('info'))
    <div class="alert alert-danger">
        <ul>
              <li>{{ Session::get('info') }}</li>
        </ul>
    </div>
@endif

  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Reset your password !</p>

        {!! Form::open([
            'route'     => ['forgotpassword'],
            'files'     => true,
            'id'    => 'forgotpassword_id',
        ]) !!}

        <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
    
      <div class="row">
        <div class="col-xs-5">
         
        </div>
        <!-- /.col -->
        <div class="col-xs-7">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Send verification email</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>

@stop
