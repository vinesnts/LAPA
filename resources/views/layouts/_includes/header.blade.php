<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
            @yield('titulo') | LAPA - UFAPE    
        </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+HK&display=swap" rel="stylesheet"> 
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/clndr.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>
        
        <!-- Icones do Font Awesome -->
        <script defer src="https://kit.fontawesome.com/8eafe50798.js" crossorigin="anonymous"></script>
        
        <!-- include summernote css/js -->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
        <script defer src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
        <script src="{{ asset('js/summernote_config.js') }}"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.standalone.min.css">

        <!-- Mascaras -->
        <script defer type="text/javascript" src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
        <script defer type="text/javascript" src="{{ asset('js/jquery/jquery.inputmask.js') }}"></script>      
        <script defer type="text/javascript" src="{{ asset('js/jquery/jquery.maskMoney.min.js') }}"></script>
        <script defer="true" src="{{ asset('js/masks.js') }}"></script>

        <!-- Scripts -->
        <script src="{{ asset('js/pesquisa_atlas.js') }}"></script>
        <script src="{{ asset('js/pesquisa_materiais.js') }}"></script>
        
        <!-- reCAPTCHA-->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>
    <body>
    @include('layouts._includes.nav')