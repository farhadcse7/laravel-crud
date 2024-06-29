<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public $student, $students, $image, $directory, $imageName, $imageUrl;

    public function index()
    {
        $this->students = Student::all();

        return view('student.index', ['students' => $this->students]);
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $this->image = $request->file('image');
        $this->imageName = $this->image->getClientOriginalName();
        $this->directory = 'upload/student-images/';
        $this->image->move($this->directory, $this->imageName);
        $this->imageUrl = $this->directory . $this->imageName;

        $this->student = new Student();
        $this->student->name = $request->name;
        $this->student->email = $request->email;
        $this->student->mobile = $request->mobile;
        $this->student->address = $request->address;
        $this->student->gender = $request->gender;
        $this->student->image = $this->imageUrl;
        $this->student->save();

        return back()->with('message', 'Data store successfully.');
    }

    public function edit($id)
    {
        $this->student = Student::find($id);
        return view('student.edit', ['student' => $this->student]);
    }

    public function update(Request $request, $id)
    {
        $this->student = Student::find($id);
        if ($request->file('image')) {
            $this->image = $request->file('image');
            $this->imageName = $this->image->getClientOriginalName();
            $this->directory = 'upload/student-images/';
            $this->image->move($this->directory, $this->imageName);
            $this->imageUrl = $this->directory . $this->imageName;
        } else {
            $this->imageUrl = $this->student->image;
        }
        $this->student->name = $request->name;
        $this->student->email = $request->email;
        $this->student->mobile = $request->mobile;
        $this->student->address = $request->address;
        $this->student->gender = $request->gender;
        $this->student->image = $this->imageUrl;
        $this->student->save();

        return redirect('/student/all')->with('message', 'Student info update successfully');
    }

    public function destroy($id)
    {
        $this->student = Student::find($id);
        $this->student->delete();
        return redirect('/student/all')->with('message', 'Student info delete successfully');


    }
}
