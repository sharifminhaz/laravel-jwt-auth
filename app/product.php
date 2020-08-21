<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'ProductName',
        'ProductType',
        'Quality' ,
        'Active' ,
        'Weight' ,
        'OwnerID',
    ];
}
