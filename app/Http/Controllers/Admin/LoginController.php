<?php
namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller{
    public function adminLogin(){
        if ( Auth::user() && Auth::user()->is_admin == 1 ){
            return redirect('/admin/dashboard');
        }
        return view('admin.login');
    }

    public function adminlogout() {
        Auth::logout();
        Session::flush();
        return redirect()->route('admin_login');
    }

    public function authenticate(Request $request){
        $credentials = $request->only('email', 'password');
        $credentials['is_admin'] = 1;
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            return redirect('/admin/dashboard');
        }
        // return redirect('admin_login');
        return back()->with('status',"You don't have admin access");
    }
    
}