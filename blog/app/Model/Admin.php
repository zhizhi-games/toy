<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{	
	protected $table = 'admin';

	protected $updated_at = false;

	protected $created_at = false;


	protected $fillable  = ['account', 'id', 'password'];
   	
	// public function getIdAttribute($value)
    // {
        // return encrypt($value);
    // }

	public function setPasswordAttribute($value)
	{	

		$this->attributes['password'] =  encrypt($value);
	}

    public function getAdminRole()
    {
    	return $this->belongsToMany(
    		new \App\Model\Role, 'admin_role', 'admin_id', 'role_id', 'id', 'id' 
    	);
    }
}
