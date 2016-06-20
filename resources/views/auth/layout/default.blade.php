<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Make My Invite | Signin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  @include('auth.layout.css')
</head>
<body class="hold-transition login-page">
    @yield('content')
    @include('auth.layout.js')
</body>
</html>
