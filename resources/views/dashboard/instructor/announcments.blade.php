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


    <!-- dashboardarea__area__start  -->
    <div class="dashboardarea sp_bottom_100">
        <div class="container-fluid full__width__padding">
            <div class="row">


                <div class="col-xl-12">
                    <div class="dashboardarea__wraper">
                        <div class="dashboardarea__img">
                            <div class="dashboardarea__inner">
                                <div class="dashboardarea__left">
                                    <div class="dashboardarea__left__img">

                                        {{-- get from db --}}
                                        @if(Auth::check())
                                            @if(Auth::user()->avatar)
                                                <img src="{{ Auth::user()->avatar }}" loading="lazy" alt="Avatar">
                                            @else
                                                @if(Auth::user()->role === 'student')
                                                    <img src="{{ asset('website/img/student/default_student.png') }}" loading="lazy" alt="Default Student Avatar">
                                                @elseif(Auth::user()->role === 'instructor')
                                                    <img src="{{ asset('website/img/instructor/default_instructor.png') }}" loading="lazy" alt="Default Instructor Avatar">
                                                @else
                                                    <img src="{{ asset('website/img/teacher/teacher__2.png') }}" loading="lazy" alt="Default Avatar">
                                                @endif
                                            @endif
                                        @else
                                            <img src="{{ asset('website/img/teacher/teacher__2.png') }}" loading="lazy" alt="Guest Avatar">
                                        @endif
                                    </div>
                                    <div class="dashboardarea__left__content">

                                        @if(Auth::check())
                                            @if(Auth::user()->role === 'student')
                                                <h3 style="color: rgb(33, 119, 239)">Student Dashboard</h3>
                                                <h4>{{ Auth::user()->name }}</h4>
                                                <h5>{{ Auth::user()->email }}</h5>
                                            @elseif(Auth::user()->role === 'instructor')
                                                <h3 style="color: rgb(33, 119, 239)">Instructor Dashboard</h3>
                                                <h4>{{ Auth::user()->name }}</h4>
                                                <h5>{{ Auth::user()->email }}</h5>
                                            @else
                                                <h4>Name: {{ Auth::user()->name }}</h4>
                                                <h5>Email: {{ Auth::user()->email }}</h5>
                                            @endif
                                        @else
                                            <h4>Name: Guest</h4>
                                            <h5>Email: Not Available</h5>
                                        @endif
                                    </div>
                                </div>

                                <div class="dashboardarea__right">
                                    <div class="dashboardarea__right__button">
                                        <a class="default__button" href="create-course.html">Create a New Course
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
                                <h6>Welcome, 
                                    {{-- get from db --}}
                                    @if(Auth::check())
                                        @if(Auth::user()->role === 'student')
                                            {{ Auth::user()->name }}

                                        @elseif(Auth::user()->role === 'instructor')
            
                                            {{ Auth::user()->name }}

                                        @endif
                                    @else
                                        <h6>Guest</h6>
                                    @endif
                                </h6>

                            </div>
                            <div class="dashboard__nav">
                                <ul>
                                    <li>
                                        <a class="active" href="{{ route('instructor.dashboard')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                            Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('instructor.profile')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                            My Profile</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('instructor.reviews')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            Reviews</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dashboard__nav__title mt-40">
                                <h6>Instructor</h6>
                            </div>
                            <div class="dashboard__nav">
                                <ul>
                                    <li>
                                        <a href="{{ route('instructor.my_course')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                                            My Course</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('instructor.announcments')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-volume-1"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path></svg>
                                            Announcments</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('instructor.quiz_attempt')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                            Quiz Attempt</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('instructor.assignments')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-volume-1"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path></svg>
                                            Assignments</a>
                                    </li>
                             
                                </ul>
                            </div>
                            <div class="dashboard__nav__title mt-40">
                                <h6>user</h6>
                            </div>

                            <div class="dashboard__nav">
                                <ul>
                                    <li>
                                        <a href="{{ route('instructor.settings')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                                          Settings</a>
                                    </li>
                                    <li>
                                                
                                        <a href="">
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-logout"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path></svg>
                                                <button type="submit" style="border:none;">
                                                    Logout
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
                                <h4>Announcements</h4>
                            </div>

                            <div class="dashboard__Announcement__wraper">

                            <div class="row ">
                                <div class="col-xl-8 col-lg-6 col-md-6 col-12">
                                    <div class="dashboard__Announcement">
                                        <h5>Notify your all students.</h5>
                                        <p>Create Announcement</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                    <a class="default__button" href="#">Add New Announcement</a>
                                </div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-xl-6 col-lg-4 col-md-4 col-12">
                                    <div class="dashboard__select__heading">
                                        <span>Courses</span>
                                    </div>
                                    <div class="dashboard__selector">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>All</option>
                                        <option value="1">Web Design</option>
                                        <option value="2">Graphic</option>
                                        <option value="3">English</option>
                                        <option value="4">Spoken English</option>
                                        <option value="5">Art Painting</option>
                                        <option value="6">App Development</option>
                                        <option value="7">Web Application</option>
                                        <option value="7">Php Development</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                    <div class="dashboard__select__heading">
                                        <span>SHORT BY</span>
                                    </div>
                                    <div class="dashboard__selector">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Default</option>
                                        <option value="1">Trending</option>
                                        <option value="2">Price: low to high</option>
                                        <option value="3">Price: low to low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                    <div class="dashboard__select__heading">
                                        <span>SHORT BY OFFER</span>
                                    </div>
                                    <div class="dashboard__selector">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Free</option>
                                        <option value="1">paid</option>
                                        <option value="2">premimum</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-40">
                            <div class="row">
                            
                            <div class="col-xl-12">
                                <div class="dashboard__table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Announcements</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>
                                                    <span>March 16, 2024</span>
                                                    <p>10.00am</p>
                                                </th>
                                                <td>
                                                    <span>Announcement Title</span>
                                                    <p>Course: Fundamentals 101</p>
                                                </td>
                                                <td>
                                                    <div class="dashboard__button__group">
                                                        <a class="dashboard__small__btn" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> Edit</a>
                                                        <a class="dashboard__small__btn" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> Delete</a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="dashboard__table__row">
                                                <th>
                                                    <span>June 16, 2024</span>
                                                    <p>10.00am</p>
                                                </th>
                                                <td>
                                                    <span>Announcement Title</span>
                                                    <p>Course: Fundamentals 101</p>
                                                </td>
                                                <td>
                                                    <div class="dashboard__button__group">
                                                        <a class="dashboard__small__btn" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> Edit</a>
                                                        <a class="dashboard__small__btn" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> Delete</a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>
                                                    <span>June 16, 2024</span>
                                                    <p>12.00am</p>
                                                </th>
                                                <td>
                                                    <span>Web Design</span>
                                                    <p>Course: Fundamentals 101</p>
                                                </td>
                                                <td>
                                                    <div class="dashboard__button__group">
                                                        <a class="dashboard__small__btn" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> Edit</a>
                                                        <a class="dashboard__small__btn" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> Delete</a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="dashboard__table__row">
                                                <th>
                                                    <span>App Development</span>
                                                    <p>10.00am</p>
                                                </th>
                                                <td>
                                                    <span>Announcement Title</span>
                                                    <p>Course: Fundamentals 101</p>
                                                </td>
                                                <td>
                                                    <div class="dashboard__button__group">
                                                        <a class="dashboard__small__btn" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> Edit</a>
                                                        <a class="dashboard__small__btn" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> Delete</a>
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