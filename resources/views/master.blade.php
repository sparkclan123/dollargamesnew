<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ระบบการฝากเงิน</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">

        <link rel="stylesheet" media="all" type="text/css" href="{{ asset('cash/jquery-ui.css')}} "/>
        <link rel="stylesheet" media="all" type="text/css" href="{{ asset('cash/jquery-ui-timepicker-addon.css')}}" />
        <script src="{{ asset('cash/jquery-1.10.2.min.js') }}"></script>
        <script src="{{ asset('cash/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('cash/jquery-ui-timepicker-addon.js') }}"></script>
        <script src="{{ asset('cash/jquery-ui-sliderAccess.js') }}"></script>
    
</head>
<body>

    <div class="container">
        <h3>ระบบการฝากเงิน</h3>
        @include('bar')
        @section('content')

        @show
        @include('barwith')
    </div>

</body>
</html>