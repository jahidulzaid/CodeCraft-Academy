@extends('dashboard.master')
@section('title')
    Interactive Learning Platform
@endsection
@section('body')
            <!-- theme fixed shadow -->
            <div>
                <div class="theme__shadow__circle"></div>
                <div class="theme__shadow__circle shadow__right"></div>
            </div>
            <!-- theme fixed shadow -->
            <!-- breadcrumbarea__section__start -->
    
    
    
            <!-- dashboardarea__area__start  -->
            <div class="dashboardarea sp_bottom_100">
                <div class="container-fluid full__width__padding">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="dashboardarea__wraper">
                                <div class="dashboardarea__img">
                                    <div class="dashboardarea__inner student__dashboard__inner">
                                        <div class="dashboardarea__left">
                                            <div class="dashboardarea__left__img">

                                                {{-- get from db --}}
                                                @if(Auth::user()->avatar)
                                                    <img src="{{ Auth::user()->avatar }}" loading="lazy" alt="Avatar"">
                                                @else
                                                    <img src="{{ asset('/') }}website/img/teacher/teacher__2.png" loading="lazy"  alt="Default Avatar">
                                                @endif
                                                
                                            </div>
                                            <div class="dashboardarea__left__content">
                                                
                                                {{-- get from db --}}
                                                <h4>Name: {{ Auth::user()->name }}</h4>
                                                <h5>Email: {{ Auth::user()->email }}</h5>
                                                
                                                <ul>
                                                    <li>                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                                                    9 Courses Enroled
                                                    </li>
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                                                        8 Certificate
                                                    </li>
                                                </ul>
    
                                            </div>
                                        </div>
                                        <div class="dashboardarea__right">
                                            <div class="dashboardarea__right__button">
                                                <a class="default__button" href="create-course.html">Enroll A New Course
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="dashboard">
                    <div class="container-fluid full__width__padding">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-12">
                                <div class="dashboard__inner sticky-top">
                                    <div class="dashboard__nav__title">
                                        <h6>Welcome, {{ Auth::user()->name }} </h6>
                                    </div>
                                    <div class="dashboard__nav">
                                        <ul>
                                            <li>
                                                <a class="active" href="student-dashboard.html">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                                    Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="student-profile.html">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                    My Profile</a>
                                            </li>
                                            <li>
                                                <a href="student-message.html">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                                                    Message</a><span class="dashboard__label">12</span>
                                            </li>
                                            <li>
                                                <a href="student-enrolled-courses.html">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
                                                    Enrolled Courses</a>
                                            </li>
                                            <li>
                                                <a href="student-wishlist.html">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
                                                    Wishlist</a>
                                            </li>
                                            <li>
                                                <a href="student-reviews.html">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                    Reviews</a>
                                            </li>
                                            <li>
                                                <a href="student-my-quiz-attempts.html">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                                                    My Quiz Attempts</a>
                                            </li>
                                            <li>
                                                <a href="student-assignments.html">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-volume-1"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path></svg>
                                                    Assignments</a>
                                            </li>
                                            <li>
                                                <a href="student-settings.html">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                                                   Settings</a>
                                            </li>
                                            <li>
                                                
                                                <a href="">
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-logout"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path></svg>
                                                        <button type="submit" style="border:none;">
                                                            Sign Out
                                                        </button>
    
                                                    </form>
                                                </a>
                                            
                                            </li>
                                        </ul>
                                    </div>
    
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-12">
                                <div class="dashboard__content__wraper">
                                    <div class="dashboard__section__title">
                                        <h4>Summery</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-6 col-md-12 col-12">
                                            <div class="dashboard__single__counter">
                                                <div class="counterarea__text__wraper">
                                                    <div class="counter__img">
                                                        <img loading="lazy"  src="{{ asset('/') }}website/img/counter/counter__1.png" alt="counter">
                                                    </div>
                                                    <div class="counter__content__wraper">
                                                        <div class="counter__number">
                                                            <span class="counter">27</span>+
                        
                                                        </div>
                                                        <p>Enrolled Courses</p>
                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-12 col-12">
                                            <div class="dashboard__single__counter">
                                                <div class="counterarea__text__wraper">
                                                    <div class="counter__img">
                                                        <img loading="lazy"  src="{{ asset('/') }}website/img/counter/counter__2.png" alt="counter">
                                                    </div>
                                                    <div class="counter__content__wraper">
                                                        <div class="counter__number">
                                                            <span class="counter">08</span>+
                        
                                                        </div>
                                                        <p>Active Courses</p>
                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-12 col-12">
                                            <div class="dashboard__single__counter">
                                                <div class="counterarea__text__wraper">
                                                    <div class="counter__img">
                                                        <img loading="lazy"  src="{{ asset('/') }}website/img/counter/counter__3.png" alt="counter">
                                                    </div>
                                                    <div class="counter__content__wraper">
                                                        <div class="counter__number">
                                                            <span class="counter">12</span>
                        
                                                        </div>
                                                        <p>Complete Courses</p>
                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard__content__wraper">
                                    <div class="dashboard__section__title">
                                        <h4>Feedbacks</h4>
                                        <a href="../course.html">See More...</a>
                                    </div>
                                    <div class="row">
                                    <div class="col-xl-12">
                                        <div class="dashboard__table table-responsive">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Course Name</th>
                                                        <th>Enrolled</th>
                                                        <th>Rating</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th><a href="#">Javascript</a></th>
                                                        <td>1100</td>
                                                        <td>
                                                            <div class="dashboard__table__star">
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="dashboard__table__row">
                                                        <th><a href="#">PHP</a></th>
                                                        <td>700</td>
                                                        <td>
                                                            <div class="dashboard__table__star">
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><a href="#">HTML</a></th>
                                                        <td>1350</td>
                                                        <td>
                                                            <div class="dashboard__table__star">
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="dashboard__table__row">
                                                        <th><a href="#">Graphic</a></th>
                                                        <td>1266</td>
                                                        <td>
                                                            <div class="dashboard__table__star">
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
    
                          
                        </div>
                    </div>
                </div>
    
            </div>
             <!-- dashboardarea__area__end   -->
@endsection