<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommonController extends Controller
{
    public function imageUpload(Request $request)
    {
        if($request->hasFile('file1')) {
            $originName = $request->file('file1')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('file1')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            // // $request->file('upload')->move(public_path('images'), $fileName);
            $request->file('file1')->move(public_path('images/users'), $fileName);
            // $url = url(public_path('images/doctors').$fileName); 
            $msg = 'Image uploaded successfully';
            echo $msg;
        }
        echo "heree";
    }

}