<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\port\navContract;

class Nav extends Model implements navContract
{
	protected $table = 'nav';

	protected $updated_at = false;

	protected $created_at = false;

	protected $fillable  = ['name', 'route', 'order', 'status'];

	public function addNavInfo($request_data)
	{	
		return parent::create($request_data);
	}

	public function getNavInfo(){
		return parent::where('status', 1)->orderBy('order', 'DESC')->get();
	}

	public function exitNavInfo($request_data)
	{	
		return parent::save($request_data);
	}

	public function deleteNavInfo($request_data)
	{	
		return parent::destroy($request_data);
	}

}
