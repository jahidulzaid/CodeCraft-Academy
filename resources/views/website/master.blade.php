<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Learning Platform - CodeCraft Academy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}website/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    @include('website.includes.style')

</head>
<body>
@include('website.includes.header')
@yield('body')
@include('website.includes.theme')
@include('website.includes.footer')
@include('website.includes.script')
</body>
</html>