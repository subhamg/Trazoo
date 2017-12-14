<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $table='businesses';
    protected $fillable = [    
             'businessname',
             'businesstype',
             'industry',
             'addressline1',
             'addressline2',
             'landmark',
             'city',
             'pincode',
             'state',
             'bank',
             'accountholdername',
             'accountnumber',
             'ifsccode',
             'pannumber',
             'gstcompliance',
             'gstin',
             'vat',
             'user_id',
    ];



}
