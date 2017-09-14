<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');
    }

    
    //主页
    public function dashboard(){

    	return view('admin.dashboard');
        
    }
}
