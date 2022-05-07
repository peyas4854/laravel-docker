<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // comments of students
    public function studentComment()
    {
        $student = Student::query()->find(1);
        dd($student->comments);
    }
}
