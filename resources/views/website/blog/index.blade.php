@extends('website.master')
@section('body')
    <!-- Mobile Menu Start Here -->
    <div class="mobile-off-canvas-active">
        <a class="mobile-aside-close"><i class="icofont  icofont-close-line"></i></a>
        <div class="header-mobile-aside-wrap">
            <div class="mobile-search">
                <form class="search-form" action="#">
                    <input type="text" placeholder="Search entire store…">
                    <button class="button-search"><i class="icofont icofont-search-2"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap headerarea">
    
                <div class="mobile-navigation">
    
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="{{ route('home') }}">Home</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><a href="{{ route('home') }}">Homes Light</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ route('home') }}">Home (Default)</a></li>
                                            <li><a href="home-2.html">Elegant</a></li>
                                            <li><a href="home-3.html">Classic</a></li>
                                            <li><a href="home-4.html">Classic LMS</a></li>
                                            <li><a href="home-5.html">Online Course </a></li>
                                            <li><a href="home-6.html">Marketplace </a></li>
                                            <li><a href="home-7.html">University</a></li>
                                            <li><a href="home-8.html">eCommerce</a></li>
                                            <li><a href="home-9.html">Kindergarten</a></li>
                                            <li><a href="home-10.html">Machine Learning</a></li>
                                            <li><a href="home-11.html">Single Course</a></li>
                                        </ul>
                                    </li>
    
                                    <li class="menu-item-has-children">
                                        <a href="{{ route('home') }}">Homes Dark</a>
                                        <ul class="dropdown">
                                            <li><a href="index-dark.html">Home Default (Dark)</a></li>
                                            <li><a href="home-2-dark.html">Elegant (Dark)</a></li>
                                            <li><a href="home-3-dark.html">Classic (Dark)</a></li>
                                            <li><a href="home-4-dark.html">Classic LMS (Dark)</a></li>
                                            <li><a href="home-5-dark.html">Online Course (Dark)</a></li>
                                            <li><a href="home-6-dark.html">Marketplace (Dark)</a></li>
                                            <li><a href="home-7-dark.html">University (Dark)</a></li>
                                            <li><a href="home-8-dark.html">eCommerce (Dark)</a></li>
                                            <li><a href="home-9-dark.html">Kindergarten (Dark)</a></li>
                                            <li><a href="home-10-dark.html">Kindergarten (Dark)</a></li>
                                            <li><a href="home-11-dark.html">Single Course (Dark)</a></li>
                                        </ul>
                                    </li>
    
                                </ul>
                            </li>
    
    
                            <li class="menu-item-has-children "><a href="#">Pages</a>
    
                                <ul class="dropdown">
                                    <li class="menu-item-has-children">
                                        <a href="#">Get Started 1</a>
    
                                        <ul class="dropdown">
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="about-dark.html">About (Dark)<span class="mega__menu__label new">New</span></a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-dark.html">Blog (Dark)</a></li>
                                            <li><a href="{{  route('blog-detail') }}">Blog Details</a></li>
                                            <li><a href="blog-details-dark.html">Blog Details (Dark)</a></li>
                                        </ul>
                                    </li>
    
                                    <li class="menu-item-has-children">
                                        <a href="#">Get Started 2</a>
                                        <ul class="dropdown">
                                            <li><a href="error.html">Error 404</a></li>
                                            <li><a href="error-dark.html">Error (Dark)</a></li>
                                            <li><a href="event-details.html">Event Details</a></li>
                                            <li><a href="zoom/zoom-meetings.html">Zoom<span class="mega__menu__label">Online Call</span></a></li>
                                            <li><a href="zoom/zoom-meetings-dark.html">Zoom Meeting (Dark)</a></li>
                                            <li><a href="zoom/zoom-meeting-details.html">Zoom Meeting Details</a></li>
                                        </ul>
                                    </li>
    
                                    <li class="menu-item-has-children">
                                        <a href="#">Get Started 3</a>
                                        <ul class="dropdown">
                                            <li><a href="zoom/zoom-meeting-details-dark.html">Meeting Details (Dark)</a>
                                            </li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="login-dark.html">Login (Dark)</a></li>
                                            <li><a href="maintenance.html">Maintenance</a></li>
                                            <li><a href="maintenance-dark.html">Maintenance Dark</a></li>
                                            <li><a href="#">Terms & Condition</a></li>
                                        </ul>
                                    </li>
    
                                    <li class="menu-item-has-children">
                                        <a href="#">Get Started 4</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Terms & Condition (Dark)</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="contact-dark.html">Contact (Dark)</a></li>
                                            <li><a href="#">Success Stories</a></li>
                                            <li><a href="#">Success Stories (Dark)</a></li>
                                            <li><a href="#">Work Policy</a></li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                            <div class="mega__menu__img">
                                            <a href="#"><img loading="lazy"  src="{{ asset('/') }}website/img/mega/mega_menu_2.png" alt="Mega Menu"></a>
                                            </div>
                                    </li>
                                </ul>
                            </li>



                            <li class="menu-item-has-children "><a href="course.html">Courses</a>
    
                                <ul class="dropdown">
                                    <li class="menu-item-has-children">
                                        <a href="#">Get Started 1</a>
    
                                        <ul class="dropdown">
                                            <li><a href="course.html">Grid <span class="mega__menu__label">All Courses</span></a></li>
                                            <li><a href="course-dark.html">Course Grid (Dark)</a></li>
                                            <li><a href="course-grid.html">Course Grid</a></li>
                                            <li><a href="course-grid-dark.html">Course Grid (Dark)</a></li>
                                            <li><a href="course-list.html">Course List</a></li>
                                            <li><a href="course-list-dark.html">Course List (Dark)</a></li>
                                        </ul>
                                    </li>
    
                                    <li class="menu-item-has-children">
                                        <a href="#">Get Started 2</a>
                                        <ul class="dropdown">
                                            <li><a href="course-details.html">Course Details</a></li>
                                            <li><a href="course-details-dark.html">Course Details (Dark)</a></li>
                                            <li><a href="course-details-2.html">Course Details 2</a></li>
                                            <li><a href="course-details-2-dark.html">Details 2 (Dark)</a></li>
                                            <li><a href="course-details-3.html">Course Details 3</a></li>
                                            <li><a href="course-details-3.html">Details 3 (Dark)</a></li>
                                        </ul>
                                    </li>
    
                                    <li class="menu-item-has-children">
                                        <a href="#">Get Started 3</a>
                                        <ul class="dropdown">
                                                <li><a href="dashboard/become-an-instructor.html">Become An Instructor</a>
                                                <li><a href="dashboard/create-course.html">Create Course <span class="mega__menu__label">Career</span></a></li>
                                                <li><a href="instructor.html">Instructor</a></li>
                                                <li><a href="instructor-dark.html">Instructor (Dark)</a></li>
                                                <li><a href="instructor-details.html">Instructor Details</a></li>
                                                <li><a href="lesson.html">Course Lesson<span class="mega__menu__label new">New</span></a></li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                            <div class="mega__menu__img">
                                            <a href="#"><img loading="lazy"  src="{{ asset('/') }}website/img/mega/mega_menu_1.png" alt="Mega Menu"></a>
                                            </div>
                                    </li>
                                </ul>
                            </li>

                            
                            <li class="menu-item-has-children "><a href="dashboard/admin-dashboard.html">Dashboard</a>
    
                                <ul class="dropdown">
                                    <li class="menu-item-has-children">
                                        <a href="#">Admin</a>
    
                                        <ul class="dropdown">
                                            <li><a href="dashboard/admin-dashboard.html">Admin Dashboard</a></li>
                                            <li><a href="dashboard/admin-profile.html">Admin Profile</a></li>
                                            <li><a href="dashboard/admin-message.html">Message</a></li>
                                            <li><a href="dashboard/admin-course.html">Courses</a></li>
                                            <li><a href="dashboard/admin-reviews.html">Review</a></li>
                                            <li><a href="dashboard/admin-quiz-attempts.html">Admin Quiz</a></li>
                                            
                                            <li><a href="dashboard/admin-settings.html">Settings</a></li>
                                        </ul>
                                    </li>
    
                                    <li class="menu-item-has-children">
                                        <a href="#">Instructor</a>
                                        <ul class="dropdown">
                                            <li><a href="dashboard/instructor-dashboard.html">Inst. Dashboard</a></li>
                                            <li><a href="dashboard/instructor-profile.html">Inst. Profile</a></li>
                                            <li><a href="dashboard/instructor-message.html">Message</a></li>
                                            <li><a href="dashboard/instructor-wishlist.html">Wishlist</a></li>
                                            <li><a href="dashboard/instructor-reviews.html">Review</a></li>
                                            <li><a href="dashboard/instructor-my-quiz-attempts.html">My Quiz</a></li>
                                            <li><a href="dashboard/instructor-order-history.html">Order History</a></li>
                                            <li><a href="dashboard/instructor-course.html">My Courses</a></li>
                                            <li><a href="dashboard/instructor-announcments.html">Announcements</a></li>
                                            <li><a href="dashboard/instructor-quiz-attempts.html">Quiz Attempts</a></li>
                                            <li><a href="dashboard/instructor-assignments.html">Assignment</a></li>
                                            <li><a href="dashboard/instructor-settings.html">Settings</a></li>
                                        </ul>
                                    </li>
    
                                    <li class="menu-item-has-children">
                                        <a href="#">Student</a>
                                        <ul class="dropdown">
                                            <li><a href="dashboard/student-dashboard.html">Dashboard</a></li>
                                            <li><a href="dashboard/student-profile.html">Profile</a></li>
