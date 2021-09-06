<?php

namespace app\Http\Controllers\member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        if(!is_null(Auth::user()) && Auth::user()->is_admin == 1) {
            return redirect('admin/dashboard');
        }
        
        $user = Auth::user();
        
        return view('member.dashboard', compact('user'));
    }

    public function visit_store() {
        $user=Auth::user();
        return view('member.visit_store', compact('user'));
    }
    public function upcoming_matches() {
        $user=Auth::user();
        return view('member.upcoming_matches', compact('user'));
    }

    public function aboutus() {
        $user=Auth::user();
        return view('member.aboutus', compact('user'));
    }

    public function membership() {
        $user=Auth::user();
        return view('member.membership', compact('user'));
    }
    public function cart() {
        $user=Auth::user();
        return view('member.cart', compact('user'));
    }
    public function checkout() {
        $user=Auth::user();
        return view('member.checkout', compact('user'));
    }
}