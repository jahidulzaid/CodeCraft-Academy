@extends('website.master')

@section('title')
    CodeCraft Academy | Learn by Building
@endsection

@section('body')
    <section class="herobannerarea herobannerarea__2 sp_top_100 sp_bottom_100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12" data-aos="fade-up">
                    <div class="herobannerarea__content__wraper">
                        <div class="herobannerarea__small__title">
                            <span>Career-Focused Learning Platform</span>
                        </div>

                        <div class="herobannerarea__title__heading__2 herobannerarea__title__heading__3">
                            <h3>{{ $heroSection?->title ?? 'Launch Your Software Career with Real Projects' }}</h3>
                            <h5>{{ $heroSection?->subtitle ?? 'Learn. Practice. Build. Get hired.' }}</h5>
                        </div>

                        <div class="herobannerarea__text herobannerarea__text__2">
                            <p>
                                CodeCraft Academy helps you move from tutorials to real outcomes through structured
                                tracks, mentor feedback, and portfolio-ready capstones.
                            </p>
                        </div>

                        <div class="hreobannerarea__button__2">
                            <a class="default__button" href="{{ route('course-list') }}">
                                {{ data_get($heroSection?->content, 'primary_cta', 'Explore Courses') }}
                            </a>
                            <a class="default__button hreobannerarea__button__3" href="{{ route('ai.view') }}">
                                Ask AI Mentor
                            </a>
                        </div>

                        <div class="row mt-4 g-3">
                            <div class="col-sm-6">
                                <div class="p-3 rounded" style="background: rgba(95,45,237,0.08);">
                                    <h5 class="mb-1">{{ data_get($heroSection?->content, 'stats.active_learners', '12,000+') }}</h5>
                                    <p class="mb-0">Active Learners</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="p-3 rounded" style="background: rgba(255,179,31,0.12);">
                                    <h5 class="mb-1">{{ data_get($heroSection?->content, 'stats.career_tracks', '18') }}</h5>
                                    <p class="mb-0">Career Tracks</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12" data-aos="fade-up">
                    <div class="aboutarea__img__2" data-tilt>
                        <img loading="lazy" class="aboutimg__1" src="{{ asset('/') }}website/img/about/about_10.png" alt="hero">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gridarea sp_bottom_100">
        <div class="container">
            <div class="row mb-4 align-items-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <div class="section__title__heading__2 section__title__heading__3 heading__fontsize__2">
                        <h2>Featured Courses</h2>
                    </div>
                    <p>Pick a path and start building practical skills this week.</p>
                </div>
                <div class="col-lg-4 text-lg-end" data-aos="fade-up">
                    <a class="default__button" href="{{ route('course-list') }}">Browse All Courses</a>
                </div>
            </div>

            <div class="row">
                @forelse ($featuredCourses as $course)
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-4" data-aos="fade-up">
                        <div class="gridarea__wraper h-100">
                            <div class="gridarea__img">
                                <a href="{{ route('course-details') }}">
                                    <img loading="lazy" src="{{ $course->thumbnail ?: asset('/') . 'website/img/grid/grid_2.png' }}" alt="course">
                                </a>
                                <div class="gridarea__small__button">
                                    <div class="grid__badge blue__color">{{ $course->category?->name ?? 'General' }}</div>
                                </div>
                            </div>

                            <div class="gridarea__content">
                                <div class="gridarea__heading">
                                    <h3><a href="{{ route('course-details') }}">{{ $course->title }}</a></h3>
                                </div>

                                <p>{{ \Illuminate\Support\Str::limit($course->short_description ?? 'Structured course with practical projects.', 110) }}</p>

                                <div class="gridarea__list">
                                    <ul>
                                        <li><i class="icofont-book-alt"></i> {{ $course->modules->count() }} Modules</li>
                                        <li><i class="icofont-clock-time"></i> {{ number_format((float) $course->duration_hours, 1) }} Hours</li>
                                    </ul>
                                </div>

                                <div class="gridarea__price">
                                    @if ($course->discounted_price)
                                        ${{ number_format((float) $course->discounted_price, 2) }}
                                        <del>${{ number_format((float) $course->price, 2) }}</del>
                                    @else
                                        ${{ number_format((float) $course->price, 2) }}
                                    @endif
                                </div>

                                <div class="mt-3 d-flex gap-2 flex-wrap">
                                    <a class="default__button" href="{{ route('course-details') }}">View Details</a>
                                    @auth
                                        @if (auth()->user()->role === 'student')
                                            <form method="POST" action="{{ route('student.enrollments.store') }}">
                                                @csrf
                                                <input type="hidden" name="course_id" value="{{ $course->id }}">
                                                <button type="submit" class="default__button hreobannerarea__button__3">Enroll</button>
                                            </form>
                                        @endif
                                    @else
                                        <a class="default__button hreobannerarea__button__3" href="{{ route('signin') }}">Sign In</a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info">No featured courses are published yet.</div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="testimonialarea sp_bottom_100">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-8" data-aos="fade-up">
                    <div class="section__title__heading__2 section__title__heading__3 heading__fontsize__2">
                        <h2>Learner Testimonials</h2>
                    </div>
                    <p>Stories from learners who moved from confusion to confident delivery.</p>
                </div>
            </div>

            <div class="row">
                @forelse ($testimonials as $testimonial)
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                        <div class="p-4 h-100 rounded" style="background: #f7f7fb; border: 1px solid #ececf2;">
                            <h5 class="mb-1">{{ $testimonial->name }}</h5>
                            <p class="mb-2">{{ $testimonial->role }}{{ $testimonial->company ? ' at ' . $testimonial->company : '' }}</p>
                            <p class="mb-3">"{{ $testimonial->quote }}"</p>
                            <small>Rating: {{ $testimonial->rating }}/5</small>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-light border">Testimonials will appear here when published.</div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="pricingarea sp_bottom_100">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-8" data-aos="fade-up">
                    <div class="section__title__heading__2 section__title__heading__3 heading__fontsize__2">
                        <h2>Pricing Plans</h2>
                    </div>
                    <p>Choose the plan that matches your pace and outcomes.</p>
                </div>
            </div>

            <div class="row">
                @forelse ($pricingPlans as $plan)
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                        <div class="p-4 h-100 rounded" style="border: 1px solid #ececf2; background: {{ $plan->is_popular ? '#fff8eb' : '#ffffff' }};">
                            <h4>{{ $plan->name }}</h4>
                            <p>{{ $plan->description }}</p>
                            <h3 class="mb-3">${{ number_format((float) $plan->price, 2) }}</h3>
                            <p class="text-muted text-capitalize mb-3">{{ str_replace('_', ' ', $plan->billing_cycle) }}</p>
                            <ul class="mb-4">
                                @foreach (collect($plan->features ?? []) as $feature)
                                    <li>{{ $feature }}</li>
                                @endforeach
                            </ul>
                            <a class="default__button" href="{{ route('contact') }}">Get Started</a>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-light border">Pricing plans will appear here when configured.</div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="sp_bottom_100">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-8" data-aos="fade-up">
                    <div class="section__title__heading__2 section__title__heading__3 heading__fontsize__2">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>

            <div class="accordion" id="faqAccordion">
                @forelse ($faqs as $faq)
                    <div class="accordion-item mb-2" data-aos="fade-up">
                        <h2 class="accordion-header" id="faq-heading-{{ $loop->index }}">
                            <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-{{ $loop->index }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="faq-collapse-{{ $loop->index }}">
                                {{ $faq->question }}
                            </button>
                        </h2>
                        <div id="faq-collapse-{{ $loop->index }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" aria-labelledby="faq-heading-{{ $loop->index }}" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                {{ $faq->answer }}
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-light border">FAQs will appear here when published.</div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="sp_bottom_100">
        <div class="container">
            <div class="p-5 rounded" style="background: linear-gradient(135deg, #f4f1ff 0%, #fff7ea 100%); border: 1px solid #ececf2;" data-aos="fade-up">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h3 class="mb-2">Ready to start building your software career?</h3>
                        <p class="mb-0">Join CodeCraft Academy and turn your learning time into portfolio outcomes.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                        <a class="default__button me-2" href="{{ route('course-list') }}">Start Learning</a>
                        <a class="default__button hreobannerarea__button__3" href="{{ route('contact') }}">Talk to Team</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
