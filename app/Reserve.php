<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    const UPDATED_AT = null;
    protected $fillable = [

        'id_unit', 'price', 'firstname', 'lastname', 'telephone', 'address'

    ];
}
