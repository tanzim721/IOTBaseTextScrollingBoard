<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    public function index(){ 
        // dd('ok');
        return view('backend.layoutsUser.residential');
        
    }
    public function view(){
        // dd('ok');        
        $data['allData'] = Student::all();
        return view('backend.formRegistation.view',$data);
    }
    public function add(){
        return view('backend.formRegistation.add');
    }
    public function store(Request $request){ 
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|unique:users,email']);
        $data = new Student();
        $data->roll = $request->roll;
        $data->registatiom = $request->registation;
        $data->email = $request->email;
        $data->gender = $request->gender;
        $data->bName = $request->bName;
        $data->eName = $request->eName;
        $data->birth = $request->birth;
        $data->fName = $request->fName;
        $data->mName = $request->mName;
        $data->gName = $request->gName;
        $data->address = $request->address;
        $data->save();
        return redirect()->route('students.view')->with('success','Data Inserted Successfully');
    }
    
}
