<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Make My Invite</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        @include('layout.partials.css')
    </head>
   <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">
            @include('layout.partials.topmenu')
            @yield('content')
            @include('layout.partials.footer')
        </div>
        <!-- ./wrapper -->
        @include('layout.partials.js')
    </body>
</html>
