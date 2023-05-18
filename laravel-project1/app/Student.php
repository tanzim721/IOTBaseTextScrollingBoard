<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [ 
        'roll',
        'registation',
        'email',
        'gender',
        'bName',
        'eName',
        'birth',
        'fName',
        'mName',
        'gName',
        'department',
        'address'
    ];
}
