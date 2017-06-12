<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table='roles';
    protected $fillable = ['name','displayName','user_id','authorizer','authorize_date','recordStatus','recordNum','created_at','updated_at'];
}
