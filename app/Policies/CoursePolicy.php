<?php

namespace App\Policies;

use App\Models\Course;
use App\Models\User;

class CoursePolicy
{
    public function update(User $user, Course $course){
        return $user->id === $course->user_id;
    }

    // return to 404 page
    // public function update(User $user, Store $store): Response{
    //     return $user->user_id === $store->user_id ? Response::allow() : Response::denyAsNotFound();
    // }

    public function destroy(User $user, Course $course) {
    // Izinkan jika user adalah admin
    if ($user->hasRole('admin')) {
        return true;
    }

    // Jika bukan admin, hanya izinkan pemilik course
    return $user->id === $course->user_id;
}

}