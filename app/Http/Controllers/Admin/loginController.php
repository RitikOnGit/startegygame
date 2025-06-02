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
use Illuminate\Support\Facades\Auth;
class loginController extends Controller
{

    public function login_index(Request $request){
        return view('Login.adminlogin');
    }
    public function user(Request $request){
        return view('Login.userlogin');
    }

    public function leader_board(Request $request){
        return view('Login.leaderboard');
    }
    public function task_tofollow(Request $request){
        return view('Login.task_follow');
    }

    public function video1(Request $request){
        return view('Login.video');
    }

    public function business_video(Request $request){
        return view('Login.business_video');
    }

    public function choose_role(Request $request)
    {
        if((Auth::id()) != null ){
            $user_row = DB::table('roles')->where('user_id',Auth::id())->orderBy('id', 'desc')->first();
            if(isset($user_row)){
                return redirect('task');
            }else{ 
                return view('Login.choose_role');
            }
    }else{
        return redirect('login');
    }
    }

    public function save_role(Request $request)
    {
        if((Auth::id()) != null ){
            $user_row = DB::table('roles')->where('user_id',Auth::id())->orderBy('id', 'desc')->first();
            if(isset($user_row)){
            }else{ 
        $data = [
            'user_id' => Auth::id(),
            'role_name' => 'CEO',
        ]; 
        $role = DB::table('roles')->insert($data);
    }
        return redirect('task');
    }else{
        return redirect('login');
    }
        
    }


    public function Register(Request $request)
    {
        // dd($request->all());
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
                $user->password = Hash::make($request->input('password'));  
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

    
public function admin_login(Request $request)
{
  $request->validate([
    'email' => 'required|string|email',
    'password' => 'required|string',
    'remember_me' => 'boolean'
  ]);

  if(!Auth::attempt(['email' => $request->email, 'password' => $request->password]))
  {
   return response()->json([
    'message' => 'Unauthorized',
    'status' => 401
  ]);

 }else{
    $user = $request->user();

if ($user && $user->id === 4 && $user->department === 'admin' && $user->email === '1sdf@gmail.com') {
    // echo 'its if true';
    $user_type = 'admin';
} else {
    $user_type = 'user';
    // echo 'its else fales';
}

    // dd($request->user());

   $user = $request->user();
   $credentials['id']=$user['id'];
   $credentials['account_id']="SHRIHR";
   $credentials['user_role']=$user['user_role'];
   $credentials['user_name']=$user['name'];
   Session::put('user', $credentials);
   $tokenResult = $user->createToken('Personal Access Token');
   $token = $tokenResult->plainTextToken;
   Session::put('token', $token);

   return response()->json([
    'message'=> "Login Successfully",
    'id'=> $user['id'],
    'name'=> $user['name'],
    'email'=> $user['email'],
    'role'=> $user['user_role'],
    'token' =>$token,
    'user_type' => $user_type,
    'status' => true
  ]);

 }

}


   


}
