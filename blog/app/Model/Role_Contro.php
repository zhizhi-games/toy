<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role_Contro extends Model
{	
	protected $table = 'role_contro';

	protected $updated_at = false;

	protected $created_at = false;


	protected $fillable  = ['id', 'role_id', 'contro_id'];
   	

}
