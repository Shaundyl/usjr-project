<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\College;
use App\Models\Department;
use App\Models\Program;

class UniversityController extends Controller
{
    public function showAllStudents()
{
    $students = Student::all();
    
    // Debugging line to check the retrieved data
    // dd($students->toArray());
    
    $students = $students->map(function ($student) {
        $student->full_name = trim("{$student->studfirstname} {$student->studmidname} {$student->studlastname}");
        return $student;
    });
    return view('students.index', compact('students'));
}


    public function showStudent($id)
    {
        $student = Student::findOrFail($id);
        $student->full_name = trim("{$student->studfirstname} {$student->studmidname} {$student->studlastname}");
        return view('students.show', compact('student'));
    }


    // public function showAllColleges()
    // {
    //     $colleges = College::all();

    //     // dd($colleges->toArray());

    //     $colleges = $colleges->map(function ($colleges) {
    //         $colleges->full_name = $colleges->collfullname;

    //         return $colleges;
    //     });

    //     return view('colleges.index', compact('colleges'));
    // }

    public function showAllColleges()
    {
        $colleges = College::with('programs')->get();
        return view('colleges.index', compact('colleges'));
    }

    public function showCollege($id)
    {
        $college = College::with(['departments', 'programs'])->findOrFail($id);
        return view('colleges.show', compact('college'));
    }

    public function showAllDepartments()
    {
        $departments = Department::with('college')->get();
        return view('departments.index', compact('departments'));
    }

    public function showAllPrograms()
    {
        $programs = Program::with('college', 'department')->get();
        return view('programs.index', compact('programs'));
    }

    public function showProgram($id)
    {
        $program = Program::with('college', 'department')->findOrFail($id);
        return view('programs.show', compact('program'));
    }
}
