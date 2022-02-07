<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="ka-GE" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="baseurl" content="{{ url('/') }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        
        <meta name="description" content="" />
        
        <link rel="stylesheet" href="{{ asset('assets/css/uikit.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}"/>
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <script type="text/javascript" src="{{ asset('assets/js/uikit.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/uikit-icons.min.js') }}"></script>
        
        <title>Online Shop - @yield('title', 'Online shop')</title>
        
        
        <style>
            * {
                border-radius: 4px !important;
            }
        </style>
    </head>
    <body>