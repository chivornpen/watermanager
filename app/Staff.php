<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table='staffs';
    protected $fillable = ['name','sex','address','contactNo','email','ssid','position','salary','created_at','updated_at','authorizer','authorize_date','recordStatus','recordNum'];
}
