<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class usercontroller extends Controller
{
    //
    
    public function login(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return redirect('/')->with('error', 'Invalid email or password.');
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/product');
        }
    }
    public function logout()
{
    // Clear the session data
    session()->forget('user');

    // Redirect to the login page
    return redirect('/')->with('success', 'Logged out successfully');
}
    public function register(Request $req)
    {
        // return $req->input();
        $validator = Validator::make($req->all(), [
            'name' => 'required|string|regex:/^[a-zA-Z]+$/|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|max:255|confirmed|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]+$/',
        ],
        
        [
            'password.regex' => 'The password must contain at least one uppercase letter, one lowercase letter, one number, and one special character.',
        ]);
    
        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = new User;
        $user-> name = $req->name;
        $user-> email = $req->email;
        $user-> password =Hash::make($req->password) ;
        $user->save();
        return redirect('/');
    }    

}
