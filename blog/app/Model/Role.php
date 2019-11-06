<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{	
	protected $table = 'role';

	protected $updated_at = false;

	protected $created_at = false;


	protected $fillable  = ['name', 'status', 'id'];
    

	public function roleContro()
	{
		return $this->belongsToMany(
			new \App\Model\Contro, 'role_contro', 'role_id', 'contro_id', 'id', 'id'
		);
	}
}
