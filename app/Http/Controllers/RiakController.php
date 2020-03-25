<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Myproject\Riak\DemoInterface;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\Admin;
use App\Model\Phone;
use Illuminate\Support\Facades\Redis;

class RiakController extends Controller
{
    //
    public function index(DemoInterface $demo){
    	
    	//dd($demo->demo1());
    	$users=DB::table('user_admin')->get();
    	return view('user.index', ['users' => $users]);
//     	foreach($users as $v){
//     		echo $v->name;
//     	}
    }
    public function index2($id){
    	
    	echo 'userId='.$id;
    	
    }
    public function show_users(){
    	
    	$users =Admin::select(DB::raw('admin.*,count(phone.phone) as phoneCount'))->leftJoin('phone','phone.userId','=','admin.id')->groupBy('admin.id')->get()->toArray();
    	dd($users);
    }
    //redis
    public function redis(){
    	 Redis::set('names','hhc');
    	 echo Redis::get('name');
    }
}
