<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    // Table
    protected $table = 'posts';

    // Primary Key
    public $primaryKey = 'id';

    // Time Stamp
    public $timestamps = true;

    //Model relationship
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
