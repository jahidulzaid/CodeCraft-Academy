<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $categories = Category::where('is_active', true)->orderBy('sort_order')->get();

        $courses = Course::with(['category', 'instructor'])
            ->where('is_published', true)
            ->latest('published_at')
            ->paginate(12);

        return view('website.course.index', compact('courses', 'categories'));
    }

    public function details()
    {
        $course = Course::with(['category', 'instructor', 'modules.lessons'])
            ->where('is_published', true)
            ->latest('published_at')
            ->first();

        $relatedCourses = Course::with(['category', 'instructor'])
            ->where('is_published', true)
            ->when($course, fn ($query) => $query->where('id', '!=', $course->id))
            ->latest('published_at')
            ->take(4)
            ->get();

        return view('website.course.course-details', compact('course', 'relatedCourses'));
    }
}
