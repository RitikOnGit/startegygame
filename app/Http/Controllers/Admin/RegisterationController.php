<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Facade;
use Validator;
use DB;

class RegisterationController extends Controller
{

    public function Register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'designation' => 'required|string|min:6',
            'department' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:6',
            'confirm_password' => 'required|string|min:6|same:password',

        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }
        $user = User::where('users.email', $request->email)->first();
        print_r($user);
        if ($user) {
            $response = ["message" => "Email Already Exist"];
            return response($response, 422); 
        } else {
            // $data = $request->input();
			try{
				$user = new User;
                $user->full_name = $request->full_name;
                $user->designation = $request->designation;
				$user->department = $request->department;
                $user->is_active = 0;
				$user->email = $request->email;
                $user->password = $request->password;  
                // print_r($user);              
				$user->save();

                $response = ["message" => "Insert successfully"];
				return response($response,"200");
			}
			catch(Exception $e){
				return response('insert')->with('failed',"operation failed");
			}
        }
    }


    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }
        $user = User::where('users.email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $response = ['User' => 'You are Logged in'];
                return response($response, 200);
            } else {
                $response = ["message" => "Password not match"];
                return response($response, 422);
            }
        } else {
            $response = ["message" =>'User not exist'];
            return response($response, 422);
        }
    }


}
