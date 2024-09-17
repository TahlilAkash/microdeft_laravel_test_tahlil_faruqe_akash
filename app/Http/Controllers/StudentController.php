<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    //
    public function studentForm()
    {
        return view('student-form');
    }

    public function Store(Request $request)
    {
        //    dd($request->all());

        $validate = Validator::make($request->all(), [

            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',

        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        } else {
            Student::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,

            ]);
            return "student data inserted";
        }
    }


    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('student-edit', compact('student'));
    }
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        return redirect('/student-list');
    }
}
