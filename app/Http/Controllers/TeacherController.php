<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function list()
    {
        $data = Teacher::all();
        try {
            return response()->json([
                'success' => 'true',
                'message' => 'Data fetch Successfully',
                'data' => $data
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => 'false',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
    public function teacherRegistration(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'gender' => 'required|string',
                'address' => 'required|string',
                'phone' => 'required|digits:11',
                'dob' => 'required|date',
                'date_of_join' => 'required|date',
            ]);
            $data = Teacher::create([
                'name' => $request->name,
                'gender' => $request->gender,
                'address' => $request->address,
                'phone' => $request->phone,
                'dob' => $request->dob,
                'date_of_join' => $request->date_of_join,
            ]);
            return response()->json([
                'success' => 'true',
                'message' => 'Data Created Successfully',
                'data' => $data
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => 'false',
                'message' => $e->getMessage()
            ], 500);
        }
    }
    public function teacherRegistrationUpdate(Request $request)
    {
        try {
            $request->validate([
                'id' => 'required|exists:teachers,id',
                'name' => 'required|string',
                'gender' => 'required|string',
                'address' => 'required|string',
                'phone' => 'required|digits:11',
                'dob' => 'required|date',
                'date_of_join' => 'required|date',
            ]);

            $teacher = Teacher::findOrFail($request->id);

            $teacher->update([
                'name' => $request->name,
                'gender' => $request->gender,
                'address' => $request->address,
                'phone' => $request->phone,
                'dob' => $request->dob,
                'date_of_join' => $request->date_of_join,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Data updated successfully',
                'data' => $teacher
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
