<?php

namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index(){
        // var_dump(Auth::user());
        $user = Auth::user();
        return view('admin.dashboard', compact('user'));
    }
}