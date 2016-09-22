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
    <p class="login-box-msg">Sign in to start your session</p>

        {!! Form::open([
            'route'     => ['auth.signin'],
            'files'     => true,
            'id'    => 'signin_id',
        ]) !!}

        <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <em for="email" class="error"></em>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <em for="password" class="error"></em>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remeber"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="redirect" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
   <!--    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a> -->
    </div>
    <!-- /.social-auth-links -->

    <a href="{{ route('forgotpassword') }}">I forgot my password</a><br>
    <a href="{{ route('auth.signup') }}" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>

<!--
<div class="page-header">
  <h1>Mobile Web Share Dialog</h1>
</div>

<p>Run this code on a mobile device or emulator. Tap the button below to trigger a Share Dialog</p>

<div id="shareBtn" class="btn btn-success clearfix">Share</div>

<p style="margin-top: 50px">
  <hr />
  <a class="btn btn-small"  href="https://developers.facebook.com/docs/sharing/reference/share-dialog">Share Dialog Documentation</a>
</p>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=1826944510871993";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<div class="fb-comments" data-href="http://makemyintive.com/" data-numposts="5"></div>


<script>

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1826944510871993',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

document.getElementById('shareBtn').onclick = function() {
  FB.ui({
    method: 'share',
    mobile_iframe: true,
    href: 'http://makemyintive.com/home/images/logo.png',
  }, function(response){});
}
</script>

// see the refreecnce url : http://tamilentertainment.co.in/world-rare-caught-video/
-->

@stop
