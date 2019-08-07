<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{


     use SoftDeletes;
    protected $fillable = ['name', 'description'];

    //----------------Ahmed Osama--------------
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
