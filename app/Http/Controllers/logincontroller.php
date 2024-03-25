<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\staffs_registers;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\menues;
use App\Models\menu_item;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForgetPassword;

class logincontroller extends Controller
{
    public function index()
    {
       return view('components.index');
    }


  public function register()
   {
      return view('components.reg');
   }
public function save(request $request )
{        $data= new user;

      $data->name=$request->name;
      $data->email=$request->email;
      $data->password =$request->password;
      $data->save();
      return ('successfully....');

}

public function user()
{
    return view('components.l');
}


public function login(Request $request)
{
    $email = $request->input('email');
    $password = $request->password;
    $user = staffs_registers::where('email_id', $email)->first();

    if ($user && $password === $user->password && $user->role==='Admin') {
        return view('components.admin');
    }
    elseif ($user && $password === $user->password && ($user->role === 'Manager')) {
        $name=staffs_registers::all();
        return view('manager.managerdashboard',compact('name'));
    }
    elseif ($user && $password === $user->password && ($user->role === 'staff' || $user->role === 'Billing')) {
        $menu=menues::all();
         $menu_items = menu_item::all();

        return view('components.orders',compact('menu','menu_items'));
    }
    else
    {
        Session::flash('message','Invalid credentials');
        return back()->withInput(['email' => $email]);
    }
}

public function email()
{
    return view('components.email');
}
public function email_verify(request $request)
{
$email = $request->input('email');
$user= staffs_registers::where('email_id',$email)->first();
if(!$user)
{
    Session::flash('email','This Email Address Does not exits  ');
     return back()->withInput(['email' => $email]);

}
else{
        $otp = rand(100000, 999999);
        staffs_registers::where('email_id', $email)->update(['token' => $otp]);
        Mail::to($request->email)->send(new ForgetPassword ($otp));
         return redirect('otp');
    }
}
public function Otp()
{
    return view('components.otp');
}
public function verify(request $request)
{   $token = $request->otp;
    $user =  staffs_registers::where('token', $token)->first();

    if ( !$user) {
        return redirect('email')->with('error', 'Invalid OTP');


}
else{
    return view('components.password', compact('token'));

}

}

public function change(request $request)
{
        $token=$request->token;
         $user=  staffs_registers::where('token', $token)->first();
         $password=$request->password;
         if($user)
              {
                staffs_registers::where('token', $token)->update(['password' => $password]);
                staffs_registers::where('token', $token)->update(['token' => null]);
            return redirect('user');
              }

}
}






