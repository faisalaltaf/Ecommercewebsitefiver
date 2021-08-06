<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    //
    function create(Request $request){
      // dd($request);
        $request->validate([
            'name'=>'required',
            'email'=>'required |email|unique:users,email',
            'mobile'=>'required|digits:10|unique:users,mobile',
            'address'=>'required',
            'file'=>'required',
            'city'=>'required',
            'password'=> 'required|min:5|max:20',
            'cpassword'=>'required|min:5|max:20|same:password'
        ]);
  
     dd($request);
    return $request->all();
        $user = new User();
        // dd($user);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->file = $request->file('file')->store('user');
        $user->password = \Hash::make($request->password);
        // $user->cpassword = \Hash::make($request->cpassword);
        $save = $user->save();
  // dd($save);
        if($save){
  return redirect()->back()->with('success','you are now  register successfuly');
  
        }else{
  return redirect()->back()->with('fail', 'you are correct details');
        }
      }
  
  
      
      function check(Request $request){
  $request->validate([
      'email'=> 'required|email|exists:users,email',
      'mobile'=> 'required|mobile|exists:users,mobile',
      'password'=> 'required |min:5|max:20|',
      
  ],[
    'email.exists'=>'this is email not exit on  table',
    'mobile.exists'=>'this is mobile not exit on  table',
  ]);
  
  
  $user=User::get();
  
  
  foreach($user as $users){
  
  $creds =  $request ->only('email','password');
  if($users['status']==1){
  if(Auth::guard('web')->attempt($creds) ){
    return redirect()->route('user.home');
      
    }else{
      return redirect()->route('user.login')->with('fail','incorrect credentials');
      
    }
  }else{
    return redirect()->route('user.login')->with('fail','Admin Not permission ');
  }
  }
  }
  function logout(){
    Auth::guard('web')->logout();
    return redirect('user/login');
    
  }
  
  
}
