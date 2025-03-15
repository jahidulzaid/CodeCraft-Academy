@extends('website.master')
@section('body')

        <!-- breadcrumbarea__section__start -->

        <div class="breadcrumbarea breadcrumbarea--2">

            <div class="container">
                <div class="row">
                    <div class="col-xl-8">


                        <div class="breadcrumb__content__wraper" data-aos="fade-up">
                            <div class="breadcrumb__inner text-start">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li>Course-Details 2</li>
                                </ul>
                            </div>
                        </div>

                        <div class="course__details__top--2">

                            <div class="course__button__wraper" data-aos="fade-up">
                                <div class="course__button">
                                    <a href="#">Featured</a>
                                    <a class="course__2" href="#">Ux Design</a>
                                </div>
                            </div>
                            <div class="course__details__heading" data-aos="fade-up">
                                <h3>Making Music with Other People</h3>
                            </div>
                            <div class="course__details__price" data-aos="fade-up">
                                <ul>
                                    <li>
                                        <div class="course__details__date">
                                            <i class="icofont-book-alt"></i> 23 Lesson
                                        </div>

                                    </li>
                                    <li>
                                        <div class="course__star">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <span>(44)</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="course__date">
                                            <p>Last Update:<span> Sep 29, 2024</span></p>
                                        </div>
                                    </li>
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

                    <div class="col-xl-8 col-lg-8">


                        <div class="blog__details__content__wraper">

                            <div class="course__details__tab__wrapper" data-aos="fade-up">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <ul class="nav  course__tap__wrap" id="myTab" role="tablist">

                                            <li class="nav-item" role="presentation">
                                                <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__two" type="button"><i class="icofont-book-alt"></i>Curriculum</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="single__tab__link active" data-bs-toggle="tab" data-bs-target="#projects__one" type="button"><i class="icofont-paper"></i>Description</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__three" type="button"><i class="icofont-star"></i>Reviews</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__four" type="button"><i class="icofont-teacher"></i>Instructor</button>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-content tab__content__wrapper" id="myTabContent">
                                    <div class="tab-pane fade " id="projects__two" role="tabpanel" aria-labelledby="projects__two">

                                        <div class="accordion content__cirriculum__wrap" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Intro Course content <span>02hr 35min</span>
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">


                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-video-alt"></i>
                                                                <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <span class="time"> <i class="icofont-clock-time"></i> 22 minutes</span>
                                                                <a href="lesson.html"><span class="question"><i class="icofont-eye"></i> Preview</span></a>
                                                            </div>
                                                        </div>
                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-video-alt"></i>
                                                                <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <span class="time"> <i class="icofont-clock-time"></i> 05 minutes</span>
                                                                <a href="lesson.html"><span class="question"><i class="icofont-eye"></i> Preview</span></a>
                                                            </div>
                                                        </div>
                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-video-alt"></i>
                                                                <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <!-- <span class="time"> <i class="icofont-clock-time"></i> 10 minutes</span> -->
                                                                <a href="lesson.html"><span><i class="icofont-lock"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-video-alt"></i>
                                                                <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <!-- <span class="time"> <i class="icofont-clock-time"></i> 15 minutes</span> -->
                                                                <a href="lesson.html"><span><i class="icofont-lock"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-video-alt"></i>
                                                                <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <!-- <span class="time"> <i class="icofont-clock-time"></i> 08 minutes</span> -->
                                                                <a href="lesson.html"><span><i class="icofont-lock"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-file-text"></i>
                                                                <h5> <span>Lesson 03 Exam :</span></h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <span><i class="icofont-lock"></i> 20 Ques</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Course Fundamentals <span>1hr 35min</span>
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">


                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-video-alt"></i>
                                                                <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <!-- <span class="time"> <i class="icofont-clock-time"></i> 22 minutes</span> -->
                                                                <a href="lesson.html"><span><i class="icofont-lock"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-video-alt"></i>
                                                                <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <!-- <span class="time"> <i class="icofont-clock-time"></i> 05 minutes</span> -->
                                                                <a href="lesson.html"><span><i class="icofont-lock"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-video-alt"></i>
                                                                <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <!-- <span class="time"> <i class="icofont-clock-time"></i> 10 minutes</span> -->
                                                                <a href="lesson.html"><span><i class="icofont-lock"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-video-alt"></i>
                                                                <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <!-- <span class="time"> <i class="icofont-clock-time"></i> 15 minutes</span> -->
                                                                <a href="lesson.html"><span><i class="icofont-lock"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-video-alt"></i>
                                                                <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <!-- <span class="time"> <i class="icofont-clock-time"></i> 08 minutes</span> -->
                                                                <a href="lesson.html"><span><i class="icofont-lock"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-file-text"></i>
                                                                <h5> <span>Lesson 03 Exam :</span></h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <span><i class="icofont-lock"></i> 20 Ques</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Course Core Concept <span>3hr 10min</span>
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">


                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-video-alt"></i>
                                                                <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <!-- <span class="time"> <i class="icofont-clock-time"></i> 22 minutes</span> -->
                                                                <a href="lesson.html"><span><i class="icofont-lock"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-video-alt"></i>
                                                                <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <!-- <span class="time"> <i class="icofont-clock-time"></i> 05 minutes</span> -->
                                                                <a href="lesson.html"><span><i class="icofont-lock"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-video-alt"></i>
                                                                <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <!-- <span class="time"> <i class="icofont-clock-time"></i> 10 minutes</span> -->
                                                                <a href="lesson.html"><span><i class="icofont-lock"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-video-alt"></i>
                                                                <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <!-- <span class="time"> <i class="icofont-clock-time"></i> 15 minutes</span> -->
                                                                <a href="lesson.html"><span><i class="icofont-lock"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-video-alt"></i>
                                                                <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <!-- <span class="time"> <i class="icofont-clock-time"></i> 08 minutes</span> -->
                                                                <a href="lesson.html"><span><i class="icofont-lock"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-file-text"></i>
                                                                <h5> <span>Lesson 03 Exam :</span></h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <span><i class="icofont-lock"></i> 20 Ques</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingFour">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        Course Key Features <span>2hr 10min</span>
                                                    </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">


                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-video-alt"></i>
                                                                <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <!-- <span class="time"> <i class="icofont-clock-time"></i> 22 minutes</span> -->
                                                                <a href="lesson.html"><span><i class="icofont-lock"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-video-alt"></i>
                                                                <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <!-- <span class="time"> <i class="icofont-clock-time"></i> 05 minutes</span> -->
                                                                <a href="lesson.html"><span><i class="icofont-lock"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-video-alt"></i>
                                                                <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <!-- <span class="time"> <i class="icofont-clock-time"></i> 10 minutes</span> -->
                                                                <a href="lesson.html"><span><i class="icofont-lock"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-video-alt"></i>
                                                                <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <!-- <span class="time"> <i class="icofont-clock-time"></i> 15 minutes</span> -->
                                                                <a href="lesson.html"><span><i class="icofont-lock"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-video-alt"></i>
                                                                <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <!-- <span class="time"> <i class="icofont-clock-time"></i> 08 minutes</span> -->
                                                                <a href="lesson.html"><span><i class="icofont-lock"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-file-text"></i>
                                                                <h5> <span>Lesson 03 Exam :</span></h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <span><i class="icofont-lock"></i> 20 Ques</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingFive">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                        Course Conclusion <span>2hr 10min</span>
                                                    </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">


                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-video-alt"></i>
                                                                <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <!-- <span class="time"> <i class="icofont-clock-time"></i> 22 minutes</span> -->
                                                                <a href="lesson.html"><span><i class="icofont-lock"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-video-alt"></i>
                                                                <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <!-- <span class="time"> <i class="icofont-clock-time"></i> 05 minutes</span> -->
                                                                <a href="lesson.html"><span><i class="icofont-lock"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-video-alt"></i>
                                                                <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <!-- <span class="time"> <i class="icofont-clock-time"></i> 10 minutes</span> -->
                                                                <a href="lesson.html"><span><i class="icofont-lock"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-video-alt"></i>
                                                                <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <!-- <span class="time"> <i class="icofont-clock-time"></i> 15 minutes</span> -->
                                                                <a href="lesson.html"><span><i class="icofont-lock"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-video-alt"></i>
                                                                <h5> <span>Video :</span> Lorem ipsum dolor sit amet.</h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <!-- <span class="time"> <i class="icofont-clock-time"></i> 08 minutes</span> -->
                                                                <a href="lesson.html"><span><i class="icofont-lock"></i></span></a>
                                                            </div>
                                                        </div>
                                                        <div class="scc__wrap">
                                                            <div class="scc__info">
                                                                <i class="icofont-file-text"></i>
                                                                <h5> <span>Lesson 03 Exam :</span></h5>
                                                            </div>
                                                            <div class="scc__meta">
                                                                <span><i class="icofont-lock"></i> 20 Ques</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane fade active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
                                        <div class="experence__heading">
                                            <h5> Experience Description</h5>
                                        </div>
                                        <div class="experence__description">
                                            <p class="description__1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus. Vestibulum
                                                non justo consectetur, cursus ante, tincidunt sapien. Nulla quis diam sit amet turpis interdum accumsan quis nec enim. Vivamus faucibus ex sed nibh egestas elementum. Mauris et bibendum dui. Aenean consequat
                                                pulvinar luctus
                                            </p>
                                            <p class="description__2">We have covered many special events such as fireworks, fairs, parades, races, walks, awards ceremonies, fashion shows, sporting events, and even a memorial service.
                                            </p>
                                            <p class="description__3">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus. Vestibulum non justo consectetur, cursus ante, tincidunt
                                                sapien. Nulla quis diam sit amet turpis interdum accumsan quis nec enim. Vivamus faucibus ex sed nibh egestas elementum. Mauris et bibendum dui. Aenean consequat pulvinar luctus.</p>
                                        </div>

                                    </div>



                                    <div class="tab-pane fade" id="projects__three" role="tabpanel" aria-labelledby="projects__three">

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="review__box">
                                                    <div class="review__number">5.0</div>
                                                    <div class="review__icon">
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                    </div>
                                                    <span>(17 Reviews)</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col--30">
                                                <div class="review__wrapper">

                                                    <div class="single__progress__bar">
                                                        <div class="rating__text">
                                                            5 <i class="icofont-star"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">10</span>
                                                    </div>

                                                    <div class="single__progress__bar">
                                                        <div class="rating__text">
                                                            4 <i class="icofont-star"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">5</span>
                                                    </div>

                                                    <div class="single__progress__bar">
                                                        <div class="rating__text">
                                                            3 <i class="icofont-star"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">3</span>
                                                    </div>

                                                    <div class="single__progress__bar">
                                                        <div class="rating__text">
                                                            2 <i class="icofont-star"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">2</span>
                                                    </div>

                                                    <div class="single__progress__bar">
                                                        <div class="rating__text">
                                                            1 <i class="icofont-star"></i>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="rating-value">1</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="property__facts__feature property__facts__feature__2 ">
                                            <h4>Customer Reviews</h4>



                                            <ul class="property__comment">
                                                <li class="property__comment__list">
                                                    <div class="property__comment__img">
                                                        <img loading="lazy"  src="{{ asset('/') }}website/img/teacher/teacher__2.png" alt="Image">
                                                    </div>
                                                    <div class="property__comment__comment">
                                                        <h6><a href="#">Adam Smit</a></h6>
                                                        <div class="property__sidebar__icon">
                                                            <ul>
                                                                <li><i class="icofont-star"></i></li>
                                                                <li><i class="icofont-star"></i></li>
                                                                <li><i class="icofont-star"></i></li>
                                                                <li><i class="icofont-star"></i></li>
                                                                <li><i class="icofont-star"></i></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                        <span class="property__comment__reply__btn">September 2, 2024</span>
                                                    </div>

                                                </li>
                                                <li class="property__comment__list">
                                                    <div class="property__comment__img">
                                                        <img loading="lazy"  src="{{ asset('/') }}website/img/teacher/teacher__1.png" alt="Image">
                                                    </div>
                                                    <div class="property__comment__comment">
                                                        <h6><a href="#">Adam Smit</a></h6>
                                                        <div class="property__sidebar__icon">
                                                            <ul>
                                                                <li><i class="icofont-star"></i></li>
                                                                <li><i class="icofont-star"></i></li>
                                                                <li><i class="icofont-star"></i></li>
                                                                <li><i class="icofont-star"></i></li>
                                                                <li><i class="icofont-star"></i></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                        <span class="property__comment__reply__btn">September 2, 2024</span>
                                                    </div>

                                                </li>
                                                <li class="property__comment__list">
                                                    <div class="property__comment__img">
                                                        <img loading="lazy"  src="{{ asset('/') }}website/img/teacher/teacher__3.png" alt="Image">
                                                    </div>
                                                    <div class="property__comment__comment">
                                                        <h6><a href="#">Adam Smit</a></h6>
                                                        <div class="property__sidebar__icon">
                                                            <ul>
                                                                <li><i class="icofont-star"></i></li>
                                                                <li><i class="icofont-star"></i></li>
                                                                <li><i class="icofont-star"></i></li>
                                                                <li><i class="icofont-star"></i></li>
                                                                <li><i class="icofont-star"></i></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                        <span class="property__comment__reply__btn">September 2, 2024</span>
                                                    </div>

                                                </li>
                                            </ul>

                                        </div>

                                        <form action="#" class="add__a__review__wrapper">
                                            <h4>Add a Review</h4>
                                            <div class="add__a__review">
                                                <h6>Your Ratings:</h6>
                                                <div class="property__sidebar__icon">
                                                    <ul>
                                                        <li><i class="icofont-star"></i></li>
                                                        <li><i class="icofont-star"></i></li>
                                                        <li><i class="icofont-star"></i></li>
                                                        <li><i class="icofont-star"></i></li>
                                                        <li><i class="icofont-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="add__a__review__input">
                                                <textarea placeholder="Type your comments...."></textarea>
                                            </div>
                                            <div class="add__a__review__input">
                                                <input type="text" placeholder="Type your name....">
                                            </div>
                                            <div class="add__a__review__input">
                                                <input type="email" placeholder="Type your email....">
                                            </div>
                                            <div class="add__a__review__input">
                                                <input type="text" name="website" placeholder="Type your website....">
                                            </div>
                                            <label class="mb-0"><input type="checkbox" name="agree"> Save my name, email, and website in this browser for the next time I comment.</label>
                                            <div class="add__a__review__button">
                                                <button class="default__button" type="submit">Submit</button>
                                            </div>
                                        </form>

                                    </div>

                                    <div class="tab-pane fade" id="projects__four" role="tabpanel" aria-labelledby="projects__four">
                                        <div class="blogsidebar__content__wraper__2 tab__instructor">
                                            <div class="blogsidebar__content__inner__2">
                                                <div class="blogsidebar__img__2">
                                                    <img loading="lazy"  src="{{ asset('/') }}website/img/blog/blog_10.png" alt="blog">
                                                </div>

                                                <div class="tab__instructor__inner">
                                                    <div class="blogsidebar__name__2">
                                                        <h5>
                                                            <a href="#">  Rosalina D. Willaim</a>

                                                        </h5>
                                                        <p>Blogger/Photographer</p>
                                                    </div>
                                                    <div class="blog__sidebar__text__2">
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
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
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="course__list__wraper" data-aos="fade-up">
                                <div class="blog__details__heading__2">
                                    <h5>Why search Is Important ?</h5>
                                </div>
                                <div class="aboutarea__list__2 blog__details__list__2" data-aos="fade-up">
                                    <ul>
                                        <li>
                                            <i class="icofont-check"></i>
                                            <p>Lorem Ipsum is simply dummying text of the printing andtypesetting industry most of the standard.</p>
                                        </li>
                                        <li>
                                            <i class="icofont-check"></i>
                                            <p>Lorem Ipsum is simply dummying text of the printing andtypesetting industry most of the standard.</p>
                                        </li>
                                        <li>
                                            <i class="icofont-check"></i>
                                            <p>Lorem Ipsum is simply dummying text of the printing andtypesetting industry most of the standard.</p>
                                        </li>
                                        <li>
                                            <i class="icofont-check"></i>
                                            <p>Lorem Ipsum is simply dummying text of the printing andtypesetting industry most of the standard.</p>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                            <div class="blog__details__tag" data-aos="fade-up">
                                <ul>
                                    <li class="heading__tag">
                                        Tag
                                    </li>
                                    <li>
                                        <a href="#">Business</a>
                                    </li>
                                    <li>
                                        <a href="#">Design</a>
                                    </li>
                                    <li>
                                        <a href="#">apps</a>
                                    </li>
                                    <li>
                                        <a href="#">data</a>
                                    </li>
                                </ul>
                                <ul class="share__list">
                                    <li class="heading__tag">
                                        Share
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>


                            <div class="online__course__wrap">
                                <div class="instructor__heading__2" data-aos="fade-up">
                                    <h3>Author More Courses</h3>
                                    <a href="course.html">More Courses...</a>
                                </div>

                                <div class="row instructor__slider__active row__custom__class" data-aos="fade-up">
                                    <div class="col-xl-6 column__custom__class">
                                        <div class="gridarea__wraper">
                                            <div class="gridarea__img">
                                                <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/grid/grid_1.png" alt="grid"></a>
                                                <div class="gridarea__small__button">
                                                    <div class="grid__badge">Data &amp; Tech</div>
                                                </div>
                                                <div class="gridarea__small__icon">
                                                    <a href="#"><i class="icofont-heart-alt"></i></a>
                                                </div>

                                            </div>
                                            <div class="gridarea__content">
                                                <div class="gridarea__list">
                                                    <ul>
                                                        <li>
                                                            <i class="icofont-book-alt"></i> 23 Lesson
                                                        </li>
                                                        <li>
                                                            <i class="icofont-clock-time"></i> 1 hr 30 min
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="gridarea__heading">
                                                    <h3><a href="course-details.html">Foundation course to under stand
                                                    about softwere</a></h3>
                                                </div>
                                                <div class="gridarea__price">
                                                    $32.00 <del>/ $67.00</del>
                                                    <span> <del class="del__2">Free</del></span>

                                                </div>
                                                <div class="gridarea__bottom">

                                                    <a href="instructor-details.html">
                                                        <div class="gridarea__small__img">
                                                            <img loading="lazy"  src="{{ asset('/') }}website/img/grid/grid_small_1.jpg" alt="grid">
                                                            <div class="gridarea__small__content">
                                                                <h6>Micle Jhon</h6>
                                                            </div>
                                                        </div>
                                                    </a>

                                                    <div class="gridarea__star">
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <span>(44)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 column__custom__class">
                                        <div class="gridarea__wraper">
                                            <div class="gridarea__img">
                                                <img loading="lazy"  src="{{ asset('/') }}website/img/grid/grid_2.png" alt="grid">
                                                <div class="gridarea__small__button">
                                                    <div class="grid__badge blue__color">Mechanical</div>
                                                </div>
                                                <div class="gridarea__small__icon">
                                                    <a href="#"><i class="icofont-heart-alt"></i></a>
                                                </div>

                                            </div>
                                            <div class="gridarea__content">
                                                <div class="gridarea__list">
                                                    <ul>
                                                        <li>
                                                            <i class="icofont-book-alt"></i> 29 Lesson
                                                        </li>
                                                        <li>
                                                            <i class="icofont-clock-time"></i> 2 hr 10 min
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="gridarea__heading">
                                                    <h3><a href="#">Nidnies course to under stand
                                                    about softwere</a></h3>
                                                </div>
                                                <div class="gridarea__price green__color">
                                                    $32.00<del>/$67.00</del>
                                                    <span>.Free</span>

                                                </div>
                                                <div class="gridarea__bottom">
                                                    <a href="instructor-details.html">
                                                        <div class="gridarea__small__img">
                                                            <img loading="lazy"  src="{{ asset('/') }}website/img/grid/grid_small_2.jpg" alt="grid">
                                                            <div class="gridarea__small__content">
                                                                <h6>Rinis Jhon</h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="gridarea__star">
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <span>(44)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 column__custom__class">
                                        <div class="gridarea__wraper">
                                            <div class="gridarea__img">
                                                <a href="course-details.html"><img loading="lazy"  src="{{ asset('/') }}website/img/grid/grid_1.png" alt="grid"></a>
                                                <div class="gridarea__small__button">
                                                    <div class="grid__badge">Data &amp; Tech</div>
                                                </div>
                                                <div class="gridarea__small__icon">
                                                    <a href="#"><i class="icofont-heart-alt"></i></a>
                                                </div>

                                            </div>
                                            <div class="gridarea__content">
                                                <div class="gridarea__list">
                                                    <ul>
                                                        <li>
                                                            <i class="icofont-book-alt"></i> 23 Lesson
                                                        </li>
                                                        <li>
                                                            <i class="icofont-clock-time"></i> 1 hr 30 min
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="gridarea__heading">
                                                    <h3><a href="course-details.html">Foundation course to under stand
                                                    about softwere</a></h3>
                                                </div>
                                                <div class="gridarea__price">
                                                    $32.00 <del>/ $67.00</del>
                                                    <span> <del class="del__2">Free</del></span>

                                                </div>
                                                <div class="gridarea__bottom">

                                                    <a href="instructor-details.html">
                                                        <div class="gridarea__small__img">
                                                            <img loading="lazy"  src="{{ asset('/') }}website/img/grid/grid_small_1.jpg" alt="grid">
                                                            <div class="gridarea__small__content">
                                                                <h6>Micle Jhon</h6>
                                                            </div>
                                                        </div>
                                                    </a>

                                                    <div class="gridarea__star">
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <span>(44)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 column__custom__class">
                                        <div class="gridarea__wraper">
                                            <div class="gridarea__img">
                                                <img loading="lazy"  src="{{ asset('/') }}website/img/grid/grid_2.png" alt="grid">
                                                <div class="gridarea__small__button">
                                                    <div class="grid__badge blue__color">Mechanical</div>
                                                </div>
                                                <div class="gridarea__small__icon">
                                                    <a href="#"><i class="icofont-heart-alt"></i></a>
                                                </div>

                                            </div>
                                            <div class="gridarea__content">
                                                <div class="gridarea__list">
                                                    <ul>
                                                        <li>
                                                            <i class="icofont-book-alt"></i> 29 Lesson
                                                        </li>
                                                        <li>
                                                            <i class="icofont-clock-time"></i> 2 hr 10 min
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="gridarea__heading">
                                                    <h3><a href="#">Nidnies course to under stand
                                                    about softwere</a></h3>
                                                </div>
                                                <div class="gridarea__price green__color">
                                                    $32.00<del>/$67.00</del>
                                                    <span>.Free</span>

                                                </div>
                                                <div class="gridarea__bottom">
                                                    <a href="instructor-details.html">
                                                        <div class="gridarea__small__img">
                                                            <img loading="lazy"  src="{{ asset('/') }}website/img/grid/grid_small_2.jpg" alt="grid">
                                                            <div class="gridarea__small__content">
                                                                <h6>Rinis Jhon</h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="gridarea__star">
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <span>(44)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="blog__details__comment">
                                <div class="blog__details__comment__heading" data-aos="fade-up">
                                    <h5>(04) Comment</h5>
                                </div>
                                <div class="blog__details__comment__inner" data-aos="fade-up">
                                    <div class="author__img">
                                        <img loading="lazy"  src="{{ asset('/') }}website/img/blog-details/blog-details__1.png" alt="author">

                                    </div>
                                    <div class="author__content">
                                        <div class="author__name">
                                            <h6><a href="#">Rohan De Spond</a></h6>
                                            <p>25 january 2024</p>

                                        </div>
                                        <div class="author__text">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have. There are many variations of passages of Lorem Ipsum available, but the majority have</p>
                                        </div>
                                    </div>
                                    <div class="author__icon">
                                        <button>                                        
                                        <svg width="26" height="19" viewBox="0 0 26 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.91943 10.2031L12.1694 16.4531C13.3413 17.625 15.3726 16.8047 15.3726 15.125V12.3516C19.9819 12.5469 20.0991 13.5625 19.4351 15.8672C18.9272 17.5469 20.8413 18.9141 22.2866 17.9375C24.2788 16.5703 25.3726 14.8516 25.3726 12.3516C25.3726 6.76562 20.3726 5.67188 15.3726 5.47656V2.66406C15.3726 0.984375 13.3413 0.164062 12.1694 1.33594L5.91943 7.58594C5.17725 8.28906 5.17725 9.5 5.91943 10.2031ZM7.24756 8.875L13.4976 2.625V7.3125C18.1851 7.3125 23.4976 7.58594 23.4976 12.3516C23.4976 14.5391 22.3647 15.6328 21.2319 16.375C22.8335 11.0625 18.8491 10.4375 13.4976 10.4375V15.125L7.24756 8.875ZM0.919434 7.58594C0.177246 8.28906 0.177246 9.5 0.919434 10.2031L7.16943 16.4531C7.95068 17.2734 9.12256 17.1562 9.82568 16.4531L2.24756 8.875L9.82568 1.33594C9.12256 0.632812 7.95068 0.515625 7.16943 1.33594L0.919434 7.58594Z" fill="#121416"/>
                                        </svg>
                                    </button>
                                    </div>
                                </div>

                                <div class="blog__details__comment__inner author__padding__left" data-aos="fade-up">
                                    <div class="author__img">
                                        <img loading="lazy"  src="{{ asset('/') }}website/img/blog-details/blog-details__2.png" alt="author">

                                    </div>
                                    <div class="author__content">
                                        <div class="author__name">
                                            <h6><a href="#">Rohan De Spond</a></h6>
                                            <p>25 january 2024</p>

                                        </div>
                                        <div class="author__text">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have. There are many variations of passages of Lorem Ipsum available, but the majority have</p>
                                        </div>
                                    </div>
                                    <div class="author__icon">
                                        <button>                                        
                                            <svg width="26" height="19" viewBox="0 0 26 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.91943 10.2031L12.1694 16.4531C13.3413 17.625 15.3726 16.8047 15.3726 15.125V12.3516C19.9819 12.5469 20.0991 13.5625 19.4351 15.8672C18.9272 17.5469 20.8413 18.9141 22.2866 17.9375C24.2788 16.5703 25.3726 14.8516 25.3726 12.3516C25.3726 6.76562 20.3726 5.67188 15.3726 5.47656V2.66406C15.3726 0.984375 13.3413 0.164062 12.1694 1.33594L5.91943 7.58594C5.17725 8.28906 5.17725 9.5 5.91943 10.2031ZM7.24756 8.875L13.4976 2.625V7.3125C18.1851 7.3125 23.4976 7.58594 23.4976 12.3516C23.4976 14.5391 22.3647 15.6328 21.2319 16.375C22.8335 11.0625 18.8491 10.4375 13.4976 10.4375V15.125L7.24756 8.875ZM0.919434 7.58594C0.177246 8.28906 0.177246 9.5 0.919434 10.2031L7.16943 16.4531C7.95068 17.2734 9.12256 17.1562 9.82568 16.4531L2.24756 8.875L9.82568 1.33594C9.12256 0.632812 7.95068 0.515625 7.16943 1.33594L0.919434 7.58594Z" fill="#121416"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>


                                <div class="blog__details__comment__inner" data-aos="fade-up">
                                    <div class="author__img">
                                        <img loading="lazy"  src="{{ asset('/') }}website/img/blog-details/blog-details__3.png" alt="author">

                                    </div>
                                    <div class="author__content">
                                        <div class="author__name">
                                            <h6><a href="#">Rohan De Spond</a></h6>
                                            <p>25 january 2024</p>

                                        </div>
                                        <div class="author__text">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have. There are many variations of passages of Lorem Ipsum available, but the majority have</p>
                                        </div>
                                    </div>
                                    <div class="author__icon">
                                        <button>                                        
                                            <svg width="26" height="19" viewBox="0 0 26 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.91943 10.2031L12.1694 16.4531C13.3413 17.625 15.3726 16.8047 15.3726 15.125V12.3516C19.9819 12.5469 20.0991 13.5625 19.4351 15.8672C18.9272 17.5469 20.8413 18.9141 22.2866 17.9375C24.2788 16.5703 25.3726 14.8516 25.3726 12.3516C25.3726 6.76562 20.3726 5.67188 15.3726 5.47656V2.66406C15.3726 0.984375 13.3413 0.164062 12.1694 1.33594L5.91943 7.58594C5.17725 8.28906 5.17725 9.5 5.91943 10.2031ZM7.24756 8.875L13.4976 2.625V7.3125C18.1851 7.3125 23.4976 7.58594 23.4976 12.3516C23.4976 14.5391 22.3647 15.6328 21.2319 16.375C22.8335 11.0625 18.8491 10.4375 13.4976 10.4375V15.125L7.24756 8.875ZM0.919434 7.58594C0.177246 8.28906 0.177246 9.5 0.919434 10.2031L7.16943 16.4531C7.95068 17.2734 9.12256 17.1562 9.82568 16.4531L2.24756 8.875L9.82568 1.33594C9.12256 0.632812 7.95068 0.515625 7.16943 1.33594L0.919434 7.58594Z" fill="#121416"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div class="blog__details__comment__inner author__padding__left" data-aos="fade-up">
                                    <div class="author__img">
                                        <img loading="lazy"  src="{{ asset('/') }}website/img/blog-details/blog-details__4.png" alt="author">

                                    </div>
                                    <div class="author__content">
                                        <div class="author__name">
                                            <h6><a href="#">Rohan De Spond</a></h6>
                                            <p>25 january 2024</p>

                                        </div>
                                        <div class="author__text">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have. There are many variations of passages of Lorem Ipsum available, but the majority have</p>
                                        </div>
                                    </div>
                                    <div class="author__icon">
                                        <button>                                        
                                            <svg width="26" height="19" viewBox="0 0 26 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.91943 10.2031L12.1694 16.4531C13.3413 17.625 15.3726 16.8047 15.3726 15.125V12.3516C19.9819 12.5469 20.0991 13.5625 19.4351 15.8672C18.9272 17.5469 20.8413 18.9141 22.2866 17.9375C24.2788 16.5703 25.3726 14.8516 25.3726 12.3516C25.3726 6.76562 20.3726 5.67188 15.3726 5.47656V2.66406C15.3726 0.984375 13.3413 0.164062 12.1694 1.33594L5.91943 7.58594C5.17725 8.28906 5.17725 9.5 5.91943 10.2031ZM7.24756 8.875L13.4976 2.625V7.3125C18.1851 7.3125 23.4976 7.58594 23.4976 12.3516C23.4976 14.5391 22.3647 15.6328 21.2319 16.375C22.8335 11.0625 18.8491 10.4375 13.4976 10.4375V15.125L7.24756 8.875ZM0.919434 7.58594C0.177246 8.28906 0.177246 9.5 0.919434 10.2031L7.16943 16.4531C7.95068 17.2734 9.12256 17.1562 9.82568 16.4531L2.24756 8.875L9.82568 1.33594C9.12256 0.632812 7.95068 0.515625 7.16943 1.33594L0.919434 7.58594Z" fill="#121416"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>


                            <div class="blog__details__form">
                                <div class="blog__details__input__heading" data-aos="fade-up">
                                    <h5>Write your comment</h5>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6" data-aos="fade-up">
                                        <div class="blog__details__input">
                                            <input type="text" placeholder="Enter your name*">
                                        </div>
                                    </div>
                                    <div class="col-xl-6" data-aos="fade-up">
                                        <div class="blog__details__input">
                                            <input type="text" placeholder="Enter your mail**">
                                        </div>
                                    </div>
                                    <div class="col-xl-6" data-aos="fade-up">
                                        <div class="blog__details__input">
                                            <input type="text" placeholder="Enter your  number*">
                                        </div>
                                    </div>
                                    <div class="col-xl-6" data-aos="fade-up">
                                        <div class="blog__details__input">
                                            <input type="text" placeholder="Website*">
                                        </div>
                                    </div>
                                    <div class="col-xl-12" data-aos="fade-up">
                                        <div class="blog__details__input">
                                            <textarea cols="30" rows="10">Enter your Massage*</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__check__box" data-aos="fade-up">
                                    <input type="checkbox" checked="checked"> Save my name, email, and website in this browser for the next time I comment.
                                </div>
                            </div>
                            <div class="blog__details__button" data-aos="fade-up">
                                <a class="default__button" href="#">Post a Comment</a>
                            </div>



                        </div>
                    </div>


                    <div class="col-xl-4 col-lg-4">
                        <div class="course__details__sidebar--2">
                            <div class="event__sidebar__wraper" data-aos="fade-up">


                                <div class="blogarae__img__2 course__details__img__2" data-aos="fade-up">
                                    <img loading="lazy"  src="{{ asset('/') }}website/img/blog/blog_7.png" alt="blog">

                                    <div class="registerarea__content course__details__video">
                                        <div class="registerarea__video">
                                            <div class="video__pop__btn">
                                                <a class="video-btn" href="https://www.youtube.com/watch?v=vHdclsdkp28"> <img loading="lazy"  src="{{ asset('/') }}website/img/icon/video.png" alt=""></a>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="event__price__wraper">

                                    <div class="event__price">
                                        $32.00 <del>/ $67.00</del>
                                    </div>
                                    <div class="event__Price__button">
                                        <a href="#">68% OFF</a>
                                    </div>
                                </div>

                                <div class="course__summery__button">
                                    <a class="default__button" href="#">Add To Cart</a>
                                    <a class="default__button default__button--2" href="#">Buy Now</a>
                                    <span>
                                        <i class="icofont-ui-rotation"></i>
                                        45-Days Money-Back Guarantee
                                    </span>
                                </div>

                                <div class="course__summery__lists">
                                    <ul>
                                        <li>
                                            <div class="course__summery__item">
                                                <span class="sb_label">Instructor:</span><span class="sb_content"><a href="instructor-details.html">D. Willaim</a></span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="course__summery__item">
                                                <span class="sb_label">Start Date</span><span class="sb_content">05 Dec 2024</span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="course__summery__item">
                                                <span class="sb_label">Total Duration</span><span class="sb_content">08Hrs 32Min</span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="course__summery__item">
                                                <span class="sb_label">Enrolled</span><span class="sb_content">100</span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="course__summery__item">
                                                <span class="sb_label">Lectures</span><span class="sb_content">30</span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="course__summery__item">
                                                <span class="sb_label">Skill Level</span><span class="sb_content">Basic</span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="course__summery__item">
                                                <span class="sb_label">Language</span><span class="sb_content">Spanish</span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="course__summery__item">
                                                <span class="sb_label">Quiz</span><span class="sb_content">Yes</span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="course__summery__item">
                                                <span class="sb_label">Certificate</span><span class="sb_content">Yes</span>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="course__summery__button">
                                    <p>More inquery about course.</p>
                                    <a class="default__button default__button--3" href="tel:+4733378901"><i class="icofont-phone"></i> +47 333 78 901</a>
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

                            <div class="blogsidebar__content__wraper__2" data-aos="fade-up">

                                <h4 class="sidebar__title">Populer Course</h4>
                                <ul class="course__details__populer__list">
                                    <li>

                                        <div class="course__details__populer__img">
                                            <img loading="lazy"  src="{{ asset('/') }}website/img/blog-details/blog-details__6.png" alt="populer">
                                        </div>
                                        <div class="course__details__populer__content">
                                            <span>$32,000</span>
                                            <h6>
                                                <a href="#">Making Music with Other People</a>

                                            </h6>
                                        </div>



                                    </li>
                                    <li>

                                        <div class="course__details__populer__img">
                                            <img loading="lazy"  src="{{ asset('/') }}website/img/blog-details/blog-details__7.png" alt="populer">
                                        </div>
                                        <div class="course__details__populer__content">
                                            <span>$32,000</span>
                                            <h6>
                                                <a href="#">Making Music with Other People</a>

                                            </h6>
                                        </div>




                                    </li>
                                    <li>

                                        <div class="course__details__populer__img">
                                            <img loading="lazy"  src="{{ asset('/') }}website/img/blog-details/blog-details__8.png" alt="populer">
                                        </div>
                                        <div class="course__details__populer__content">
                                            <span>$32,000</span>
                                            <h6>
                                                <a href="#">Making Music with Other People</a>

                                            </h6>
                                        </div>




                                    </li>
                                </ul>

                            </div>
                            <div class="blogsidebar__content__wraper__2" data-aos="fade-up">

                                <h4 class="sidebar__title">Get in Touch</h4>
                                <div class="get__touch__input">
                                    <input type="text" placeholder="Enter name*">
                                    <input type="text" placeholder="Enter your mail*">
                                    <input type="text" placeholder="Massage*">
                                    <a class="default__button" href="blog-details.html">SEND MASSAGE</a>
                                </div>

                            </div>

                            <div class="blogsidebar__content__wraper__2" data-aos="fade-up">

                                <h4 class="sidebar__title">Popular tag</h4>
                                <div class="populer__tag__list">
                                    <ul>
                                        <li><a href="blog-details.html">Business</a></li>
                                        <li><a href="blog-details.html">Design</a></li>
                                        <li><a href="blog-details.html">apps</a></li>
                                        <li><a href="blog-details.html">landing page</a></li>
                                        <li><a href="blog-details.html">data</a></li>
                                        <li><a href="blog-details.html">book</a></li>
                                        <li><a href="blog-details.html">Design</a></li>
                                        <li><a href="blog-details.html">book</a></li>
                                        <li><a href="blog-details.html">landing page</a></li>
                                        <li><a href="blog-details.html">data</a></li>
                                    </ul>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    
@endsection