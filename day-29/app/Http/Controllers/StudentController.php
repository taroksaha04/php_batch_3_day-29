<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use function Symfony\Component\Console\Style\success;

class StudentController extends Controller
{
    protected  $students;
    protected $student;
    public function index()
    {
        return view('add-student');
    }
    public function create(Request $request)
    {
        //return $request->all();

        $this->student = new Student();
        $this->student->name = $request->name;
        $this->student->email = $request->email;
        $this->student->mobile = $request->mobile;
        $this->student->save();
//oi page ei dekhabe je data insert success hoiche
        return redirect()->back()->with('message','student info save successfully.');
    }
    //for show data
    public function manage()
    {
//        return Student::all();
        //shokol row return korbe
//        return Student::orderBy('id','desc')->get();
        //last er row anbe shudhu
//        return Student::orderBy('id','desc')->first();
        //last er 2ta
//        return Student::orderBy('id','desc')->take(2)->get();
        //last er ager ta
//        return Student::orderBy('id','desc')->skip(1)->first();
//        return Student::orderBy('id','desc')->skip(1)->take(5)->get();


        $this->students =  Student::orderBy('id','desc')->get();
        return view('manage-student',['students'=>$this->students]);
    }
    public function edit($id){
        //return $id;
        $this->student = Student::find($id);
//        return $this->student;
        return view('edit-student',['student' => $this->student]);
    }
    public function update(Request $request, $id)
    {
//        return $id;
//        return $request->all();
        $this->student = Student::find($id);
        $this->student->name = $request->name;
        $this->student->email = $request->email;
        $this->student->mobile = $request->mobile;
        $this->student->save();

        return redirect('/manage-student')->with('message','student info update successfull');
    }
    public function delete($id)
    {
        $this->student = Student::find($id);
        $this->student->delete();
        return redirect('/manage-student')->with('message','student info Delete successfull');
    }
}