<li><a href="dashboard/student-message.html">Message</a></li>
                                            <li><a href="dashboard/student-enrolled-courses.html">Enrolled Courses</a></li>
                                            <li><a href="dashboard/student-wishlist.html">Wishlist</a></li>
                                            <li><a href="dashboard/student-reviews.html">Review</a></li>
                                            <li><a href="dashboard/student-my-quiz-attempts.html">My Quiz</a></li>
                                            <li><a href="dashboard/student-assignments.html">Assignment</a></li>
                                            <li><a href="dashboard/student-settings.html">Settings</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children"><a href="ecommerce/shop.html">eCommerce</a>
                                <ul class="dropdown">
                                    <li><a href="ecommerce/shop.html">Shop<span class="mega__menu__label">Online Store</span></a></li>
                                    <li><a href="ecommerce/product-details.html">Product Details</a></li>
                                    <li><a href="ecommerce/cart.html">Cart</a></li>
                                    <li><a href="ecommerce/checkout.html">Checkout</a></li>
                                    <li><a href="ecommerce/wishlist.html">Wishlist</a></li>
    
                                </ul>
                            </li>

                        </ul>
                    </nav>
    
                </div>
    
            </div>
            <div class="mobile-curr-lang-wrap">
                <div class="single-mobile-curr-lang">
                    <a class="mobile-language-active" href="#">Language <i class="icofont-thin-down"></i></a>
                    <div class="lang-curr-dropdown lang-dropdown-active">
                        <ul>
                            <li><a href="#">English (US)</a></li>
                            <li><a href="#">English (UK)</a></li>
                            <li><a href="#">Spanish</a></li>
                        </ul>
                    </div>
                </div>
    
                <!-- <div class="single-mobile-curr-lang">
                            <a class="mobile-currency-active" href="#">Currency <i class="icofont-thin-down"></i></a>
                            <div class="lang-curr-dropdown curr-dropdown-active">
                                <ul>
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">Real</a></li>
                                    <li><a href="#">BDT</a></li>
                                </ul>
                            </div>
                        </div> -->
    
                <div class="single-mobile-curr-lang">
                    <a class="mobile-account-active" href="#">My Account <i class="icofont-thin-down"></i></a>
                    <div class="lang-curr-dropdown account-dropdown-active">
                        <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="login.html">/ Create Account</a></li>
                            <li><a href="login.html">My Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mobile-social-wrap">
                <a class="facebook" href="#"><i class="icofont icofont-facebook"></i></a>
                <a class="twitter" href="#"><i class="icofont icofont-twitter"></i></a>
                <a class="pinterest" href="#"><i class="icofont icofont-pinterest"></i></a>
                <a class="instagram" href="#"><i class="icofont icofont-instagram"></i></a>
                <a class="google" href="#"><i class="icofont icofont-youtube-play"></i></a>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end Here -->

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
                            <h2 class="heading">Blog Page</h2>
                        </div>
                        <div class="breadcrumb__inner">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li>Blog Page</li>
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

    <div class="blogarea__2 sp_top_100 sp_bottom_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="blog__content__wraper__2" data-aos="fade-up">
                        <div class="blogarae__img__2">
                            <img loading="lazy"  src="{{ asset('/') }}website/img/blog/blog_6.png" alt="blog">
                            <div class="blogarea__date__2">
                                <span>24</span>
                                <span class="blogarea__month">Feb</span>
                            </div>
                        </div>
                        <div class="blogarea__text__wraper__2">
                            <div class="blogarea__heading__2">
                                <h3><a href="{{  route('blog-detail') }}">Delivering What Consumers Really Value?</a></h3>
                            </div>
                            <div class="blogarea__list__2">
                                <ul>
                                    <li>
                                        <a href="{{  route('blog-detail') }}">
                                            <i class="icofont-business-man-alt-2"></i> Mirnsdo.H
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{  route('blog-detail') }}">
                                            <i class="icofont-speech-comments"></i> 0 Comments
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{  route('blog-detail') }}">
                                            <i class="icofont-eraser-alt"></i> Association
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="blogarea__paragraph">
                                <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of On the other hand, organizations have the need for integrating in IT departments</p>
                            </div>
                            <div class="blogarea__button__2">
                                <a href="{{  route('blog-detail') }}">READ MORE
                            <i class="icofont-double-right"></i>
                        </a>
                                <a href="#">
                                    <div class="blogarea__icon__2">
                                        <i class="icofont-share"></i>
                                        <i class="icofont-heart"></i>
                                    </div>
                                </a>
                            </div>
                        </div>


                    </div>
                    <div class="blog__content__wraper__2" data-aos="fade-up">
                        <div class="blogarae__img__2">
                            <img loading="lazy"  src="{{ asset('/') }}website/img/blog/blog_7.png" alt="blog">
                            <div class="blogarea__date__2">
                                <span>24</span>
                                <span class="blogarea__month">Feb</span>
                            </div>
                            <div class="registerarea__content course__details__video">
                                <div class="registerarea__video">
                                    <div class="video__pop__btn">
                                        <a class="video-btn" href="https://www.youtube.com/watch?v=vHdclsdkp28"> <img loading="lazy"  src="{{ asset('/') }}website/img/icon/video.png" alt=""></a>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="blogarea__text__wraper__2">
                            <div class="blogarea__heading__2">
                                <h3><a href="{{  route('blog-detail') }}">Here at First Baptist Cape Coral we believe!</a></h3>
                            </div>
                            <div class="blogarea__list__2">
                                <ul>
                                    <li>
                                        <a href="{{  route('blog-detail') }}">
                                            <i class="icofont-business-man-alt-2"></i> Mirnsdo.H
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{  route('blog-detail') }}">
                                            <i class="icofont-speech-comments"></i> 0 Comments
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{  route('blog-detail') }}">
                                            <i class="icofont-eraser-alt"></i> Association
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="blogarea__paragraph">
                                <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of On the other hand, organizations have the need for integrating in IT departments</p>
                            </div>
                            <div class="blogarea__button__2">
                                <a href="{{  route('blog-detail') }}">READ MORE
                                    <i class="icofont-double-right"></i>
                                 </a>
                                <a href="#">
                                    <div class="blogarea__icon__2">
                                        <i class="icofont-share"></i>
                                        <i class="icofont-heart"></i>
                                    </div>
                                </a>

                            </div>
                        </div>


                    </div>

                    <div class="blog__content__wraper__2" data-aos="fade-up">
                        <div class="blogarae__img__2">
                            <img loading="lazy"  src="{{ asset('/') }}website/img/blog/blog_8.png" alt="blog">
                            <div class="blogarea__date__2">
                                <span>24</span>
                                <span class="blogarea__month">Feb</span>
                            </div>
                        </div>
                        <div class="blogarea__text__wraper__2">
                            <div class="blogarea__heading__2">
                                <h3><a href="{{  route('blog-detail') }}">We are praying for our community and for.</a></h3>
                            </div>
                            <div class="blogarea__list__2">
                                <ul>
                                    <li>
                                        <a href="{{  route('blog-detail') }}">
                                            <i class="icofont-business-man-alt-2"></i> Mirnsdo.H
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{  route('blog-detail') }}">
                                            <i class="icofont-speech-comments"></i> 0 Comments
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{  route('blog-detail') }}">
                                            <i class="icofont-eraser-alt"></i> Association
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="blogarea__paragraph">
                                <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of On the other hand, organizations have the need for integrating in IT departments</p>
                            </div>
                            <div class="blogarea__button__2">
                                <a href="{{  route('blog-detail') }}">READ MORE
                            <i class="icofont-double-right"></i>
                        </a>
                                <a href="#">
                                    <div class="blogarea__icon__2">
                                        <i class="icofont-share"></i>
                                        <i class="icofont-heart"></i>
                                    </div>
                                </a>
                            </div>
                        </div>


                    </div>

                    <div class="blog__content__wraper__2" data-aos="fade-up">
                        <div class="blogarae__img__2">
                            <img loading="lazy"  src="{{ asset('/') }}website/img/blog/blog_9.png" alt="blog">
                            <div class="blogarea__date__2">
                                <span>24</span>
                                <span class="blogarea__month">Feb</span>
                            </div>
                        </div>
                        <div class="blogarea__text__wraper__2">
                            <div class="blogarea__heading__2">
                                <h3><a href="{{  route('blog-detail') }}">Delivering What Consumers Really Value?</a></h3>
                            </div>
                            <div class="blogarea__list__2">
                                <ul>
                                    <li>
                                        <a href="{{  route('blog-detail') }}">
                                            <i class="icofont-business-man-alt-2"></i> Mirnsdo.H
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{  route('blog-detail') }}">
                                            <i class="icofont-speech-comments"></i> 0 Comments
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{  route('blog-detail') }}">
                                            <i class="icofont-eraser-alt"></i> Association
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="blogarea__paragraph">
                                <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of On the other hand, organizations have the need for integrating in IT departments</p>
                            </div>
                            <div class="blogarea__button__2">
                                <a href="{{  route('blog-detail') }}">READ MORE
                            <i class="icofont-double-right"></i>
                        </a>
                                <a href="#">
                                    <div class="blogarea__icon__2">
                                        <i class="icofont-share"></i>
                                        <i class="icofont-heart"></i>
                                    </div>
                                </a>
                            </div>
                        </div>


                    </div>

                    <div class="main__pagination__wrapper" data-aos="fade-up">
                        <ul class="main__page__pagination">
                            <li><a class="disable" href="#"><i class="icofont-double-left"></i></a></li>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="icofont-double-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="blogsidebar__content__wraper__2" data-aos="fade-up">
                        <div class="blogsidebar__content__inner__2">
                            <div class="blogsidebar__img__2">
                                <img loading="lazy"  src="{{ asset('/') }}website/img/blog/blog_10.png" alt="blog">
                            </div>
                            <div class="blogsidebar__name__2">
                                <h5>
                                    <a href="#"> Rosalina D. Willaim</a>

                                </h5>
                                <p>Blogger/Photographer</p>
                            </div>
                            <div class="blog__sidebar__text__2">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Veritatis distinctio suscipit reprehenderit atque</p>
                            </div>
                            <div class="blogsidbar__icon__2">
                                <ul>
                                    <li>
                                        <a href="#"><i class="icofont-facebook"></i></a>
                                    </li>

                                    <li>
                                        <a href="#"><i class="icofont-youtube-play"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-twitter"></i></a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="blogsidebar__content__wraper__2" data-aos="fade-up">

                        <h4 class="sidebar__title">Search here</h4>
                        <form action="#">
                            <div class="blogsudebar__input__area">
                                <input type="text" name="search" placeholder="Search product">
                                <button class="blogsidebar__input__icon">
                                    <i class="icofont-search-1"></i>
                                </button>


                            </div>


                        </form>

                    </div>
                    <div class="blogsidebar__content__wraper__2" data-aos="fade-up">

                        <h4 class="sidebar__title">categories</h4>
                        <ul class="categorie__list">
                            <li><a href="#">Mobile Set <span>03</span></a></li>
                            <li><a href="#">Mobile Set <span>03</span></a></li>
                            <li><a href="#">Raxila Dish nonyte<span>09</span></a></li>
                            <li><a href="#">Fresh Vegetable <span>01</span></a></li>
                            <li><a href="#">Fruites <span>00</span></a></li>
                            <li><a href="#">Gesuriesey <span>26</span></a></li>
                        </ul>

                    </div>

                    <div class="blogsidebar__content__wraper__2" data-aos="fade-up">

                        <h4 class="sidebar__title">Recent Post</h4>
                        <ul class="recent__list">
                            <li>
                                <div class="recent__img">
                                    <a href="#">
                                        <img loading="lazy"  src="{{ asset('/') }}website/img/blog/blog_11.png" alt="sidbar">
                                        <div class="recent__number">
                                            <span>01</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="recent__text">

                                    <div class="recent__date">
                                        <a href="#">23 December 2024</a>
                                    </div>

                                    <h6><a href="blog-deetails.html">Show at the University </a></h6>




                                </div>
                            </li>

                            <li>
                                <div class="recent__img">
                                    <a href="#">
                                        <img loading="lazy"  src="{{ asset('/') }}website/img/blog/blog_12.png" alt="sidbar">
                                        <div class="recent__number">
                                            <span>02</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="recent__text">

                                    <div class="recent__date">
                                        <a href="#">23 December 2024</a>
                                    </div>

                                    <h6><a href="blog-deetails.html">Show at the University </a></h6>




                                </div>
                            </li>

                            <li>
                                <div class="recent__img">
                                    <a href="#">
                                        <img loading="lazy"  src="{{ asset('/') }}website/img/blog/blog_13.png" alt="sidbar">
                                        <div class="recent__number">
                                            <span>03</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="recent__text">

                                    <div class="recent__date">
                                        <a href="#">23 December 2024</a>
                                    </div>

                                    <h6><a href="blog-deetails.html">Show at the University </a></h6>




                                </div>
                            </li>

                            <li>
                                <div class="recent__img">
                                    <a href="#">
                                        <img loading="lazy"  src="{{ asset('/') }}website/img/blog/blog_14.png" alt="sidbar">
                                        <div class="recent__number">
                                            <span>04</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="recent__text">

                                    <div class="recent__date">
                                        <a href="#">23 December 2024</a>
                                    </div>

                                    <h6><a href="blog-deetails.html">Show at the University </a></h6>




                                </div>
                            </li>
                        </ul>

                    </div>

                    <div class="blogsidebar__content__wraper__2" data-aos="fade-up">

                        <h4 class="sidebar__title">Photo Gallery</h4>
                        <div class="photo__gallery__img">

                            <div class="single__gallery__img">
                                <img loading="lazy"  src="{{ asset('/') }}website/img/blog/blog_15.png" alt="photo">
                                <div class="gallery__icon">
                                    <a class="popup__img" href="img/blog/blog_15.png"> <i class="icofont-eye-alt"></i></a>
                                </div>
                            </div>
                            <div class="single__gallery__img">
                                <img loading="lazy"  src="{{ asset('/') }}website/img/blog/blog_16.png" alt="photo">
                                <div class="gallery__icon">
                                    <a class="popup__img" href="img/blog/blog_16.png"> <i class="icofont-eye-alt"></i></a>
                                </div>
                            </div>
                            <div class="single__gallery__img">
                                <img loading="lazy"  src="{{ asset('/') }}website/img/blog/blog_17.png" alt="photo">
                                <div class="gallery__icon">
                                    <a class="popup__img" href="img/blog/blog_17.png"> <i class="icofont-eye-alt"></i></a>
                                </div>
                            </div>
                            <div class="single__gallery__img">
                                <img loading="lazy"  src="{{ asset('/') }}website/img/blog/blog_18.png" alt="photo">
                                <div class="gallery__icon">
                                    <a class="popup__img" href="img/blog/blog_18.png"> <i class="icofont-eye-alt"></i></a>
                                </div>
                            </div>
                            <div class="single__gallery__img">
                                <img loading="lazy"  src="{{ asset('/') }}website/img/blog/blog_19.png" alt="photo">
                                <div class="gallery__icon">
                                    <a class="popup__img" href="img/blog/blog_19.png"> <i class="icofont-eye-alt"></i></a>
                                </div>
                            </div>
                            <div class="single__gallery__img">
                                <img loading="lazy"  src="{{ asset('/') }}website/img/blog/blog_20.png" alt="photo">
                                <div class="gallery__icon">
                                    <a class="popup__img" href="img/blog/blog_20.png"> <i class="icofont-eye-alt"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="blogsidebar__content__wraper__2" data-aos="fade-up">

                        <h4 class="sidebar__title">Get in Touch</h4>
                        <div class="get__touch__input">
                            <input type="text" placeholder="Enter name*">
                            <input type="text" placeholder="Enter your mail*">
                            <input type="text" placeholder="Massage*">
                            <a class="default__button" href="{{  route('blog-detail') }}">SEND MASSAGE</a>
                        </div>

                    </div>

                    <div class="blogsidebar__content__wraper__2" data-aos="fade-up">

                        <h4 class="sidebar__title">Popular tag</h4>
                        <div class="populer__tag__list">
                            <ul>
                                <li><a href="{{  route('blog-detail') }}">Business</a></li>
                                <li><a href="{{  route('blog-detail') }}">Design</a></li>
                                <li><a href="{{  route('blog-detail') }}">apps</a></li>
                                <li><a href="{{  route('blog-detail') }}">landing page</a></li>
                                <li><a href="{{  route('blog-detail') }}">data</a></li>
                                <li><a href="{{  route('blog-detail') }}">book</a></li>
                                <li><a href="{{  route('blog-detail') }}">Design</a></li>
                                <li><a href="{{  route('blog-detail') }}">book</a></li>
                                <li><a href="{{  route('blog-detail') }}">landing page</a></li>
                                <li><a href="{{  route('blog-detail') }}">data</a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="blogsidebar__content__wraper__2" data-aos="fade-up">

                        <h4 class="sidebar__title">Follow Us</h4>
                        <div class="follow__icon">
                            <ul>
                                <li>
                                    <a href="#"><i class="icofont-facebook"></i></a>
                                </li>

                                <li>
                                    <a href="#"><i class="icofont-youtube-play"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-instagram"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection