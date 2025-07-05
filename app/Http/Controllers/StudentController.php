<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function list(){
        $students=Student::paginate(1);
        return view('student.list', compact('students'));
    }
    public function create(){
        return view('student.create');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'gender' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'dob' => 'required|date',
            'date_of_join' => 'required|date',
         ]);
       $data=Student::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'address' => $request->address,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'date_of_join' => $request->date_of_join,
        ]);
        return redirect()->route('student.list');
    }
}
