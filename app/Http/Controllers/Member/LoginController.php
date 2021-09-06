<?php
namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller{
    public function memberLogin(){
        if ( Auth::user() && Auth::user()->is_admin == 0 ){
            return redirect('/user/dashboard');
        }
        return view('member.login');
    }

    public function memberlogout() {
        Session::flush();
        Auth::logout();
        return redirect('/dashboard');
    }

    public function authenticate(Request $request){
        $credentials = $request->only('email', 'password');
        $credentials['is_admin'] = 0;
        // dd($credentials, $request->remember);
        if (Auth::attempt($credentials, false)) {
            return redirect()->intended('/user/dashboard');
        }
        // return redirect('admin_login');
        return back()->withInput()->with('status',"You don't have access");
    }
}