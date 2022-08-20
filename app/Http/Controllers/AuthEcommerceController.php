<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthEcommerceController extends Controller
{
    public function login(){
        return view ('sign-in');
    }
    public function signup(){
        return view ('sign-up');
    }
    public function signup_store(Request $request){

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'username'=>$request->username,
            'phone'=>$request->phone,
            'city'=>$request->address,
            'country'=>$request->country,
            'parent'=>$request->sponsor,
            'sponsor'=>$request->sponsor
        ]);
        if($user->save()){
            $msg=['result'=>1,'message'=>"Successfully Registered Account !"];
            return response()->json($msg);
        }else {
            $msg=['result'=>0,'message'=>"Internal Server Error Please Try Again Later!"];
            return response()->json($msg);
        }


    }
    public function login_check(Request $request){
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'password' => 'required|string'
        ]);
        if ($validator->fails()) {

            $obj = ["Status" => false, "success" => 0, "errors" => $validator->errors()];
            return response()->back($obj);
        }
        $credentials = request(['username', 'password']);
        if (!Auth::attempt($credentials))
            return redirect()->back()->withErrors(['msg' => 'Username or Password Did not Matched']);


        return redirect()->route('dashboard');


    }
}
