<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Config;

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

    public function testdb(){

	  	Config::set('database.connections.mysql.database', 'magento2');       
		Config::set('database.connections.mysql.username','root');
		Config::set('database.connections.mysql.password','');
		Config::set('database.default', 'mysql');
\DB::reconnect('mysql');

		dd(\DB::connection('mysql'));
    }
}
