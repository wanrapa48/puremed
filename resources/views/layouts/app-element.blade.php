<!doctype html>
<html ng-app="application" lang="{{ app()->getLocale() }}">
    <head class="kanitregular">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>PUREMED</title>
        <!-- VENDOR CSS -->
        <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/linearicons/style.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/chartist/css/chartist-custom.css')}}">
        <!-- MAIN CSS -->
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
        <link rel="stylesheet" href="{{asset('css/demo.css')}}">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
        <script src="{{asset('js/app.js')}}"></script>
        
       
    </head>
    <body>
        <div class="container-scroller">
            @include('elements.navbar')
            <div class="container-fluid page-body-wrapper">
                @include('elements.partials_navbar')
                @yield('content')  
            </div>
        </div>

    
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('js/klorofil-common.js')}}"></script>
    <!-- END SCRIPTS -->  
    </body>
</html>
