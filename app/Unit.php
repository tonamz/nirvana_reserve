<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = [

        'id', 'id_type', 'unit','price','status'

    ];
}
