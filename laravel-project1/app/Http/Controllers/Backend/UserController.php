<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;  
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth; 

class UserController extends Controller
{
    public function view(){
        $data['allData'] = User::all();
        return view('backend.user.view-user',$data);
    }
    public function add(){
        return view('backend.user.add-user');
    }
    public function store(Request $request){ 
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|unique:users,email'
        ]);
        $data = new User();
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        if (Auth::user()) {
            return redirect()->route('users.view')->with('success','Data Inserted Successfully');
        }
        return redirect()->back()->with('success','Data Inserted Successfully');
    }
    public function edit($id){
        $editData = User::find($id);
        return view('backend.user.edit-user',compact('editData'));
    }
    public function update(Request $request, $id){
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->save();
        return redirect()->route('users.view')->with('success','Data Update Successfully');
    }
    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.view')->with('success','Data Delete Successfully');
    }
    public function passwordView(){
        return view('backend.user.edit-password');
    }
    public function passwordUpdate(Request $request){
        if(Auth::attempt(['id'=>Auth::user()->id, 'password'=>$request->current_password])){
            dd('ok');
        }
        else{
            dd('errors');
        }
    }

    // For layoutsUser
    // public function form(){
    //     return view('backend.layoutsUser.residentisal');
    // }

}
