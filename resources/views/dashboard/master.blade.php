<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Student Dashboard | Interactive Learning Platform</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}website/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    {{-- css --}}
    @include('dashboard.includes.style')

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
          document.documentElement.classList.add("is_dark");
        } 
        if (localStorage.getItem("theme-color") === "light") {
          document.documentElement.classList.remove("is_dark");
        } 
    </script>    

</head>

<body>
    @include('dashboard.includes.header')
    @include('dashboard.includes.theme')
    @yield('body')
    @include('dashboard.includes.footer')
    @include('dashboard.includes.script')
    
</body>




</html>