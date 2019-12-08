<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="Mewadahi para pengantusias, pelajar, dan professional di kalangan IT untuk belajar, mengajar, dan berkembang bersama-sama."/>
        <meta property="og:url" content="{{ Request::url() }}" />
        <meta property="og:type" content="website" />
        <meta property="og:description" content="Mewadahi para pengantusias, pelajar, dan professional di kalangan IT untuk belajar, mengajar, dan berkembang bersama-sama." />
        <meta property="og:title" content="Komunitas Developer Aceh" />
        <meta property="og:image" content="{{ asset('image/logo-alt.png') }}" />
        <link itemprop="thumbnailUrl" href="{{ asset('image/logo-alt.png') }}">
        <meta name="twitter:image:src" content="{{ asset('image/logo-alt.png') }}">
        <meta name="twitter:card" content="summary_large_image" />

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Chrome, Firefox OS and Opera -->
       <meta name="theme-color" content="#1766a7">

       <!-- Windows Phone -->
       <meta name="msapplication-navbutton-color" content="#1766a7">

       <!-- iOS Safari -->
       <meta name="apple-mobile-web-app-status-bar-style" content="#1766a7">

        <title>Komunitas Developer Aceh (Kode Aceh)</title>
        <link rel="shortcut icon" type="image/png" href="{{asset('image/logo-alt-small.png')}}"/>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
      @yield('content')
      @include('partials.footer')
      <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>
