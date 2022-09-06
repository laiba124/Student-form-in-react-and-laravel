<?php
// use App\Models\Student;
// use Illuminate\Http\Request;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
  public function storeStudentsData(Request $request)
  {
    $student = new Student;
    $student->name = $request->name;
    $student->email = $request->email;
    $student->phone = $request->phone;
    $student->city = $request->city;
        $student->message = $request->message;
    $student->save();
    return response()->json([
      'status' => 200,
      'message' => 'Student Added Successfully',
    ]);
  }

  public function read()
  {
    $students = Student::all();
    return response()->json([
      'status' => 200,
      'students' => $students
    ]);
  }
  public function edit($stud_id)
  {

    $student = Student::find($stud_id);
    return response()->json([
      'status' => 200,
      'student' => $student,

    ]);
  }
  public function update(Request $request, $stud_id)
  {
    $student = Student::find($stud_id);
    $student->name = $request->input('name');
    $student->email = $request->input('email');
    $student->phone = $request->input('phone');
    $student->city = $request->input('city');
    $student->message = $request->input('message');
    $student->save();
    return response()->json([
      'status' => 200,
      'message' => 'Student updated Successfully',
      // 'student' => $student,

    ]);
  }
  public function delete($stud_id)
  {
    $student = Student::find($stud_id);
    $student->delete();
    return response()->json([
      'status' => 200,
      'message' => 'Student deleted Successfully',

    ]);
  }
  public function search($stud_id)
  {

    $student = Student::find($stud_id);
    return response()->json([
      'status' => 200,
      'student' => $student,

    ]);
  }
}
