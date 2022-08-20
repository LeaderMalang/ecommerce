<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Aimeos\Shop\Facades\Product;

class AuthEcommerceController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect()->route('ecommerce-login');
    }
    public function home(){
//         $items = Product::uses(['text', 'media', 'price','name'])

// ->sort('name')->search();
// foreach($items as $item){
//  var_dump($item);
// }
// dd( $items);
        return view('home');
    }
    public function login(){
        return view ('sign-in');
    }
    public function signup(){
        return view ('sign-up');
    }
    public function signup_store(Request $request){
        // $validator = Validator::make($request->all(), ;
        // dd($validator->errors());
        $rules=[
            'email' => 'required|unique:users,email',
            'full_name' => 'required|string',
            'password' => 'required|confirmed|string|min:6'
        ];
        $request->validate($rules);

        $user = new User([
            'name' => $request->full_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),

        ]);
        if($user->save()){
            $msg=['result'=>1,'message'=>"Successfully Registered Account !"];
            return redirect()->route('ecommerce-login')->with($msg);
        }else {
            $msg=['result'=>0,'message'=>"Internal Server Error Please Try Again Later!"];
            return redirect()->back()->withErrors($msg);
        }


    }
    public function login_check(Request $request){
        $rules=[
            'email' => 'required|email',
            'password' => 'required|string|min:6'
        ];
        $request->validate($rules);

        $credentials = request(['email', 'password']);
        if (!Auth::attempt($credentials))
            return redirect()->back()->withErrors(['msg' => 'Username or Password Did not Matched']);


        return redirect()->route('home-page');


    }
}
