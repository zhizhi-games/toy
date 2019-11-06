<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{	
	protected $table = 'user';

	protected $updated_at = false;

	protected $created_at = false;


	protected $fillable  = ['name', 'avatar', 'ip'];
    //
}
