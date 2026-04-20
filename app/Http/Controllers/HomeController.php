<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Faq;
use App\Models\HomepageSection;
use App\Models\PricingPlan;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $featuredCourses = Course::with(['category', 'instructor'])
            ->where('is_published', true)
            ->latest('published_at')
            ->take(6)
            ->get();

        $heroSection = HomepageSection::where('key', 'hero')->where('is_active', true)->first();
        $testimonials = Testimonial::where('is_published', true)->orderBy('sort_order')->take(6)->get();
        $faqs = Faq::where('is_published', true)->orderBy('sort_order')->take(6)->get();
        $pricingPlans = PricingPlan::where('is_active', true)->orderBy('sort_order')->get();

        return view('website.home.index', compact('featuredCourses', 'heroSection', 'testimonials', 'faqs', 'pricingPlans'));
    }
}
