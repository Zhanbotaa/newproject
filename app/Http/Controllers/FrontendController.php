<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\User;


class FrontendController extends Controller

{
	public function index(){
		return view('frontend.index');
	}

    public function ourservice(){
    	return view('frontend.ourservice');
    }

     public function franchises(){
    	return view('frontend.franchises');
    }

    

    public function contactus(){
    	return view('frontend.contact');
    }

     public function data(){
        return view('frontend.data');
    }



     public function view(){
        $users= User::all();
        return view('frontend.view',['users'=>$users]);

    }

    public function edit($id){
        $users =User::find($id);
        return view('frontend.edit',compact('users'));
    }

    public function update(Request $req, $id){
        $this->validate($req,[
            'name'=>'required', // для валидации
            'email'=>'required',

        ]);
        $users = User::find($id);
        $users->name = $req->name;
        $users->email = $req->email;
        $users->save();

        return redirect(route('view'))->with('successMsg', 'User Successfully Updated');

    }

    public function delete($id){
        User::find($id)->delete();
        return redirect(route('view'))->with('successMsg', 'User Delete Successfully ');

    }



}




