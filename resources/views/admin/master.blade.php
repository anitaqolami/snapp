
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>وبسایت آموزشی لاراول</title>
    <link rel="stylesheet" href="{{ url('css/admin.css') }}">
</head>

<body>
<div id="app">
    @include('Admin.section.header')

    @yield('content')

</div>

@include('Admin.section.footer')
</body>
</html>
