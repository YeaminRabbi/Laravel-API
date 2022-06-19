<?php

namespace App\Http\Controllers;

use App\Http\Resources\StudentResource;
use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    function studentlist()
    {
        $student = Student::all();
        return StudentResource::collection($student);
    }
}
