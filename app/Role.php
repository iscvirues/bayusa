<?php

namespace bayusa;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
	protected $fillable = ['id','name'];

	public function users()
    {
        return $this->hasMany('bayusa\User');
    }
}
