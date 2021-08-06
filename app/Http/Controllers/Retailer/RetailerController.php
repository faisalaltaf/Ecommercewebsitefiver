<?php

namespace App\Http\Controllers\Retailer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Retailer;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\RequestStack;

class RetailerController extends Controller
{
    //

    function create(Request $request){
        $request->validate([
 'name'=>'required',
 'email'=>'required|email|unique:doctors,email',
 'mobile'=>'required|unique:mobile',
 'shopaddress' => 'required|min:5|max:100' ,
 'city ' => 'required|min:5|max:100' ,
 'areaselect ' => 'required|min:5|max:100' ,
 'ownerpicture' => 'required' ,
 'areaselect ' => 'required' ,
 'NID ' => 'required|min:13|max:13' ,
 'password'=> 'required | min:5|max:20',
 'cpassword'=>'required |min:5|max:20|same:password',

        ]);
    //     $user = new User();
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->password = \Hash::make($request->password);
    //   //   $user->cpassword = \Hash::make($request->cpassword);
    //     $save = $user->save();

    $retailer =new Retailer();
    $retailer->name = $request->name;
    $retailer->email =$request->email;
    $retailer->mobile = $request->mobile;
    $retailer->shopaddress = $request->shopaddress;
    $retailer->city = $request->city;
    $retailer->areaselect = $request->areaselect;
    $retailer->ownerpicture = $request->ownerpicture;
    $retailer->NID = $request->NID;
    $retailer->password = \Hash::make($request->password);
    // $doctor->cpassword =\Hash::make($request->cpassword);
$save= $retailer->save();
if($save){
    return redirect()->back()->with('success','you are now  register successfuly');
}else
return redirect()->back()->with('fail','correct data insert'); 
}

function check(Request $request){
    $request->validate([
        'email'=>"required|email|exists:doctors,email",
        'password'=>"required|min:4|max:20",

    ],[
        'email.exists'=>'this is email not exit doctor table',

    ]);

    $creds = $request->only('email','password');
    if(Auth::guard('retailer')->attempt($creds)){
        return redirect()->route('retailer.home');
    }else{
        return redirect()->route('retailer.login')->with('fail','password correct');
    }
}


function logout(Request $request){
    Auth::guard('retailer')->logout();
    return redirect('retailer/login');
}



}
