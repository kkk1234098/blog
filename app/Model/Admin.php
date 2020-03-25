<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
	protected $table = 'admin';
	
	public  function phone(){
		
		return $this->hasMany('App\Model\Phone','userId');
	}
	
}
