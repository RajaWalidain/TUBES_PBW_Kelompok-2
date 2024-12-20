<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index(){
        $course = Course::oldest()->get();
        return view('courses.index', [
            'courses' => $course
        ]);
    }

    public function create()
    {
        return view('courses.form',[
            'course' => new Course(),
            'page_meta' => [
                'title' => 'Create Course',
                'description' => 'Create new course for yours.',
                'method' => 'post',
                'url' => route('courses.course'),
            ]
        ]);
    }

    public function store(CourseRequest $request)
    {
        $file = $request->file('image');
        $request->user()->courses()->create([
            ...$request->validated(),
            ...['image' => $file->store('images/courses')],
        ]);

        return to_route('courses.index');
    }

    public function edit(Request $request, course $course)
    {
        Gate::authorize('update', $course);
        // abort_if($request->user()->isNot($course->user), 401);
        return view('courses.form', [
            'course' => $course,
            'page_meta' => [
                'title' => 'Edit course',
                'description' => 'Edit course: ' . $course->title,
                'method' => 'put',
                'url' => route('courses.update', $course),
            ]
        ]);
    }

    public function update(CourseRequest $request, Course $course){
        $course->update([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return to_route('courses.index');
    }

    public function destroy(Course $course){
        Gate::authorize('destroy', $course);
        if ($course->image && Storage::exists($course->image)) {
            Storage::delete($course->image);
        }

        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course berhasil dihapus.');
    }


    public function show($id){
        $course = Course::findOrFail($id);
        return view('courses.show', compact('course'));
    }

    public function showPayment(Course $course){
        return view('courses.payment', compact('course'));
    }
}