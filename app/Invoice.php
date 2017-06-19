<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
     protected $table='invoices';
     protected $fillable = ['use_id','customer_id','invDate','startDate','endDate','numUsed','unitPrice','amount','discount','tax','invExpireDate','invStatuts','printed','user_id','authorizer','authorize_date'];
     public function usage()
    {
        return $this->belongsTo(Usage::class);
    }
}
