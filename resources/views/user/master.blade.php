<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>پنل مدیریت</title>

    <link rel="stylesheet" href="{{ url('css/admin.css') }}">
    <link rel="stylesheet" href="{{ url('css/leaflet.css') }}">


</head>

    <body class="hold-transition sidebar-mini">
         <div class="container-fluid">
         {{--<div class="wrapper">--}}
            {{--<div id="app">--}}

                @include('user.section.header')

                 @yield('content')

            {{--</div>--}}

                @include('user.section.footer')

        </div>
    </body>
</html>