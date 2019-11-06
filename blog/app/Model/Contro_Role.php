<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contro_Role extends Model
{	
	protected $table = 'admin_role';

	protected $updated_at = false;

	protected $created_at = false;


	protected $fillable  = ['id', 'admin_id', 'role_id'];
    //
}
