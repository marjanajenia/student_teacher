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
            'phone' => 'required|digits:11',
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
    public function edit($id){
        $student = Student::find($id);
        return view('student.edit', compact('student'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|string',
            'gender' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|digits:11',
            'dob' => 'required|date',
            'date_of_join' => 'required|date',
        ]);
        Student::where('id', $id)->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'address' => $request->address,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'date_of_join' => $request->date_of_join,
        ]);
        return redirect()->route('student.list');
    }
    public function destroy($id){
        Student::where('id', $id)->delete();
        return redirect()->back();
    }
}
