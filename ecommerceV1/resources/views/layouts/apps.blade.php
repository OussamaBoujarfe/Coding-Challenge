
<html>

<head>

<link rel="stylesheet" href="f/css/bootstrap.css">
<link href="f/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="f/css/buttons.dataTables.min.css" rel="stylesheet">
<script type="text/javascript" src="f/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="f/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="f/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="f/js/jszip.min.js"></script>
<script type="text/javascript" src="f/js/pdfmake.min.js"></script>
<script type="text/javascript" src="f/js/vfs_fonts.js"></script>

<script type="text/javascript" src="f/js/bootstrap.min.js"></script>

<script type="text/javascript" src="f/js/jquery-2.2.4.min.js"></script>

<script type="text/javascript" src="f/js/jquery.printPage.js"></script>
<link href="{{ URL::asset("f/img/home.ico") }}" rel="icon" height="13" weidth="13">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!-- Styles -->
    <link href="{{ asset('f/css/theme.css') }}" rel="stylesheet">


</head>
<body>
<div id="app" >

 @include('partials.menu')
 @include('partials.flash')

    @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('f/js/app.js') }}"></script>
</body>

</html>
