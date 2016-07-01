<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Make My Invite </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  @include('home.layout.css')
</head>
<body data-spy="scroll" data-target="#navbar-scroll">
    @yield('content')
    @include('home.layout.js')
</body>
</html>
