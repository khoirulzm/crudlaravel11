<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    // Display a listing of the students
    public function index(Request $request)
    {
        $search = $request->input('search');
        $school = Auth::user()->school;

        $students = Student::where('school', $school)
            ->when($search, function ($query, $search) {
                return $query->where(function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%')
                          ->orWhere('dob', 'like', '%' . $search . '%')
                          ->orWhere('school', 'like', '%' . $search . '%')
                          ->orWhere('description', 'like', '%' . $search . '%');
                });
            })->paginate(10);

        return view('students.index', compact('students'))->with('username', Auth::user()->name);
    }

    // Store a newly created student in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'school' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')->with('success', 'Student added successfully.');
    }

    // Update the specified student in storage
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'school' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    // Remove the specified student from storage
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
