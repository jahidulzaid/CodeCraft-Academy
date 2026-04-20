
@extends('website.master')

@section('body')


        <!-- theme fixed shadow -->
        <div>
            <div class="theme__shadow__circle"></div>
            <div class="theme__shadow__circle shadow__right"></div>
        </div>
        <!-- theme fixed shadow -->

        <!-- breadcrumbarea__section__start -->

        <div class="breadcrumbarea">

            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb__content__wraper" data-aos="fade-up">
                            <div class="breadcrumb__title">
                                <h2 class="heading">Log In</h2>
                            </div>
                            <div class="breadcrumb__inner">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li>Log In</li>
                                </ul>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

            <div class="shape__icon__2">
                <img loading="lazy"  class=" shape__icon__img shape__icon__img__1" src="{{ asset('/') }}website/img/herobanner/herobanner__1.png" alt="photo">
                <img loading="lazy"  class=" shape__icon__img shape__icon__img__2" src="{{ asset('/') }}website/img/herobanner/herobanner__2.png" alt="photo">
                <img loading="lazy"  class=" shape__icon__img shape__icon__img__3" src="{{ asset('/') }}website/img/herobanner/herobanner__3.png" alt="photo">
                <img loading="lazy"  class=" shape__icon__img shape__icon__img__4" src="{{ asset('/') }}website/img/herobanner/herobanner__5.png" alt="photo">
            </div>

        </div>
        <!-- breadcrumbarea__section__end-->

        <!-- login__section__start -->
        <div class="loginarea sp_top_100 sp_bottom_100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-md-8 offset-md-2" data-aos="fade-up">
                        <ul class="nav  tab__button__wrap text-center" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="single__tab__link active" data-bs-toggle="tab" data-bs-target="#projects__one" type="button">Login</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__two" type="button">Sign up</button>
                            </li>
                        </ul>
                    </div>


                    <div class="tab-content tab__content__wrapper" id="myTabContent" data-aos="fade-up">

                        @if ($errors->any())
                            <div class="col-xl-8 col-md-8 offset-md-2 mb-4">
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif

                        @if (session('status'))
                            <div class="col-xl-8 col-md-8 offset-md-2 mb-4">
                                <div class="alert alert-success mb-0">{{ session('status') }}</div>
                            </div>
                        @endif

                        <div class="tab-pane fade active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
                            <div class="col-xl-8 col-md-8 offset-md-2">
                                <div class="loginarea__wraper">
                                    <div class="login__heading">
                                        <h5 class="login__title">Login</h5>
                                        <p class="login__description">Don't have an account yet? Use the sign up tab.</p>
                                    </div>



                                    <form action="{{ route('signin.custom') }}" method="POST">
                                        @csrf
                                        <div class="login__form">
                                            <label class="form__label">Username or email</label>
                                            <input class="common__login__input" name="email" type="text" placeholder="Your username or email" value="{{ old('email') }}" required>

                                        </div>
                                        <div class="login__form">
                                            <label class="form__label">Password</label>
                                            <input class="common__login__input" name="password" type="password" placeholder="Password" required>

                                        </div>
                                        <div class="login__form d-flex justify-content-between flex-wrap gap-2">
                                            <div class="form__check">
                                                <input id="remember" name="remember" type="checkbox" value="1" {{ old('remember') ? 'checked' : '' }}>
                                                <label for="remember"> Remember me</label>
                                            </div>
                                            <div class="text-end login__form__link">
                                                <a href="{{ route('password.request') }}">Forgot your password?</a>
                                            </div>
                                        </div>
                                        <div class="login__button">
                                            <button class="default__button" type="submit">Log In</button>
                                        </div>
                                    </form>

                                    <div class="login__social__option">
                                        <p>or Log-in with</p>

                                        <ul class="login__social__btn">
                                            {{-- <li><a class="default__button login__button__1" href="#"><i class="icofont-facebook"></i> FB</a></li> --}}
                                            <li>
                                                {{-- <a href="{{ route('google.login') }}" class="default__button login__button__1">                                                    
                                                    <i class="icofont-google"></i> Google
                                                </a> --}}
                                                <a href="{{ route('google.login', ['role' => 'instructor']) }}" class="default__button login__button__1"> <i class="icofont-google"></i> Login as Instructor with Google</a>
                                                <a href="{{ route('google.login', ['role' => 'student']) }} " class="default__button login__button__1" > <i class="icofont-google"></i> Login as Student with Google</a>



                                            </li>
                                        </ul>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="projects__two" role="tabpanel" aria-labelledby="projects__two">
                            <div class="col-xl-8 offset-md-2">
                                <div class="loginarea__wraper">
                                    <div class="login__heading">
                                        <h5 class="login__title">Sign Up</h5>
                                        <p class="login__description">Already have an account? Use the login tab.</p>
                                    </div>



                                    <form id="reg-form" action="{{ route('register') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="login__form">
                                                    <label class="form__label">First Name</label>
                                                    <input class="common__login__input" name="first_name" type="text" placeholder="First Name" value="{{ old('first_name') }}" required>

                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="login__form">
                                                    <label class="form__label">Last Name</label>
                                                    <input class="common__login__input" name="last_name" type="text" placeholder="Last Name" value="{{ old('last_name') }}" required>

                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="login__form">
                                                    <label class="form__label">Username</label>
                                                    <input class="common__login__input" name="username" type="text" placeholder="Username" value="{{ old('username') }}" required>

                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="login__form">
                                                    <label class="form__label">Email</label>
                                                    <input class="common__login__input" name="email" type="email" placeholder="Your Email" value="{{ old('email') }}" required>

                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="login__form">
                                                    <label class="form__label">I want to join as</label>
                                                    <select class="common__login__input" name="role" required>
                                                        <option value="">Select role</option>
                                                        <option value="student" {{ old('role') === 'student' ? 'selected' : '' }}>Student</option>
                                                        <option value="instructor" {{ old('role') === 'instructor' ? 'selected' : '' }}>Instructor</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="login__form">
                                                    <label class="form__label">Password</label>
                                                    <input class="common__login__input" name="password" type="password" placeholder="Password" required>

                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="login__form">
                                                    <label class="form__label">Re-Enter Password</label>
                                                    <input class="common__login__input" name="password_confirmation" type="password" placeholder="Re-Enter Password" required>

                                                </div>
                                            </div>
                                        </div>


                                        {{-- <div class="login__button">
                                            <a class="default__button" href="">
                                                <button type="submit" class="default__button">Sign Up</button>
                                            </a>
                                            

                                        </div> --}}
                                        <div class="login__button">
                                            <button class="default__button" type="submit">Create Account</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>



                    </div>

                </div>

                <div class=" login__shape__img educationarea__shape_image">
                    <img loading="lazy"  class="hero__shape hero__shape__1" src="{{ asset('/') }}website/img/education/hero_shape2.png" alt="Shape">
                    <img loading="lazy"  class="hero__shape hero__shape__2" src="{{ asset('/') }}website/img/education/hero_shape3.png" alt="Shape">
                    <img loading="lazy"  class="hero__shape hero__shape__3" src="{{ asset('/') }}website/img/education/hero_shape4.png" alt="Shape">
                    <img loading="lazy"  class="hero__shape hero__shape__4" src="{{ asset('/') }}website/img/education/hero_shape5.png" alt="Shape">
                </div>


            </div>
        </div>

        <!-- login__section__end -->

    

@endsection