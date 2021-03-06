<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $fillable = ['content'];
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'answers';

    public function question() {
        return $this->belongsTo('Question');
    }

    public function user() {
        return $this->belongsTo('User');
    }

}
