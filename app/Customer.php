<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table='customers';
    protected $fillable = ['name','contactNo','email','homeNo','streetNo','village_id','district_id','commune_id','province_id','cusbc','cusqr','user_id','cusStatus','authorizer','authorize_date','recordStatus','recordNum'];
    public function village()
    {
    	return $this->belongsTo('App\Village');
    }
}