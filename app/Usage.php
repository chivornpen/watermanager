<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usage extends Model
{
    protected $table='usages';    
    protected $fillable = ['id','customer_id','startNo','endNo','startDate','endDate','isgenerateInv','user_id','authorizer','authorize_date'];
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
