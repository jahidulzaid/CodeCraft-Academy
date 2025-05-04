<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Learning Platform - CodeCraft Academy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="1052304982162-6f7mafdka87ltfd3m3rq3jom33lfvi53.apps.googleusercontent.com">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}website/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    @include('website.includes.style')

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

<header>
    <div class="headerarea headerarea__3 header__sticky header__area">
        <div class="container desktop__menu__wrapper">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-6">
                    <div class="headerarea__left">
                        <div class="headerarea__left__logo">

                            <a href="{{ route('home') }}"><img loading="lazy"  src="{{ asset('/') }}website/img/logo/logo_1.png" alt="logo"></a>
                        </div>

                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 main_menu_wrap">
                    <div class="headerarea__main__menu">
                        <nav>
                            <ul>




                                <li class="mega__menu position-static">
                                    <a class="headerarea__has__dropdown" href="{{ route('course-list') }}">Courses </a>

                                </li>

                                <li class="mega__menu position-static">
                                    <a class="headerarea__has__dropdown" href="{{route('blog')}}">Community</a>


                                </li>


                                


                                <li><a class="headerarea__has__dropdown" href="{{ route('student.dashboard')}}">Dashboard <i class="icofont-rounded-down"></i></a>
                                    <ul class="headerarea__submenu headerarea__submenu--third--wrap">
                                        <li><a href="{{ route('student.dashboard')}}">Student <i class="icofont-rounded-right"></i></a>

                                        </li>
                                        
                                        <li>
                                            <a href="dashboard/instructor-dashboard.html">Instructor <i class="icofont-rounded-right"></i></a>

                                        </li>
                                        <li><a href="">Admin <i class="icofont-rounded-right"></i></a>
                                

                                
                                        </li>
                                        
                                    </ul>
                                </li>

                                <li><a class="headerarea__has__dropdown" href="{{ route('shop') }}">Shop</a>
                                </li>

                                <li class="mega__menu position-static">
                                    <a class="headerarea__has__dropdown" href="{{ route('compiler.index') }}">Compiler</a>

                                </li>

                                <li><a class="headerarea__has__dropdown" href="{{ url('http://localhost:8501/') }}">Ask AI</a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="headerarea__right">



                        <div class="headerarea__login">
                            <a href="{{ route('signin') }}"><i class="icofont-user-alt-5"></i></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <div class="container-fluid mob_menu_wrapper">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="mobile-logo">
                        <a class="logo__dark" href="#"><img loading="lazy"  src="{{ asset('/') }}website/img/logo/logo_1.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="header-right-wrap">

                        <div class="headerarea__right">

                            
                        </div>

                        <div class="mobile-off-canvas">
                            <a class="mobile-aside-button" href="#"><i class="icofont-navigation-menu"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>



















@include('website.includes.theme')
@include('website.includes.footer')
@include('website.includes.script')
</body>
</html>

