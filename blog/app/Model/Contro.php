<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contro extends Model
{	
	protected $table = 'contro';

	protected $updated_at = false;

	protected $created_at = false;


	protected $fillable  = ['name', 'status', 'route', 'id'];
    //
}
